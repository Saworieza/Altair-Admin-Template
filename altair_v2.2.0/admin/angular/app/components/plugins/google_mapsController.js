angular
    .module('altairApp')
    .controller('map_directionsCtrl', [
        '$scope',
        '$timeout',
        function ($scope,$timeout) {

            $scope.drivingMode = false; // indicates streetview should be on driving mode
            $scope.drivingSpeed = 50; // 100 km per hour
            $scope.driverMode = false;

            $scope.origin = "1135 Karamea-Kohaihai Rd, Kahurangi National Park, Tasman";
            $scope.destination = "Pier St, Jackson Bay, West Coast, New Zeland";

            var map;
            var updateFrequency = 1*1000; // half a second
            var savedPath = null;  // position and count to restart from pause mode

            // Overview path between orign and destination.
            // This does NOT exactly follow the path of a road. It is used to draw path on the map.
            var overviewPath=[];
            var overviewPathIndex=0;  // current index points of overview path

            // Detailed path between overview path points
            // This does exactly follow the path of a road.
            var detailedPath=[];
            var detailedPathIndex=0;  // current index points of detailed path

            var directionsService = new google.maps.DirectionsService();

            //
            // At google's mercy, we get points to drive
            //
            var driveOverviewPaths = function() {
                var op1, op2;
                // drive detailed path because we have not drove through all
                if (detailedPath.length > detailedPathIndex) {
                    driveDetailedPaths(); //SHOW TIME !!!!
                }
                // drove all detailed path, get a new detailed path from overview paths
                else {
                    op1 = overviewPath[overviewPathIndex];
                    op2 = overviewPath[overviewPathIndex+1];
                    overviewPathIndex += 1;
                    if (op1 && op2) {
                        var request ={origin:op1, destination:op2, travelMode: 'DRIVING'};
                        directionsService.route(request, function(response, status) {
                            if (status == google.maps.DirectionsStatus.OK) {
                                detailedPath = response.routes[0].overview_path;
                                console.log('Updated detailedPath for overviewpath between',
                                    overviewPathIndex, 'and', overviewPathIndex+1,
                                    'with', detailedPath.length, 'geo points');
                                detailedPathIndex = 0;
                                driveOverviewPaths();
                            }
                        });
                    }
                }
            };

            //
            // drive between two points by meter by meter and show it.
            //
            var driveDetailedPaths = function() {
                var meter = Math.floor(
                    (parseInt($scope.drivingSpeed, 10) * 1000) / 3600  // how far we deive every second
                    * (updateFrequency/1000));                         // how often do we see streetview
                var point1 = detailedPath[detailedPathIndex];
                var point2 = detailedPath[detailedPathIndex+1];

                if (point1 && point2) {
                    //calculate where to look from two points
                    var heading = google.maps.geometry.spherical.computeHeading(point1, point2);
                    var distance = google.maps.geometry.spherical.computeDistanceBetween(point1, point2);
                    var totalCount = parseInt(distance / meter, 10) || 1;

                    var drive = function(count, position) {
                        console.log(overviewPathIndex + '/' + overviewPath.length,
                            detailedPathIndex + '/' + detailedPath.length,
                            count + '/' + totalCount, 'distance', meter);
                        if (totalCount >= count) {
                            $timeout( function() {
                                var pov = map.getStreetView().getPov();
                                if ($scope.driverMode) {
                                    map.setHeading(heading); // map heading is different from pov heading
                                    pov.heading = heading;
                                }

                                map.getStreetView().setPosition(position);
                                map.getStreetView().setPov(pov);
                                map.getStreetView().setVisible(true);

                                var distanceToPoint2 = google.maps.geometry.spherical.computeDistanceBetween(position, point2);
                                var nextPosition = distanceToPoint2 < meter ?
                                    point2 : google.maps.geometry.spherical.computeOffset(position, meter, heading);
                                if ($scope.drivingMode) {
                                    drive(++count, nextPosition);
                                } else {
                                    savedPath = {count: count, position: position};
                                    return false;
                                }
                            }, updateFrequency);
                        } else {
                            detailedPathIndex += 1;
                            $scope.$emit('driveOverviewPath');
                        }
                    };

                    var count = (savedPath && savedPath.count) || 1;
                    var position = (savedPath && savedPath.position) || point1;
                    savedPath = null; // once start driving, nullify savedPath
                    drive(count, position);

                } else {
                    detailedPathIndex += 1;
                    $scope.$emit('driveOverviewPath');
                }
            };

            $scope.$on('driveOverviewPath', function() {
                driveOverviewPaths();
            });

            $scope.drive = function() {
                $scope.drivingMode = !$scope.drivingMode;
                if ($scope.drivingMode) {
                    map.setZoom(16);
                    if (savedPath) { // if continues
                        driveDetailedPaths();
                    } else {
                        $scope.$emit('driveOverviewPath');
                    }
                }
            };

            // When direction is changed
            // change overviewPath and reset driving directions
            $scope.directionsChanged = function() {
                overviewPath = this.directions.routes[0].overview_path;
                console.log('direction is changed', 'got overviewPath with', overviewPath.length, 'points');
                map.getStreetView().setPosition(overviewPath[0]);

                overviewPathIndex = 0; // set indexes to 0s
                detailedPathIndex = 0;
                $scope.drivingMode = false;   // stop driving
                toContinue = null;     // reset continuing positon
            };

            $scope.$on('mapInitialized', function(e, _map_) {
                map = _map_;
                window.map = map;
            });
        }
    ])
    .controller('gmap_neutralBlueCtrl', [
        '$scope',
        '$timeout',
        function ($scope,$timeout) {

            $scope.gmap_styles = [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"color": "#193341"}]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{"color": "#2c5a71"}]
                }, {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{"color": "#29768a"}, {"lightness": -37}]
                }, {
                    "featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#406d80"}]}, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{"color": "#406d80"}]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{"visibility": "on"}, {"color": "#3e606f"}, {"weight": 2}, {"gamma": 0.84}]
                }, {
                    "elementType": "labels.text.fill", "stylers": [{"color": "#ffffff"}]}, {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [{"weight": 0.6}, {"color": "#1a3541"}]
                }, {
                    "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{"color": "#2c5a71"}]
                }
            ];

        }
    ])
    .controller('gmap_subtleGreyCtrl', [
        '$scope',
        '$timeout',
        function ($scope,$timeout) {

            $scope.gmap_styles = [
                {
                    "featureType": "landscape",
                    "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
                }, {
                    "featureType": "poi",
                    "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
                }, {
                    "featureType": "road.highway",
                    "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
                }, {
                    "featureType": "road.local",
                    "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
                }, {
                    "featureType": "transit",
                    "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                }, {
                    "featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
                }
            ];

        }
    ]);