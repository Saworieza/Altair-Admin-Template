angular
    .module('altairApp')
    .controller('dashboardCtrl', [
        '$rootScope',
        '$scope',
        '$interval',
        '$timeout',
        'sale_chart_data',
        'user_data',
        'variables',
        function ($rootScope,$scope,$interval,$timeout,sale_chart_data,user_data,variables) {

        // statistics
            $scope.dynamicStats = [
                {
                    id: '1',
                    title: 'Visitors (last 7d)',
                    count: '0',
                    chart_data: [ 5,3,9,6,5,9,7 ],
                    chart_options: {
                        height: 28,
                        width: 48,
                        fill: ["#d84315"],
                        padding: 0.2
                    }
                },
                {
                    id: '2',
                    title: 'Sale',
                    count: '0',
                    chart_data: [ 5,3,9,6,5,9,7,3,5,2 ],
                    chart_options: {
                        height: 28,
                        width: 64,
                        fill: "#d1e4f6",
                        stroke: "#0288d1"
                    }
                },
                {
                    id: '3',
                    title: 'Orders Completed',
                    count: '0',
                    chart_data: [ '64/100' ],
                    chart_options: {
                        height: 24,
                        width: 24,
                        fill: ["#8bc34a", "#eee"]
                    }
                },
                {
                    id: '4',
                    title: 'Visitors (live)',
                    count: '1',
                    chart_data: [ 5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2 ],
                    chart_options: {
                        height: 28,
                        width: 64,
                        fill: "#efebe9",
                        stroke: "#5d4037"
                    }
                }
            ];

        // countUp update
            $scope.$on('onLastRepeat', function (scope, element, attrs) {
                $scope.dynamicStats[0].count = '12456';
                $scope.dynamicStats[1].count = '142384';
                $scope.dynamicStats[2].count = '64';

                // update live statistics
                function getRandomVal(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                $interval(function () {
                    var random = Math.round(Math.random() * 10);
                    var live_values = $scope.dynamicStats[3].chart_data.toString().split(",");

                    live_values.shift();
                    live_values.push(random);
                    live_values.join(",");

                    var countTo = getRandomVal(20, 100);

                    $scope.dynamicStats[3].chart_data = live_values;
                    $scope.dynamicStats[3].count = ($scope.dynamicStats[3].count == countTo) ? countTo : getRandomVal(20, 120);

                }, 2000)
            });

        // large chart
            $scope.sale_chart_data = [sale_chart_data];

            for (var i = 0; i < $scope.sale_chart_data.length; i++) {
                $scope.sale_chart_data[i] = MG.convert.date($scope.sale_chart_data[i], 'date');
            }
            $scope.sale_chart_options = {
                data: $scope.sale_chart_data,
                y_scale_type: 'log',
                right: 20,
                x_accessor: 'date',
                y_accessor: 'value',
                markers: [
                    {
                        'date': new Date('2016-02-26T00:00:00.000Z'),
                        'label': 'Winter Sale'
                    },
                    {
                        'date': new Date('2016-06-02T00:00:00.000Z'),
                        'label': 'Spring Sale'
                    }
                ]
            };

        // circular statistics
            $scope.stat_conversions_data = [5,3,9,6,5,9,7];
            $scope.stat_conversions_options = {
                height: 64,
                width: 96,
                fill: ["#d84315"],
                padding: 0.2
            };

            $scope.epc_user_messages = {
                barColor:'#03a9f4',
                scaleColor: false,
                trackColor: '#f5f5f5',
                lineWidth: 5,
                size: 110,
                easing: variables.bez_easing_swiftOut
            };

            $scope.epc_tasks_list = {
                barColor:'#9c27b0',
                scaleColor: false,
                trackColor: '#f5f5f5',
                lineWidth: 5,
                size: 110,
                easing: variables.bez_easing_swiftOut
            };

            $scope.epc_orders = {
                barColor:'#009688',
                scaleColor: false,
                trackColor: '#f5f5f5',
                lineWidth: 5,
                size: 110,
                easing: variables.bez_easing_swiftOut
            };

            $scope.epc_user_registrations = {
                barColor:'#607d8b',
                scaleColor: false,
                trackColor: '#f5f5f5',
                lineWidth: 5,
                size: 110,
                easing: variables.bez_easing_swiftOut
            };

        // statistics (chartist)
            $scope.chartist_stat_data = {
                labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
                series: [
                    [5, 4, 3, 7],
                    [3, 2, 9, 5],
                    [1, 5, 8, 4],
                    [2, 3, 4, 6],
                    [4, 1, 2, 1]
                ]
            };
            $scope.chartist_stat_options = {
                stackBars: true,
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return value.split(/\s+/).map(function(word) {
                            return word[0];
                        }).join('');
                    }
                },
                axisY: {
                    offset: 20
                }
            };
            $scope.chartist_stat_options_responsive = [
                // Options override for media > 400px
                ['screen and (min-width: 400px)', {
                    reverseData: true,
                    horizontalBars: true,
                    axisX: {
                        labelInterpolationFnc: Chartist.noop
                    },
                    axisY: {
                        offset: 60
                    }
                }],
                // Options override for media > 800px
                ['screen and (min-width: 800px)', {
                    stackBars: false,
                    seriesBarDistance: 10
                }],
                // Options override for media > 1000px
                ['screen and (min-width: 1000px)', {
                    reverseData: false,
                    horizontalBars: false,
                    seriesBarDistance: 15
                }]
            ];

        // video player
            $scope.video_data = [
                {
                    id: '-CYs99M7hzA',
                    name: 'Unboxing the HERO4',
                    source: 'Mashable'
                },
                {
                    id: 'te689fEo2pY',
                    name: 'Apple Watch Unboxing & Setup',
                    source: 'Unbox Therapy'
                },
                {
                    id: '7AFJeaYojhU',
                    name: 'Energous WattUp Power Transmitter',
                    source: 'TechCrunch'
                },
                {
                    id: 'hajnEpCq5SE',
                    name: 'The new MacBook - Design',
                    source: 'Apple'
                }
            ];

            var $video_player = $('#video_player'),
                $video_playlist = $('#video_player_playlist'),
                active_class = 'md-list-item-active';

            $scope.videoChange = function($event,videoID) {

                var $this = $($event.currentTarget);
                if(!$this.hasClass(active_class)) {
                    var iframe_embed = '<iframe height="150" width="300" data-uk-cover src="https://www.youtube.com/embed/' + videoID + '?rel=0" frameborder="0" allowfullscreen style="max-height:100%"></iframe>';

                    $video_playlist.children('li').removeClass(active_class);
                    $this.addClass(active_class);

                    $video_player.velocity({
                            translateZ: 0,
                            scale: 0,
                            opacity: 0
                        },
                        {
                            duration: 280,
                            easing: variables.easing_swiftOut,
                            complete: function() {
                                $video_player.html(iframe_embed);
                                setTimeout(function() {
                                    $video_player.velocity('reverse');
                                },280)
                            }
                        }
                    );

                }

            };

        // weather
            $scope.weatherToday = {
                city: 'Some City',
                backgroundImg: 'assets/img/gallery/Image17.jpg',
                icon: 'wi-day-sunny-overcast',
                temperature: '14'
            };
            $scope.weatherData = [
                {
                    icon: 'wi-day-sunny-overcast',
                    temperature: '22',
                    description: 'Mostly Sunny',
                    date: moment().add(1,'days').format('DD MMM (dddd)')
                },
                {
                    icon: 'wi-cloudy',
                    temperature: '19',
                    description: 'Partly Cloudy',
                    date: moment().add(2,'days').format('DD MMM (dddd)')
                },
                {
                    icon: 'wi-day-rain',
                    temperature: '16',
                    description: 'Rainy',
                    date: moment().add(3,'days').format('DD MMM (dddd)')
                },
                {
                    icon: 'wi-day-sunny uk-text-warning',
                    temperature: '24',
                    description: 'Sunny',
                    date: moment().add(4,'days').format('DD MMM (dddd)')
                }
            ];


        // calendar
            var $clndr_events = $('#clndr_events'),
                animate_change = function() {
                    $clndr_events
                        .removeClass('events_visible')
                        .children('.clndr')
                        .addClass('animated_change');

                    $timeout(function() {
                        $clndr_events
                            .children('.clndr')
                            .removeClass('animated_change');
                    },380);
                };

            $scope.clndr_events = [
                { date: moment().startOf('month').add(7, 'days'), title: 'Doctor appointment', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' },
                { date: moment().startOf('month').add(8, 'days'), title: 'John\'s Birthday', url: 'javascript:void(0)' },
                { date: moment().startOf('month').add(8, 'days'), title: 'Party', url: 'javascript:void(0)', timeStart: '08:00', timeEnd: '08:30' },
                { date: moment().startOf('month').add(12, 'days'), title: 'Meeting', url: 'javascript:void(0)', timeStart: '18:00', timeEnd: '18:20' },
                { date: moment().startOf('month').add(17, 'days'), title: 'Work Out', url: 'javascript:void(0)', timeStart: '07:00', timeEnd: '08:00' },
                { date: moment().startOf('month').add(17, 'days'), title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '11:10', timeEnd: '11:45' },
                { date: moment().startOf('month').add(22, 'days'), title: 'Meeting', url: 'javascript:void(0)', timeStart: '20:25', timeEnd: '20:50' },
                { date: moment().startOf('month').add(25, 'days'), title: 'Haircut', url: 'javascript:void(0)' },
                { date: moment().startOf('month').add(25, 'days'), title: 'Lunch with Katy', url: 'javascript:void(0)', timeStart: '08:45', timeEnd: '09:45' },
                { date: moment().startOf('month').add(25, 'days'), title: 'Concept review', url: 'javascript:void(0)', timeStart: '15:00', timeEnd: '16:00' },
                { date: moment().startOf('month').add(26, 'days'), title: 'Swimming Poll', url: 'javascript:void(0)', timeStart: '13:50', timeEnd: '14:20' },
                { date: moment().startOf('month').add(28, 'days'), title: 'Team Meeting', url: 'javascript:void(0)', timeStart: '17:25', timeEnd: '18:15' },
                { date: moment().add(1, 'months').startOf('month').add(1, 'days'), title: 'Dinner with John', url: 'javascript:void(0)', timeStart: '16:25', timeEnd: '18:45' },
                { date: moment().add(1, 'months').startOf('month').add(12, 'days'), title: 'Business Meeting', url: 'javascript:void(0)', timeStart: '10:00', timeEnd: '11:00' }
            ];

            var daysOfTheWeek = [];
            for (var i = 0; i < 7; i++) {
                daysOfTheWeek.push(moment().weekday(i).format('dd'));
            }
            $scope.clndr_options = {
                weekOffset: 1, // Monday
                daysOfTheWeek: daysOfTheWeek
            };

            // next month
            $scope.clndr_next_month = function() {
                animate_change();
                $timeout(function() {
                    $scope.clndr.forward();
                },280);
            };

            // previous month
            $scope.clndr_prev_month = function() {
                animate_change();
                $timeout(function() {
                    $scope.clndr.back();
                },280);
            };

            $scope.clndr_today = function() {
                animate_change();
                $timeout(function() {
                    $scope.clndr
                        .setYear(moment().format('YYYY'))
                        .setMonth(moment().format('M') - 1);
                },280);
            };

            // show events panel
            $scope.showEvents = function($event,day) {
                $event.preventDefault();
                var $this = $($event.currentTarget);

                if(day.events.length && !$this.hasClass('day-active')) {

                    var delay = !$clndr_events.hasClass('events_visible') ? 280 : 0;

                    $clndr_events.addClass('events_visible');

                    $scope.clndrWidth();

                    $scope.selectedDay = function(event){
                        return (moment(day.date).format('M-D-YYYY') == moment(event.date).format('M-D-YYYY'))
                    };

                    $timeout(function() {
                        $('.clndr_events')
                            .children('.clndr_event')
                            .velocity("transition.slideUpIn", {
                                stagger: 100,
                                drag: true
                            })
                    },delay);

                    $this
                        .siblings('.day').removeClass('day-active')
                        .end()
                        .addClass('day-active');

                }
            };

            // close events panel
            $scope.closeEvents = function() {
                $clndr_events.removeClass('events_visible events_over')
            };

            // add event modal
            $scope.event_modal = UIkit.modal("#modal_clndr_new_event", {
                target: '#modal_clndr_new_event'
            });
            $scope.addEventForm = function($event) {
                if ( $scope.event_modal.isActive() ) {
                    event_modal.hide();
                } else {
                    $scope.event_modal.show();
                    // hide events panel
                    $clndr_events.removeClass('events_visible');
                }
            };

            $scope.newEvent = [];

            $scope.addEvent = function($event) {
                var e_title = '#clndr_event_title_control',
                    e_link = '#clndr_event_link_control',
                    e_date = '#clndr_event_date_control',
                    e_start = '#clndr_event_start_control',
                    e_end = '#clndr_event_end_control';

                if(!$scope.newEvent.title) {
                    $(e_title)
                        .addClass('md-input-danger')
                        .focus()
                        .change();
                    return false;
                }

                if(!$scope.newEvent.date) {
                    $(e_date)
                        .addClass('md-input-danger')
                        .focus()
                        .change();
                    return false;
                }

                var new_event = [
                    { date: $(e_date).val(), title: $(e_title).val(), url: $(e_link).val() ? $(e_link).val() : 'javascript:void(0)', timeStart: $(e_start).val(), timeEnd: $(e_end).val() }
                ];

                $scope.clndr_events.push(new_event[0]);

                $scope.clndr.addEvents(new_event);
                $scope.clndr.setMonth(moment($(e_date).val()).format('M') - 1);

                // hide modal
                $scope.event_modal.hide();

                $(e_title+','+e_link+','+e_date+','+e_start+','+e_end)
                    .removeClass('md-input-danger')
                    .val('')
                    .change();
            };

            $scope.clndrWidth = function() {

                var dayWidth = $clndr_events.find('.day > span').outerWidth(),
                calMinWidth = dayWidth * 7 + 240 + 32 + 14;

                ($clndr_events.width() < (calMinWidth)) ? $clndr_events.addClass('events_over') : $clndr_events.removeClass('events_over');
            };

            // timeline
            $scope.user_data = user_data[0];

            $scope.sSidebar = {
                site_online: true,
                top_bar: true,
                minify_assets: true
            };

        }
    ])
    // google maps
    .controller('userMapsCtrl', [
        '$rootScope',
        '$scope',
        '$timeout',
        'utils',
        function($rootScope,$scope, $timeout,utils) {

            var map;

            $scope.map_center = ['37.390267','-122.076417'];
            $scope.map_zoom = '12';
            // add styles to map (https://snazzymaps.com/)
            $scope.map_style = [
                {
                    "featureType": "water",
                    "stylers": [{"color": "#46bcec"}, {"visibility": "on"}]
                }, {"featureType": "landscape", "stylers": [{"color": "#f2f2f2"}]}, {
                    "featureType": "road",
                    "stylers": [{"saturation": -100}, {"lightness": 45}]
                }, {
                    "featureType": "road.highway",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#444444"}]
                }, {"featureType": "transit", "stylers": [{"visibility": "off"}]}, {
                    "featureType": "poi",
                    "stylers": [{"visibility": "off"}]
                }
            ];
            // marker icon
            $scope.marker_icon = {
                url: utils.isHighDensity() ? 'assets/img/md-images/ic_location_history_black_48dp.png' : 'assets/img/md-images/ic_location_history_black_24dp.png',
                size: utils.isHighDensity() ? [48, 48] : [24, 24],
                scaledSize: [24, 24]
            };

            $scope.$on('mapInitialized', function(evt, evtMap) {
                map = evtMap;
            });

            // show info window on marker click
            $scope.showInfo = function(evt, id) {
                $scope.user = $scope.gmap_users[id];
                $scope.showInfoWindow.apply(this, [evt, 'infoWindow']);
            };

            // show marker
            $scope.showMarker = function(evt,id) {
                $scope.user = $scope.gmap_users[id];
                $scope.showInfoWindow.apply(this, [evt, 'infoWindow', $scope.map.markers[id]]);
                $scope.map_center = [$scope.user.lat,$scope.user.lon];
                $scope.map_zoom = '14';
            };

            // users
            $scope.gmap_users = [
                {
                    name: "Jackson Heathcote",
                    company: "Larson, Langosh and Fritsch",
                    avatar: "assets/img/avatars/avatar_01_tn.png",
                    lat: "37.406267",
                    lon: "-122.06742"
                },
                {
                    name: "Lelah Leffler",
                    company: "Rowe PLC",
                    avatar: "assets/img/avatars/avatar_02_tn.png",
                    lat: "37.379267",
                    lon: "-122.02148"
                },
                {
                    name: "Lawson Kiehn",
                    company: "Legros Inc",
                    avatar: "assets/img/avatars/avatar_03_tn.png",
                    lat: "37.410267",
                    lon: "-122.11048"
                },
                {
                    name: "Jacques VonRueden",
                    company: "Legros, Balistreri and Adams",
                    avatar: "assets/img/avatars/avatar_04_tn.png",
                    lat: "37.397267",
                    lon: "-122.084417"
                },{
                    name: "Neoma Littel",
                    company: "Conn-Ferry",
                    avatar: "assets/img/avatars/avatar_05_tn.png",
                    lat: "37.372267",
                    lon: "-122.090417"
                }
            ];

        }
    ])
;