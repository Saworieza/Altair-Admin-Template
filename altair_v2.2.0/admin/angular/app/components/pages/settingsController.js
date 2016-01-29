angular
    .module('altairApp')
    .controller('settingsCtrl', [
        '$rootScope',
        '$scope',
        function ($rootScope,$scope) {

            $scope.site_settings = {
                "name": "Altair Admin",
                "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, alias aliquid assumenda dicta ducimus eos harum impedit modi obcaecati odit possimus quibusdam quidem rerum, tempora tenetur ullam ut voluptates?",
                "email": "altair_admin@example.com",
                "time_format": "H:i:s",
                "date_format": "n/j/Y",
                "online": true,
                "seo_url": false,
                "url_rewrite": false,
                "top_bar_enabled": true,
                "api_enabled": false,
                "minify_assets": true,
                "languages": ["gb", "fr"],
                "cache_type": "filesystem",
                "user_role": [
                    {
                        "name": "Admin",
                        "visual_editor": true,
                        "toolbar": false,
                        "sitemap_exclude": true
                    },
                    {
                        "name": "Editor",
                        "visual_editor": true,
                        "toolbar": true,
                        "sitemap_exclude": false
                    },
                    {
                        "name": "Author",
                        "visual_editor": false,
                        "toolbar": true,
                        "sitemap_exclude": false
                    }
                ]
            };

            // languages
            var langData = $scope.site_languages_options = [
                {id: 1, title: 'English', value: 'gb'},
                {id: 2, title: 'French', value: 'fr'},
                {id: 3, title: 'Chinese', value: 'cn'},
                {id: 4, title: 'Dutch', value: 'nl'},
                {id: 5, title: 'Italian', value: 'it'},
                {id: 6, title: 'Spanish', value: 'es'},
                {id: 7, title: 'German', value: 'de'},
                {id: 8, title: 'Polish', value: 'pl'}
            ];
            $scope.site_languages_config = {
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

            $scope.time_format_options = [
                {
                    "value":"H:i",
                    "label": "08:25"
                },
                {
                    "value":"H:i:s",
                    "label": "08:25:16"
                },
                {
                    "value":"g:i a",
                    "label": "08:25 am"
                },
                {
                    "value":"g:i A",
                    "label": "08:25 AM"
                }
            ];

            $scope.time_format_config = {
                create: false,
                maxItems: 1,
                valueField: 'value',
                labelField: 'label'
            };

            $scope.date_format_options = [
                {
                    "value":"j/n/Y",
                    "label": "29/11/2016"
                },
                {
                    "value":"j-n-Y",
                    "label": "29-11-2016"
                },
                {
                    "value":"j.n.Y",
                    "label": "29.11.2016"
                },
                {
                    "value":"n/j/Y",
                    "label": "11/29/2016"
                },
                {
                    "value":"d/m/Y",
                    "label": "29/11/2016"
                },
                {
                    "value":"d-m-Y",
                    "label": "29-11-2016"
                },
                {
                    "value":"d.m.Y",
                    "label": "29.11.2016"
                },
                {
                    "value":"m/d/Y",
                    "label": "11/29/2016"
                },
                {
                    "value":"m-d-Y",
                    "label": "11-29-2016"
                },
                {
                    "value":"m.d.Y",
                    "label": "11.29.2016"
                }
            ];

            $scope.date_format_config = {
                create: false,
                maxItems: 1,
                valueField: 'value',
                labelField: 'label'
            };

            $scope.site_caching = [
                {
                    "label": "File System",
                    "value": "filesystem"
                },
                {
                    "label": "MySQL",
                    "value": "mysql"
                }
            ];

            $scope.showSettings = function($event) {
                $event.preventDefault();
                var data = JSON.stringify($scope.site_settings, null, 2);
                UIkit.modal.alert('<p>Site settings:</p><pre>' + data + '</pre>');
            }
        }
    ]);