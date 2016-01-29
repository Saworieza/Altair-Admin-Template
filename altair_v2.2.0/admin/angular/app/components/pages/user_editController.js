angular
    .module('altairApp')
    .controller('user_editCtrl', [
        '$rootScope',
        '$scope',
        'user_data',
        'groups_data',
        function ($rootScope,$scope,user_data,groups_data) {

            $scope.user_data = user_data[0];
            $scope.user_data_contacts = user_data[0].contact;

            // languages
            var langData = $scope.user_languages_options = [
                {id: 1, title: 'English', value: 'gb'},
                {id: 2, title: 'French', value: 'fr'},
                {id: 3, title: 'Chinese', value: 'cn'},
                {id: 4, title: 'Dutch', value: 'nl'},
                {id: 5, title: 'Italian', value: 'it'},
                {id: 6, title: 'Spanish', value: 'es'},
                {id: 7, title: 'German', value: 'de'},
                {id: 8, title: 'Polish', value: 'pl'}
            ];
            $scope.user_languages_config = {
                plugins: {
                    'remove_button': {
                        label     : ''
                    }
                },
                render: {
                    option: function(langData, escape) {
                        return  '<div class="option">' +
                            '<i class="item-icon flag-' + escape(langData.value).toUpperCase() + '"></i>' +
                            '<span>' + escape(langData.title) + '</span>' +
                            '</div>';
                    },
                    item: function(langData, escape) {
                        return '<div class="item"><i class="item-icon flag-' + escape(langData.value).toUpperCase() + '"></i>' + escape(langData.title) + '</div>';
                    }
                },
                valueField: 'value',
                labelField: 'title',
                searchField: 'title',
                create: false,
                placeholder: 'Select Language...'
            };

            // user role
            $scope.user_role_config = {
                valueField: 'value',
                labelField: 'title',
                create: false,
                maxItems: 1,
                placeholder: 'Select...'
            };

            $scope.user_role_options = [
                {
                    "value": "admin",
                    "title": "Admin"
                },
                {
                    "value": "super_admin",
                    "title": "Super Admin"
                },
                {
                    "value": "editor",
                    "title": "Editor"
                },
                {
                    "value": "author",
                    "title": "Author"
                },
                {
                    "value": "none",
                    "title": "None"
                }
            ];

            // groups
            $scope.all_groups = groups_data;

            var $user_groups = $('#user_groups'),
                $all_groups = $('#all_groups'),
                $user_groups_control = $('#user_groups_control'),
                serialize_user_group = function() {
                    var serialized_data = $user_groups.data("sortable").serialize();
                    $user_groups_control.val( JSON.stringify(serialized_data) );
                };

            UIkit.sortable($user_groups, {
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

            // submit button
            $('#user_edit_submit').on('click',function(e) {
                e.preventDefault();
                var data = JSON.stringify($scope.user_data, null, 2),
                    user_name = user_data[0].name;

                UIkit.modal.alert('<p>Data for ' + user_name + ':</p><pre>' + data + '</pre>');
            })

        }
    ])
;