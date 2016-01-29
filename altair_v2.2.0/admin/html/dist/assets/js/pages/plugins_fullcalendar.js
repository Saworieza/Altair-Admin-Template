$(function() {
    // fullcalendar
    altair_fullcalendar.calendar_selectable();
});

altair_fullcalendar = {
    calendar_selectable: function() {
        var $calendar_selectable = $('#calendar_selectable'),
            calendarColorsWrapper = $('<div id="calendar_colors_wrapper"></div>');

        var calendarColorPicker = altair_helpers.color_picker(calendarColorsWrapper).prop('outerHTML');

        if($calendar_selectable.length) {
            $calendar_selectable.fullCalendar({
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
                select: function(start, end) {
                    UIkit.modal.prompt('' +
                        '<h3 class="heading_b uk-margin-medium-bottom">New Event</h3><div class="uk-margin-medium-bottom" id="calendar_colors">' +
                        'Event Color:' +
                        calendarColorPicker +
                        '</div>' +
                        'Event Title:',
                        '', function(newvalue){
                            if($.trim( newvalue ) !== '') {
                                var eventData,
                                    eventColor = $('#calendar_colors_wrapper').find('input').val();
                                eventData = {
                                    title: newvalue,
                                    start: start,
                                    end: end,
                                    color: eventColor ? eventColor : ''
                                };
                                $calendar_selectable.fullCalendar('renderEvent', eventData, true); // stick? = true
                                $calendar_selectable.fullCalendar('unselect');
                            }
                        }, {
                            labels: {
                                Ok: 'Add Event'
                            }
                        });
                },
                editable: true,
                eventLimit: true,
                timeFormat: '(HH)(:mm)',
                events: [
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
                        url: 'http://themeforest.net/user/tzd/portfolio',
                        start: moment().startOf('month').add(10, 'days').format('YYYY-MM-DD'),
                        color: '#0097a7'
                    }
                ]
            });
        }
    }
};