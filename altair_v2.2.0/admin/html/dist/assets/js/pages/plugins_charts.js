$(function() {
    // metrics-graphics
    altair_charts.metrics_graphics();
    // c3.js
    altair_charts.c3js();
    // chartist
    altair_charts.chartist_charts();
});

altair_charts = {
    metrics_graphics: function() {

        // linked charts
        var mg_linked_charts_id1 = '#mg_chart_linked_a',
            mg_linked_charts_id2 = '#mg_chart_linked_b',
            mg_linked_charts_id1_height = $(mg_linked_charts_id1).height(),
            mg_linked_charts_id2_height = $(mg_linked_charts_id2).height();

        if ($(mg_linked_charts_id1).length && $(mg_linked_charts_id2).length) {

            function mg_linked_charts() {

                var mg_linked_charts_id1_width = $(mg_linked_charts_id1).width(),
                    mg_linked_charts_id2_width = $(mg_linked_charts_id2).width();

                d3.json('data/mg_brief-1.min.json', function (data) {
                    data = MG.convert.date(data, 'date');
                    MG.data_graphic({
                        data: data,
                        linked: true,
                        width: mg_linked_charts_id1_width,
                        height: mg_linked_charts_id1_height,
                        xax_count: 4,
                        target: mg_linked_charts_id1
                    });
                });
                d3.json('data/mg_brief-2.min.json', function (data) {
                    data = MG.convert.date(data, 'date');
                    MG.data_graphic({
                        data: data,
                        area: false,
                        linked: true,
                        width: mg_linked_charts_id2_width,
                        height: mg_linked_charts_id2_height,
                        xax_count: 4,
                        target: mg_linked_charts_id2
                    });
                });
            }

            mg_linked_charts();

            $window.on('debouncedresize', function () {
                mg_linked_charts();
            })

        }

        // confidence band
        var mg_confidence_band_chart_id = '#mg_chart_confidence_band',
            mg_confidence_band_chart_height = $(mg_confidence_band_chart_id).height();

        if ( $(mg_confidence_band_chart_id).length ) {

            function mg_confidence_band_chart() {

                // chart width
                var mg_confidence_band_chart_width = $(mg_confidence_band_chart_id).width();

                d3.json('data/mg_confidence_band.min.json', function(data) {
                    data = MG.convert.date(data, 'date');
                    MG.data_graphic({
                        title: "Confidence Band",
                        description: "This is an example of a graphic with a confidence band and extended x-axis ticks enabled.",
                        data: data,
                        format: 'percentage',
                        width: mg_confidence_band_chart_width,
                        height: mg_confidence_band_chart_height,
                        target: mg_confidence_band_chart_id,
                        show_secondary_x_label: false,
                        show_confidence_band: ['l', 'u'],
                        x_extended_ticks: true
                    });
                });
            }

            mg_confidence_band_chart();

            $window.on('debouncedresize', function () {
                mg_confidence_band_chart();
            })

        }

        // some currency
        var mg_currency_chart_id = '#mg_chart_currency',
            mg_currency_charts_height = $(mg_confidence_band_chart_id).height();

        if ( $(mg_currency_chart_id).length ) {

            function mg_currency_chart() {

                // chart width
                var mg_currency_charts_width = $(mg_confidence_band_chart_id).width();

                d3.json('data/mg_some_currency.min.json', function(data) {
                    data = MG.convert.date(data, 'date');
                    MG.data_graphic({
                        title: "Some Currency",
                        description: "Here is an example that uses custom units for currency.",
                        data: data,
                        width: mg_currency_charts_width,
                        height: mg_currency_charts_height,
                        target: mg_currency_chart_id,
                        yax_units: '$'
                    });
                });

            }

            mg_currency_chart();

            $window.on('debouncedresize', function () {
                mg_currency_chart();
            })

        }

    },
    c3js: function() {

        var c3chart_bar_stacked_id = '#c3_chart_bar_stacked';

        if ( $(c3chart_bar_stacked_id).length ) {

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

            $window.on('debouncedresize', function () {
                c3chart_bar_stacked.resize();
            })

        }

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

            $window.on('debouncedresize', function () {
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

            $window.on('debouncedresize', function () {
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

            $window.on('debouncedresize', function () {
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

            $window.on('debouncedresize', function () {
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

            setInterval(function () {
                var randUsage = Math.floor(Math.random() * 100);
                server_1.load({
                    columns: [['data', randUsage]]
                });
            }, 2000);

        }

    },
    chartist_charts: function() {
        // simple lines
        new Chartist.Line('#chartist_simple_lines', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: true,
            chartPadding: {
                right: 40
            }
        });

        // line chart with area
        new Chartist.Line('#chartist_line_area', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8],
            series: [
                [5, 9, 7, 8, 5, 3, 5, 4]
            ]
        }, {
            low: 0,
            showArea: true
        });

        // bi-polar line chart with area only
        new Chartist.Line('#chartist_bipolar', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8],
            series: [
                [1, 2, 3, 1, -2, 0, 1, 0],
                [-2, -1, -2, -1, -2.5, -1, -2, -1],
                [0, 0, 0, 1, 2, 2.5, 2, 1],
                [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
            ]
        }, {
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
        });

        // distributed series
        new Chartist.Bar('#chartist_distributed_series', {
            labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
            series: [20, 60, 120, 200, 180, 20, 10]
        }, {
            distributeSeries: true
        });

        // simple pie chart
        var data = {
            series: [5, 3, 4]
        };

        var sum = function(a, b) { return a + b };

        new Chartist.Pie('#chartist_simple_pie', data, {
            labelInterpolationFnc: function(value) {
                return Math.round(value / data.series.reduce(sum) * 100) + '%';
            }
        });

        // pie chart with custom labels
        var data = {
            labels: ['Bananas', 'Apples', 'Grapes'],
            series: [20, 15, 40]
        };

        var options = {
            labelInterpolationFnc: function(value) {
                return value[0]
            }
        };

        var responsiveOptions = [
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

        new Chartist.Pie('#chartist_pie_custom_labels', data, options, responsiveOptions);

        // animating a donut with svg.animate
        var chart = new Chartist.Pie('#chartist_donut_animate', {
            series: [10, 20, 50, 20, 5, 50, 15],
            labels: [1, 2, 3, 4, 5, 6, 7]
        }, {
            donut: true,
            showLabel: false
        });

        chart.on('draw', function(data) {
            if(data.type === 'slice') {
                // Get the total path length in order to use for dash array animation
                var pathLength = data.element._node.getTotalLength();

                // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                // Create animation definition while also assigning an ID to the animation for later sync usage
                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 1000,
                        from: -pathLength + 'px',
                        to:  '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
                        fill: 'freeze'
                    }
                };

                // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
                if(data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                // We can't use guided mode as the animations need to rely on setting begin manually
                // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
                data.element.animate(animationDefinition, false);
            }
        });

        // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
        chart.on('created', function() {
            if(window.__anim21278907124) {
                clearTimeout(window.__anim21278907124);
                window.__anim21278907124 = null;
            }
            window.__anim21278907124 = setTimeout(chart.update.bind(chart), 10000);
        });


    }
};