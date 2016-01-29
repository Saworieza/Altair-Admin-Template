$(function() {
    // init settings
    altair_page_settings.init();
});

altair_page_settings = {
    init: function() {
        var $settings_form = $('#page_settings');
        if($settings_form.length) {

            $('#settings_visitors_languages').selectize({
                plugins: {
                    'remove_button': {
                        label     : ''
                    }
                },
                options: [
                    {id: 1, title: 'English', value: 'gb'},
                    {id: 2, title: 'French', value: 'fr'},
                    {id: 3, title: 'Chinese', value: 'cn'},
                    {id: 4, title: 'Dutch', value: 'nl'},
                    {id: 5, title: 'Italian', value: 'it'},
                    {id: 6, title: 'Spanish', value: 'es'},
                    {id: 7, title: 'German', value: 'de'},
                    {id: 8, title: 'Polish', value: 'pl'}
                ],
                render: {
                    option: function(data, escape) {
                        return  '<div class="option">' +
                                '<i class="item-icon flag-' + escape(data.value).toUpperCase() + '"></i>' +
                                '<span>' + escape(data.title) + '</span>' +
                                '</div>';
                    },
                    item: function(data, escape) {
                        return '<div class="item"><i class="item-icon flag-' + escape(data.value).toUpperCase() + '"></i>' + escape(data.title) + '</div>';
                    }
                },
                maxItems: null,
                valueField: 'value',
                labelField: 'title',
                searchField: 'title',
                create: false,
                onDropdownOpen: function($dropdown) {
                    $dropdown
                        .hide()
                        .velocity('slideDown', {
                            begin: function() {
                                $dropdown.css({'margin-top':'0'})
                            },
                            duration: 200,
                            easing: easing_swiftOut
                        })
                },
                onDropdownClose: function($dropdown) {
                    $dropdown
                        .show()
                        .velocity('slideUp', {
                            complete: function() {
                                $dropdown.css({'margin-top':''})
                            },
                            duration: 200,
                            easing: easing_swiftOut
                        })
                }
            });


            // show serialized form
            $('#page_settings_submit').on('click',function(e) {
                e.preventDefault();
                var form_serialized = JSON.stringify( $settings_form.serializeObject(), null, 2 );
                UIkit.modal.alert('<p>Site settings:</p><pre>' + form_serialized + '</pre>');
            })

        }
    }
};