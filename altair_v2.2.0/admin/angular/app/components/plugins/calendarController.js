angular
    .module('altairApp')
    .controller('calendarCtrl', [
        '$scope',
        'uiCalendarConfig',
        function ($scope,uiCalendarConfig) {

            $scope.randID_generator = function() {
                var randLetter = String.fromCharCode(65 + Math.floor(Math.random() * 26));
                return randLetter + Date.now();
            };

            $scope.color_picker = function(object,pallete) {
                if(object) {
                    var cp_id = $scope.randID_generator(),
                        cp_pallete = pallete ? pallete : ['#e53935','#d81b60','#8e24aa','#5e35b1','#3949ab','#1e88e5','#039be5','#0097a7','#00897b','#43a047','#689f38','#ef6c00','#f4511e','#6d4c41','#757575','#546e7a'],
                        cp_pallete_length = cp_pallete.length,
                        cp_wrapper = $('<div class="cp_altair" id="'+cp_id+'"/>');

                    for(var $i=0;$i<cp_pallete_length;$i++) {
                        cp_wrapper.append('<span data-color=' + cp_pallete[$i] + ' style="background:' + cp_pallete[$i] + '"></span>');
                    }

                    cp_wrapper.append('<input type="hidden">');

                    $('body').on('click', '#'+cp_id+' span',function() {
                        $(this)
                            .addClass('active_color')
                            .siblings().removeClass('active_color')
                            .end()
                            .closest('.cp_altair').find('input').val($(this).attr('data-color'));
                    });
                    return object.append(cp_wrapper);

                }
            };

            $scope.calendarColorPicker = $scope.color_picker($('<div id="calendar_colors_wrapper"></div>')).prop('outerHTML');

            $scope.uiConfig = {
                calendar: {
                    header: {
                        left: 'title today',
                        center: '',
                        right: 'month,agendaWeek,agendaDay prev,next'
                    },
                    buttonIcons: {
                        prev: 'md-left-single-arrow',
                        next: 'md-right-single-arrow',
                        prevYear: 'md-left-double-arrow',
                        nextYear: 'md-right-double-arrow'
                    },
                    buttonText: {
                        today: ' ',
                        month: ' ',
                        week: ' ',
                        day: ' '
                    },
                    aspectRatio: 2.1,
                    defaultDate: moment(),
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end) {
                        UIkit.modal.prompt('' +
                            '<h3 class="heading_b uk-margin-medium-bottom">New Event</h3><div class="uk-margin-medium-bottom" id="calendar_colors">' +
                            'Event Color:' +
                            $scope.calendarColorPicker +
                            '</div>' +
                            'Event Title:',
                            '', function (newvalue) {
                                if ($.trim(newvalue) !== '') {
                                    var eventData,
                                        eventColor = $('#calendar_colors_wrapper').find('input').val();
                                    eventData = {
                                        title: newvalue,
                                        start: start,
                                        end: end,
                                        color: eventColor ? eventColor : ''
                                    };
                                    uiCalendarConfig.calendars.myCalendar.fullCalendar('renderEvent', eventData, true); // stick? = true
                                    uiCalendarConfig.calendars.myCalendar.fullCalendar('unselect');
                                }
                            }, {
                                labels: {
                                    Ok: 'Add Event'
                                }
                            });
                    },
                    editable: true,
                    eventLimit: true,
                    timeFormat: '(HH)(:mm)'
                }
            };

            $scope.calendar_events = [
                {
                    title: 'All Day Event',
                    start: moment().startOf('month').add(25, 'days').format('YYYY-MM-DD')
                },
                {
                    title: 'Long Event',
                    start: moment().startOf('month').add(3, 'days').format('YYYY-MM-DD'),
                    end: moment().startOf('month').add(7, 'days').format('YYYY-MM-DD')
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: moment().startOf('month').add(8, 'days').format('YYYY-MM-DD'),
                    color: '#689f38'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: moment().startOf('month').add(15, 'days').format('YYYY-MM-DD'),
                    color: '#689f38'
                },
                {
                    title: 'Conference',
                    start: moment().startOf('day').add(14, 'hours').format('YYYY-MM-DD HH:mm'),
                    end: moment().startOf('day').add(15, 'hours').format('YYYY-MM-DD HH:mm')
                },
                {
                    title: 'Meeting',
                    start: moment().startOf('month').add(14, 'days').add(10, 'hours').format('YYYY-MM-DD HH:mm'),
                    color: '#7b1fa2'
                },
                {
                    title: 'Lunch',
                    start: moment().startOf('day').add(11, 'hours').format('YYYY-MM-DD HH:mm'),
                    color: '#d84315'
                },
                {
                    title: 'Meeting',
                    start: moment().startOf('day').add(8, 'hours').format('YYYY-MM-DD HH:mm'),
                    color: '#7b1fa2'
                },
                {
                    title: 'Happy Hour',
                    start: moment().startOf('month').add(1, 'days').format('YYYY-MM-DD')
                },
                {
                    title: 'Dinner',
                    start: moment().startOf('day').add(19, 'hours').format('YYYY-MM-DD HH:mm')
                },
                {
                    title: 'Birthday Party',
                    start: moment().startOf('month').add(23, 'days').format('YYYY-MM-DD')
                },
                {
                    title: 'NEW RELEASE (link)',
                    url: 'http://google.com',
                    start: moment().startOf('month').add(10, 'days').format('YYYY-MM-DD'),
                    color: '#0097a7'
                }
            ];

            $scope.eventSources = [$scope.calendar_events];

        }
    ]);


