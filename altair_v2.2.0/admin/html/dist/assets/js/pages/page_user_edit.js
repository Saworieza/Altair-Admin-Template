$(function() {
    // user edit
    altair_user_edit.init();
});

altair_user_edit = {
    init: function() {
        // user edit form
        altair_user_edit.edit_form();
        // user languages
        altair_user_edit.user_languages();
        // user groups
        altair_user_edit.user_groups();
        // user todo_list
        altair_user_edit.user_todo();
    },
    edit_form: function() {
        // form variables
        var $user_edit_form = $('#user_edit_form'),
            $user_edit_submit_btn = $('#user_edit_submit'),
            user_name = $('#user_edit_uname'),
            user_name_control= $('#user_edit_uname_control'),
            user_position = $('#user_edit_position'),
            user_position_control = $('#user_edit_position_control');

        user_name_control
            // insert user name into form input
            .val(user_name.text())
            // change user name on keyup
            .on('keyup',function() {
                user_name.text(user_name_control.val())
            });
        // update inputs
        altair_md.update_input(user_name_control);


        user_position_control
            // insert user position into form input
            .val(user_position.text())
            // change user position on keyup
            .on('keyup',function() {
                user_position.text(user_position_control.val())
            });
        // update inputs
        altair_md.update_input(user_position_control);

        // submit form
        $user_edit_submit_btn.on('click',function(e) {
            e.preventDefault();
            var form_serialized = JSON.stringify( $user_edit_form.serializeObject(), null, 2 );
            UIkit.modal.alert('<p>User data:</p><pre>' + form_serialized + '</pre>');
        })
    },
    user_languages: function() {

        $('#user_edit_languages').selectize({
            plugins: {
                'remove_button': {
                    label     : ''
                }
            },
            placeholder: 'Select language(s)',
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
    },
    user_groups: function() {

        var $user_groups = $('#user_groups'),
            $all_groups = $('#all_groups'),
            $user_groups_control = $('#user_groups_control'),
            serialize_user_group = function() {
                var serialized_data = $user_groups.data("sortable").serialize();
                $user_groups_control.val( JSON.stringify(serialized_data) );
            };


        var sortable_user_groups = UIkit.sortable($user_groups, {
            group: '.groups_connected',
            handleClass: 'sortable-handler'
        });

        UIkit.sortable($all_groups, {
            group: '.groups_connected',
            handleClass: 'sortable-handler'
        });

        // serialize user group on change
        $user_groups.on('change.uk.sortable',function() {
            serialize_user_group();
        });

        // serialize group on init
        serialize_user_group();

    },
    user_todo: function() {
        var $user_todo = $('#user_todo');
        $user_todo.find('input:checkbox')
            .on('ifChecked', function(){
                $(this).closest('li').addClass('md-list-item-disabled');
            })
            .on('ifUnchecked', function(){
                $(this).closest('li').removeClass('md-list-item-disabled');
            });
    }
};