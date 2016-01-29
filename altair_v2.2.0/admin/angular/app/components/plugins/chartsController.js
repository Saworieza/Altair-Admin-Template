angular
    .module('altairApp')
    .controller('chartsCtrl', [
        '$scope',
        '$interval',
        '$window',
        'mg_chart_linked_1',
        'mg_chart_linked_2',
        'mg_confidence_band',
        'mg_currency',
        function ($scope,$interval,$window,mg_chart_linked_1,mg_chart_linked_2,mg_confidence_band,mg_currency) {

            // metrics graphics
                // linked charts
                $scope.mg_chart_linked_1_data = [mg_chart_linked_1];

                for (var i = 0; i < $scope.mg_chart_linked_1_data.length; i++) {
                    $scope.mg_chart_linked_1_data[i] = MG.convert.date($scope.mg_chart_linked_1_data[i], 'date');
                }

                $scope.mg_chart_linked_1_options = {
                    data: $scope.mg_chart_linked_1_data,
                    linked: true,
                    x_accessor: 'date',
                    y_accessor: 'value',
                    xax_count: 4
                };

                $scope.mg_chart_linked_2_data = [mg_chart_linked_2];

                for (var i = 0; i < $scope.mg_chart_linked_2_data.length; i++) {
                    $scope.mg_chart_linked_2_data[i] = MG.convert.date($scope.mg_chart_linked_2_data[i], 'date');
                }

                $scope.mg_chart_linked_2_options = {
                    data:  $scope.mg_chart_linked_2_data,
                    area: false,
                    linked: true,
                    x_accessor: 'date',
                    y_accessor: 'value',
                    xax_count: 4
                };

                // confidence band
                $scope.mg_confidence_band_data = [mg_confidence_band];

                for (var i = 0; i < $scope.mg_confidence_band_data.length; i++) {
                    $scope.mg_confidence_band_data[i] = MG.convert.date($scope.mg_confidence_band_data[i], 'date');
                }

                $scope.mg_confidence_band_options = {
                    title: "Confidence Band",
                    description: "This is an example of a graphic with a confidence band and extended x-axis ticks enabled.",
                    data: $scope.mg_confidence_band_data,
                    format: 'percentage',
                    show_secondary_x_label: false,
                    show_confidence_band: ['l', 'u'],
                    x_accessor: 'date',
                    y_accessor: 'value',
                    x_extended_ticks: true
                };

                // currency
                $scope.mg_currency_data = [mg_currency];

                for (var i = 0; i < $scope.mg_currency_data.length; i++) {
                    $scope.mg_currency_data[i] = MG.convert.date($scope.mg_currency_data[i], 'date');
                }

                $scope.mg_currency_options = {
                    title: "Some Currency",
                    description: "Here is an example that uses custom units for currency.",
                    data: $scope.mg_currency_data,
                    yax_units: '$',
                    x_accessor: 'date',
                    y_accessor: 'value'
                };


                // c3.js
                var c3chart_bar_stacked_id = '#c3_chart_bar_stacked';
                var c3chart_bar_stacked = c3.generate({
                    bindto: c3chart_bar_stacked_id,
                    data: {
                        columns: [
                            ['data1', -30, 200, 200, 400, -150, 250],
                            ['data2', 130, 100, -100, 200, -150, 50],
                            ['data3', -230, 200, 200, -300, 250, 250]
                        ],
                        type: 'bar',
                        groups: [
                            ['data1', 'data2']
                        ]
                    },
                    grid: {
                        y: {
                            lines: [
                                {
                                    value: 0
                                }
                            ]
                        }
                    },
                    color: {
                        pattern: ['#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd', '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf']
                    }
                });

                $(c3chart_bar_stacked_id).waypoint({
                    handler: function() {
                        setTimeout(function () {
                            c3chart_bar_stacked.groups([
                                ['data1', 'data2', 'data3']
                            ])
                        }, 1000);

                        setTimeout(function () {
                            c3chart_bar_stacked.load({
                                columns: [
                                    ['data4', 100, -50, 150, 200, -300, -100]
                                ]
                            });
                        }, 1500);

                        setTimeout(function () {
                            c3chart_bar_stacked.groups([
                                ['data1', 'data2', 'data3', 'data4']
                            ])
                        }, 2000);
                        this.destroy();
                    },
                    offset: '80%'
                });

                $($window).on('debouncedresize', function () {
                    c3chart_bar_stacked.resize();
                });

            // donut chart
            var c3chart_donut_id = '#c3_chart_donut';

            if ( $(c3chart_donut_id).length ) {

                var c3chart_donut = c3.generate({
                    bindto: c3chart_donut_id,
                    data: {
                        columns: [
                            ['data1', 30],
                            ['data2', 120]
                        ],
                        type : 'donut',
                        onclick: function (d, i) { console.log("onclick", d, i); },
                        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                    },
                    donut: {
                        title: "Iris Petal Width",
                        width: 40
                    },
                    color: {
                        pattern: ['#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd', '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf']
                    }
                });

                $(c3chart_donut_id).waypoint({
                    handler: function() {
                        setTimeout(function () {
                            c3chart_donut.load({
                                columns: [
                                    ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                                    ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                                    ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                                ]
                            });
                        }, 1500);

                        setTimeout(function () {
                            c3chart_donut.unload({
                                ids: 'data1'
                            });
                            c3chart_donut.unload({
                                ids: 'data2'
                            });
                        }, 2500);
                        this.destroy();
                    },
                    offset: '80%'
                });

                $($window).on('debouncedresize', function () {
                    c3chart_donut.resize();
                });

            }

            // spline chart
            var c3chart_spline_id = '#c3_chart_spline';

            if ( $(c3chart_spline_id).length ) {

                var c3chart_spline = c3.generate({
                    bindto: c3chart_spline_id,
                    data: {
                        columns: [
                            ['data1', 30, 200, 100, 400, 150, 250],
                            ['data2', 130, 100, 140, 200, 150, 50]
                        ],
                        type: 'spline'
                    },
                    color: {
                        pattern: ['#5E35B1', '#FB8C00']
                    }
                });

                $($window).on('debouncedresize', function () {
                    c3chart_spline.resize();
                });

            }

            // area stacked
            var c3chart_area_stacked_id = '#c3_chart_area_stacked';

            if ( $(c3chart_area_stacked_id).length ) {

                var c3chart_area_stacked = c3.generate({
                    bindto: c3chart_area_stacked_id,
                    data: {
                        columns: [
                            ['data1', 300, 350, 300, 0, 0, 120],
                            ['data2', 130, 100, 140, 200, 150, 50]
                        ],
                        types: {
                            data1: 'area-spline',
                            data2: 'area-spline'
                        },
                        groups: [['data1', 'data2']]
                    },
                    color: {
                        pattern: ['#1565C0', '#727272']
                    }
                });

                $($window).on('debouncedresize', function () {
                    c3chart_area_stacked.resize();
                });

            }

            // scatter chart
            var c3chart_scatter_id = '#c3_chart_scatter';

            if ( $(c3chart_scatter_id).length ) {

                var c3chart_scatter = c3.generate({
                    bindto: c3chart_scatter_id,
                    data: {
                        xs: {
                            setosa: 'setosa_x',
                            versicolor: 'versicolor_x',
                        },
                        // iris data from R
                        columns: [
                            ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
                            ["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
                            ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                            ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
                        ],
                        type: 'scatter'
                    },
                    axis: {
                        x: {
                            label: 'Sepal.Width',
                            tick: {
                                fit: false
                            }
                        },
                        y: {
                            label: 'Petal.Width'
                        }
                    },
                    color: {
                        pattern: ['#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd', '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf']
                    }
                });

                $(c3chart_scatter_id).waypoint({
                    handler: function() {

                        setTimeout(function () {
                            c3chart_scatter.load({
                                xs: {
                                    virginica: 'virginica_x'
                                },
                                columns: [
                                    ["virginica_x", 3.3, 2.7, 3.0, 2.9, 3.0, 3.0, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3.0, 2.5, 2.8, 3.2, 3.0, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3.0, 2.8, 3.0, 2.8, 3.8, 2.8, 2.8, 2.6, 3.0, 3.4, 3.1, 3.0, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3.0, 2.5, 3.0, 3.4, 3.0],
                                    ["virginica", 2.5, 1.9, 2.1, 1.8, 2.2, 2.1, 1.7, 1.8, 1.8, 2.5, 2.0, 1.9, 2.1, 2.0, 2.4, 2.3, 1.8, 2.2, 2.3, 1.5, 2.3, 2.0, 2.0, 1.8, 2.1, 1.8, 1.8, 1.8, 2.1, 1.6, 1.9, 2.0, 2.2, 1.5, 1.4, 2.3, 2.4, 1.8, 1.8, 2.1, 2.4, 2.3, 1.9, 2.3, 2.5, 2.3, 1.9, 2.0, 2.3, 1.8],
                                ]
                            });
                        }, 1000);
                        setTimeout(function () {
                            c3chart_scatter.unload({
                                ids: 'setosa'
                            });
                        }, 2000);
                        setTimeout(function () {
                            c3chart_scatter.load({
                                columns: [
                                    ["virginica", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                                ]
                            });
                        }, 3000);

                        this.destroy();
                    },
                    offset: '80%'
                });

                $($window).on('debouncedresize', function () {
                    c3chart_scatter.resize();
                });

            }

            // live update gauge chart
            var c3_server_load_id = '#c3_server_load';
            if($(c3_server_load_id).length) {
                var server_1 = c3.generate({
                    bindto: c3_server_load_id,
                    data: {
                        columns: [
                            ['data', 24]
                        ],
                        type: 'gauge',
                        onclick: function (d, i) { console.log("onclick", d, i); },
                        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
                    },
                    gauge: {
                        label: {
                            format: function(value, ratio) {
                                return value;
                            },
                            show: false
                        },
                        min: 0,
                        max: 100,
                        width: 36
                    },
                    color: {
                        pattern: ['#D32F2F', '#F57C00', '#388E3C' ], // the three color levels for the percentage values.
                        threshold: {
                            values: [25, 50, 100]
                        }
                    },
                    size: {
                        height: 180
                    }
                });

                $interval(function () {
                    var randUsage = Math.floor(Math.random() * 100);
                    server_1.load({
                        columns: [['data', randUsage]]
                    });
                }, 2000);

            }

        // chartist

            // simple lines
            $scope.chartist_sline_data = {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                series: [
                    [12, 9, 7, 8, 5],
                    [2, 1, 3.5, 7, 3],
                    [1, 3, 4, 5, 6]
                ]
            };
            $scope.chartist_sline_options = {
                fullWidth: true,
                chartPadding: {
                    right: 40
                }
            };

            // line chart with area
            $scope.chartist_line_area_data = {
                labels: [1, 2, 3, 4, 5, 6, 7, 8],
                series: [
                    [5, 9, 7, 8, 5, 3, 5, 4]
                ]
            };
            $scope.chartist_line_area_options = {
                low: 0,
                showArea: true
            };

            // bi-polar line chart with area only
            $scope.chartist_bipolar_data = {
                labels: [1, 2, 3, 4, 5, 6, 7, 8],
                series: [
                    [1, 2, 3, 1, -2, 0, 1, 0],
                    [-2, -1, -2, -1, -2.5, -1, -2, -1],
                    [0, 0, 0, 1, 2, 2.5, 2, 1],
                    [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
                ]
            };
            $scope.chartist_bipolar_options = {
                high: 3,
                low: -3,
                showArea: true,
                showLine: false,
                showPoint: false,
                fullWidth: true,
                axisX: {
                    showLabel: false,
                    showGrid: false
                }
            };

            // distributed series
            $scope.chartist_distributed_data = {
                labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
                series: [20, 60, 120, 200, 180, 20, 10]
            };
            $scope.chartist_distributed_options = {
                distributeSeries: true
            };

            // simple pie chart
            $scope.chartist_simple_pie_data = {
                series: [5, 3, 4]
            };
            var sum = function(a, b) { return a + b };
            $scope.chartist_simple_pie_options = {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / $scope.chartist_simple_pie_data.series.reduce(sum) * 100) + '%';
                }
            };

            // pie chart with custom labels
            $scope.chartist_pie_labels_data = {
                labels: ['Bananas', 'Apples', 'Grapes'],
                series: [20, 15, 40]
            };
            $scope.chartist_pie_labels_options = {
                labelInterpolationFnc: function(value) {
                    return value[0]
                }
            };
            $scope.chartist_pie_labels_options_responsive = [
                ['screen and (max-width: 767px)', {
                    chartPadding: 50,
                    labelOffset: 50,
                    labelDirection: 'explode',
                    labelInterpolationFnc: function(value) {
                        return value;
                    }
                }],
                ['screen and (min-width: 768px)', {
                    chartPadding: 30,
                    labelOffset: 60,
                    labelDirection: 'explode',
                    labelInterpolationFnc: function(value) {
                        return value;
                    }
                }],
                ['screen and (min-width: 1024px)', {
                    labelOffset: 80,
                    chartPadding: 20
                }]
            ];

        }
    ]);


