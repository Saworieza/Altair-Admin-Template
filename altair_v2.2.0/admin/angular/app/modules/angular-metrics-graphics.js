angular
    .module('metricsGraphics', [])
    .directive('metricsGraphics', function($window, $timeout) {
    return {
        restrict: 'A',
        scope: {
            data: '=',
            options: '='
        },
        link: function(scope, element) {

            if(!scope.data) {
                return;
            }

            var options = {
                baselines: [],
                description: null,
                right: 20,
                title: null,
                height: element.height() || 240,
                x_accessor: null,
                y_accessor: null
            };

            // override default options with values from the scope
            if (scope.options) {
                Object.keys(scope.options).forEach(function(key) {
                    options[key] = scope.options[key];
                });
            }

            var el = element[0];

            options.target = '#' + el.id;

            function make_graph(options, el) {
                options.width = el.offsetWidth || '100%';
                MG.data_graphic(options);
            }

            // create the chart
            scope.$watch('data', function(){
                make_graph(options,el);
            });

            angular.element($window).on('resize', function(e) {
                // Reset timeout
                $timeout.cancel(scope.resizingTimer);
                // Add a timeout to not call the resizing function every pixel
                scope.resizingTimer = $timeout( function() {
                    make_graph(options,el);
                    return scope.$apply();
                }, 280);
            });

        }
    };
});