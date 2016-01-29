$(function() {
    // dashboard init functions
    altair_dashboard.init();
});

altair_dashboard = {
    init: function () {
        'use strict';

        // small charts
        altair_dashboard.peity_charts();
        // large graph
        altair_dashboard.metrics_charts();
        // large graph
        altair_dashboard.chartist_charts();
        // video player
        altair_dashboard.video_player();
        // calendar
        altair_dashboard.clndr_calendar();
        // google maps
        altair_dashboard.maplace_maps();

        // run animations after page is fully loaded
        $window.load(function(){
            altair_dashboard.circular_statistics();
            altair_dashboard.count_animated();
        });

    },
    // metrics-graphics
    metrics_charts: function () {
        var mGraph_sale_id = '#mGraph_sale';

        if ($(mGraph_sale_id).length) {

            var $thisEl_height = $(mGraph_sale_id).height();

            function buildGraph_sale() {

                var $thisEl_width = $(mGraph_sale_id).width();

                d3.json("data/mg_dashboard_chart.min.json", function (data) {
                    data = [data];
                    for (var i = 0; i < data.length; i++) {
                        data[i] = MG.convert.date(data[i], 'date');
                    }
                    var markers = [
                        {
                            'date': new Date('2016-02-26T00:00:00.000Z'),
                            'label': 'Winter Sale'
                        },
                        {
                            'date': new Date('2016-06-02T00:00:00.000Z'),
                            'label': 'Spring Sale'
                        }
                    ];
                    // add a chart that has a log scale
                    MG.data_graphic({
                        data: data,
                        y_scale_type: 'log',
                        width: $thisEl_width,
                        height: $thisEl_height,
                        right: 20,
                        target: mGraph_sale_id,
                        markers: markers,
                        x_accessor: 'date',
                        y_accessor: 'value'
                    });
                });

            }

            buildGraph_sale();

            $window.on('debouncedresize', function () {
                buildGraph_sale();
            })

        }
    },
    // chartist
    chartist_charts: function() {

        new Chartist.Bar('#ct-chart', {
            labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
            series: [
                [5, 4, 3, 7],
                [3, 2, 9, 5],
                [1, 5, 8, 4],
                [2, 3, 4, 6],
                [4, 1, 2, 1]
            ]
        }, {
            // Default mobile configuration
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
        }, [
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
        ]);
    },
    // ease pie chart
    circular_statistics: function() {
        $('.epc_chart').easyPieChart({
            scaleColor: false,
            trackColor: '#f5f5f5',
            lineWidth: 5,
            size: 110,
            easing: bez_easing_swiftOut
        });
    },
    // google maps
    maplace_maps: function () {
        if ($('#map_users').length) {

            var $map_user_list = $('#map_users_list').children('li');
            // add styles to map
            // https://snazzymaps.com/
            var map_styles = {
                    'Blue water': [{
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
                    }]
                },
                marker_url = isHighDensity() ? 'assets/img/md-images/ic_location_history_black_48dp.png' : 'assets/img/md-images/ic_location_history_black_24dp.png',
                marker_size = isHighDensity() ? new google.maps.Size(48, 48) : new google.maps.Size(24, 24),
                marker_scaled_size = new google.maps.Size(24, 24),
                marker_zoom = 14,
                locations_data = [];

            // get locations from data atributes
            $map_user_list.each(function () {
                var $this = $(this),
                    locations = {
                        lat: $this.attr('data-gmap-lat'),
                        lon: $this.attr('data-gmap-lon'),
                        title: $this.attr('data-gmap-user'),
                        html: '<div class="gmap-info-window">'
                        + '<h3 class="uk-text-nowrap">' + $this.attr('data-gmap-user') + '</h3>'
                        + '<p>' + $this.attr('data-gmap-user-company') + '</p>'
                        + '</div>',
                        zoom: marker_zoom,
                        icon: {
                            url: marker_url,
                            size: marker_size,
                            scaledSize: marker_scaled_size
                        }
                    };
                locations_data.push(locations);
            });

            // init map
            var mapUsers = new Maplace({
                map_div: '#map_users',
                locations: locations_data,
                controls_on_map: false,
                map_options: {
                    set_center: [37.390267, -122.076417],
                    zoom: 12,
                    streetViewControl: false
                },
                styles: map_styles
            }).Load();

            // jump to marker
            $map_user_list.on('click', function (e) {
                e.preventDefault();
                var $this = $(this),
                    $this_index = $this.index();

                $this
                    .addClass('md-list-item-active')
                    .siblings()
                    .removeClass('md-list-item-active');

                google.maps.event.trigger(mapUsers.markers[$this_index], 'click');
            });

            // resize map on window resize event
            $(window).on('debouncedresize', function () {
                var gmap_users = mapUsers.oMap;
                google.maps.event.trigger(gmap_users, 'resize');
                gmap_users.fitBounds(mapUsers.oBounds);
            })
        }
    },
    // small charts
    peity_charts: function () {
        $(".peity_orders").peity("donut", {
            height: 24,
            width: 24,
            fill: ["#8bc34a", "#eee"]
        });
        $(".peity_visitors").peity("bar", {
            height: 28,
            width: 48,
            fill: ["#d84315"],
            padding: 0.2
        });
        $(".peity_sale").peity("line", {
            height: 28,
            width: 64,
            fill: "#d1e4f6",
            stroke: "#0288d1"
        });
        $(".peity_conversions_large").peity("bar", {
            height: 64,
            width: 96,
            fill: ["#d84315"],
            padding: 0.2
        });
        var $peity_live = $('.peity_live');
        if ($peity_live.length) {
            // live update
            var peityLive = $peity_live.peity("line", {
                height: 28,
                width: 64,
                fill: "#efebe9",
                stroke: "#5d4037"
            });
            // fix for "startVal or endVal is not a number" error
            $('#peity_live_text').text('0');

            function getRandomVal(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            setInterval(function () {
                var random = Math.round(Math.random() * 10);
                var values = peityLive.text().split(",");
                values.shift();
                values.push(random);

                peityLive
                    .text(values.join(","))
                    .change();

                var countFrom = parseInt($('#peity_live_text').text()),
                    countTo = getRandomVal(20, 100);

                if(countFrom == countTo) {
                    var countTo = getRandomVal(20, 120);
                }

                var numAnim = new CountUp('peity_live_text', countFrom, countTo, 0, 1.2);
                numAnim.start();

            }, 2000)
        }
    },
    // animated numerical values
    count_animated: function () {
        $('.countUpMe').each(function () {
            var target = this,
                countTo = $(target).text();
            theAnimation = new CountUp(target, 0, countTo, 0, 2);
            theAnimation.start();
        });
    },
    // calendar
    clndr_calendar: function () {

        var $clndr_events = $('#clndr_events');

        if ($clndr_events.length) {

            var calendar_template = $('#clndr_events_template'),
                template = calendar_template.html(),
                template_compiled = Handlebars.compile(template);

            var daysOfTheWeek = [];

            for (var i = 0; i < 7; i++) {
                daysOfTheWeek.push(moment().weekday(i).format('dd'));
            }
            theCalendar = $clndr_events.clndr({
                weekOffset: 1, // Monday
                daysOfTheWeek: daysOfTheWeek,
                events: clndrEvents,
                render: function(data) {
                    return template_compiled(data);
                },
                clickEvents: {
                    click: function (target) {
                        if(target.events.length) {

                            var $clndr_events_panel = $('.clndr_events'),
                                thisDate = target.date._i;

                            $(target.element)
                                .siblings('.day').removeClass('day-active')
                                .end()
                                .addClass('day-active');

                            if($clndr_events_panel.children('[data-clndr-event=' + thisDate + ']').length) {

                                $clndr_events_panel
                                    .children('.clndr_event')
                                    .hide();

                                if (!$clndr_events.hasClass('events_visible')) {
                                    // adjust events panel
                                    dayWidthCheck();
                                    $clndr_events.addClass('events_visible');
                                    $clndr_events_panel
                                        .children('[data-clndr-event=' + thisDate + ']').velocity("transition.slideUpIn", {
                                            stagger: 100,
                                            drag: true,
                                            delay: 280
                                        });
                                } else {
                                    $clndr_events_panel
                                        .children('[data-clndr-event=' + thisDate + ']').velocity("transition.slideUpIn", {
                                            stagger: 100,
                                            drag: true
                                        });
                                }
                            } else if( $(target.element).hasClass('last-month') ) {
                                setTimeout(function() {
                                    $clndr_events.find('.calendar-day-' + target.date._i).click()
                                },380);
                                $clndr_events.find('.clndr_previous').click();
                            } else if( $(target.element).hasClass('next-month') ) {
                                setTimeout(function() {
                                    $clndr_events.find('.calendar-day-' + target.date._i).click()
                                },380);
                                $clndr_events.find('.clndr_next').click();
                            }
                        }
                    }
                }
            });

            var animate_change = function() {
                $clndr_events
                    .addClass('animated_change')
                    .removeClass('events_visible');
                setTimeout(function() {
                    $clndr_events
                        .removeClass('animated_change')
                    ;
                },380);
            };

            // next month
            $clndr_events.on('click', '.clndr_next', function(e) {
                e.preventDefault();

                animate_change();
                setTimeout(function() {
                    theCalendar.forward();
                },280);
            });

            // previous month
            $clndr_events.on('click', '.clndr_previous', function(e) {
                e.preventDefault();

                animate_change();
                setTimeout(function() {
                    theCalendar.back();
                },280);
            });

            // today
            $clndr_events.on('click', '.clndr_today', function(e) {
                e.preventDefault();

                animate_change();
                setTimeout(function() {
                    theCalendar
                        .setYear(moment().format('YYYY'))
                        .setMonth(moment().format('M') - 1);
                },280);

            });

            // close events
            $clndr_events.on('click', '.clndr_events_close_button', function () {
                $clndr_events.removeClass('events_visible events_over')
            });

            // add event modal
            event_modal = UIkit.modal("#modal_clndr_new_event");
            $clndr_events.on('click', '.clndr_add_event', function () {
                if ( event_modal.isActive() ) {
                    event_modal.hide();
                } else {
                    event_modal.show();
                    // hide events panel
                    $clndr_events.removeClass('events_visible');
                    setTimeout(function() {
                        $window.resize();
                    },280)
                }
            });

            // add events submit
            $('#clndr_new_event_submit').on('click', function() {

                var e_title = '#clndr_event_title_control',
                    e_link = '#clndr_event_link_control',
                    e_date = '#clndr_event_date_control',
                    e_start = '#clndr_event_start_control',
                    e_end = '#clndr_event_end_control';

                if($(e_title).val() == '') {
                    $(e_title).addClass('md-input-danger').focus();
                    altair_md.update_input($(e_title));
                    return false;
                }

                if($(e_date).val() == '') {
                    $(e_date).addClass('md-input-danger').focus();
                    altair_md.update_input($(e_date));
                    return false;
                }

                var new_event = [
                    { date: $(e_date).val(), title: $(e_title).val(), url: $(e_link).val() ? $(e_link).val() : 'javascript:void(0)', timeStart: $(e_start).val(), timeEnd: $(e_end).val() }
                ];

                theCalendar.addEvents(new_event);
                theCalendar.setMonth(moment($(e_date).val()).format('M') - 1);
                // hide modal
                event_modal.hide();

                $(e_title+','+e_link+','+e_date+','+e_start+','+e_end).removeClass('md-input-danger').val('');
                altair_md.update_input($(e_title+','+e_link+','+e_date+','+e_start+','+e_end));

            });


            var dayWidth = $clndr_events.find('.day > span').outerWidth(),
                calMinWidth = dayWidth * 7 + 240 + 32 + 14; // day + events container + padding-left/padding-right + day padding (7*2px)

            function dayWidthCheck() {
                ($clndr_events.width() < (calMinWidth)) ? $clndr_events.addClass('events_over') : $clndr_events.removeClass('events_over');
            }

            dayWidthCheck();

            // resize map on window resize event
            $(window).on('debouncedresize', function () {
                dayWidthCheck();
            })
        }
    },
    // video player
    video_player: function () {
        var $video_player = $('#video_player'),
            $video_playlist = $('#video_player_playlist'),
            active_class = 'md-list-item-active';
        if ($video_player.length) {
            var fit_vid = function() {
                $video_player.fitVids();
            };

            $video_playlist.on('click', 'li' ,function(e) {
                e.stopPropagation();
                var $this = $(this);
                if(!$this.hasClass(active_class)) {
                    var this_src = $this.attr('data-video-src'),
                        iframe_embed = '<iframe height="150" src="https://www.youtube.com/embed/' + this_src + '?rel=0" frameborder="0" allowfullscreen></iframe>';

                    $video_playlist.children('li').removeClass(active_class);
                    $this.addClass(active_class);

                    $video_player.velocity({
                            translateZ: 0,
                            scale: 0,
                            opacity: 0
                        },
                        {
                            duration: 280,
                            easing: easing_swiftOut,
                            complete: function() {
                                $video_player.html(iframe_embed);
                                fit_vid();
                                setTimeout(function() {
                                    $video_player.velocity('reverse');
                                },280)
                            }
                        }
                    );

                }
            });

            // activate first video
            $video_playlist.children('li:first').trigger('click');

        }
    }
};