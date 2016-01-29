var buildChartDirective = function (chartType) {
    return {
        restrict: 'E',
        replace: true,
        scope: {
            data: "=",
            options: "="
        },
        link: function (scope, element, attrs) {

            var options = {};
            if (scope.options) {
                options = scope.options;
            }

            var span = document.createElement('span');
            span.textContent = scope.data.join();

            if (!attrs.class) {
                span.className = "peity";
            } else {
                span.className = attrs.class;
            }

            if (element[0].nodeType === 8) {
                element.replaceWith(span);
            } else {
                element[0].appendChild(span);
            }

            if(options.height) {
                element.height(options.height);
            }

            var chart = jQuery(span).peity(chartType, options);

            return scope.$watch('data', function() {
                return chart
                    .text(scope.data)
                    .change();
            });

        }
    };
};

angular
    .module('angular-peity', [])
    .directive('peityPieChart', function () {
        return buildChartDirective("pie");
    })
    .directive('peityDonutChart', function () {
        return buildChartDirective("donut");
    })

    .directive('peityBarChart', function () {
        return buildChartDirective("bar");
    })
    .directive('peityLineChart', function () {
        return buildChartDirective("line");
    });


