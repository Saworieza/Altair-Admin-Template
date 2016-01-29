altairApp
    .config([
        '$stateProvider',
        '$urlRouterProvider',
        function ($stateProvider, $urlRouterProvider) {

            // Use $urlRouterProvider to configure any redirects (when) and invalid urls (otherwise).
            $urlRouterProvider
                .when('/dashboard', '/')
                .otherwise('/');

            $stateProvider
            // -- ERROR PAGES --
                .state("error", {
                    url: "/error",
                    templateUrl: 'app/views/error.html'
                })
                .state("error.404", {
                    url: "/404",
                    templateUrl: 'app/components/pages/error_404View.html'
                })
                .state("error.500", {
                    url: "/500",
                    templateUrl: 'app/components/pages/error_500View.html'
                })
            // -- LOGIN PAGE --
                .state("login", {
                    url: "/login",
                    templateUrl: 'app/components/pages/loginView.html',
                    controller: 'loginCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_iCheck',
                                'app/components/pages/loginController.js'
                            ]);
                        }]
                    }
                })
            // -- RESTRICTED --
                .state("restricted", {
                    abstract: true,
                    url: "",
                    views: {
                        'main_header': {
                            templateUrl: 'app/shared/header/headerView.html',
                            controller: 'main_headerCtrl'
                        },
                        'main_sidebar': {
                            templateUrl: 'app/shared/main_sidebar/main_sidebarView.html',
                            controller: 'main_sidebarCtrl'
                        },
                        '': {
                            templateUrl: 'app/views/restricted.html'
                        }
                    },
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_selectizeJS',
                                'lazy_switchery',
                                'lazy_prismJS',
                                'lazy_autosize',
                                'lazy_iCheck',
                                'lazy_style_switcher'
                            ],{ serie: true });
                        }]
                    }
                })
            // -- DASHBOARD --
                .state("restricted.dashboard", {
                    url: "/",
                    templateUrl: 'app/components/dashboard/dashboardView.html',
                    controller: 'dashboardCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                // ocLazyLoad config (app/app.js)
                                'lazy_countUp',
                                'lazy_charts_peity',
                                'lazy_charts_easypiechart',
                                'lazy_charts_metricsgraphics',
                                'lazy_charts_chartist',
                                'lazy_weathericons',
                                'lazy_google_maps',
                                'lazy_clndr',
                                'app/components/dashboard/dashboardController.js'
                            ], {serie: true} );
                        }],
                        sale_chart_data: function($http){
                            return $http({method: 'GET', url: 'data/mg_dashboard_chart.min.json'})
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        user_data: function($http){
                            return $http({ method: 'GET', url: 'data/user_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Dashboard'
                    }

                })
                // -- FORMS --
                .state("restricted.forms", {
                    url: "/forms",
                    template: '<div ui-view autoscroll="false"/>',
                    abstract: true
                })
                .state("restricted.forms.regular", {
                    url: "/regular",
                    templateUrl: 'app/components/forms/regularView.html',
                    controller: 'regularCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/forms/regularController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Regular Elements'
                    }
                })
                .state("restricted.forms.advanced", {
                    url: "/advanced",
                    templateUrl: 'app/components/forms/advancedView.html',
                    controller: 'advancedCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_ionRangeSlider',
                                'lazy_masked_inputs',
                                'lazy_character_counter',
                                'app/components/forms/advancedController.js'
                            ], {serie:true} );
                        }]
                    },
                    data: {
                        pageTitle: 'Advanced Elements'
                    }
                })
                .state("restricted.forms.file_upload", {
                    url: "/file_upload",
                    templateUrl: 'app/components/forms/file_uploadView.html',
                    controller: 'file_uploadCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/forms/file_uploadController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'File Upload'
                    }
                })
                .state("restricted.forms.validation", {
                    url: "/validation",
                    templateUrl: 'app/components/forms/validationView.html',
                    controller: 'validationCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_parsleyjs',
                                'app/components/forms/validationController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Validation'
                    }
                })
                .state("restricted.forms.wizard", {
                    url: "/wizard",
                    templateUrl: 'app/components/forms/wizardView.html',
                    controller: 'wizardCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_wizard',
                                'app/components/forms/wizardController.js'
                            ], {serie:true});
                        }]
                    },
                    data: {
                        pageTitle: 'Wizard'
                    }
                })
                .state("restricted.forms.wysiwyg_ckeditor", {
                    url: "/wysiwyg_ckeditor",
                    templateUrl: 'app/components/forms/wysiwyg_ckeditorView.html',
                    controller: 'ckeditorCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_ckeditor',
                                'app/components/forms/wysiwyg_ckeditorController.js'
                            ], {serie:true});
                        }]
                    },
                    data: {
                        pageTitle: 'ckEditor'
                    }
                })
                .state("restricted.forms.wysiwyg_tinymce", {
                    url: "/wysiwyg_tinymce",
                    templateUrl: 'app/components/forms/wysiwyg_tinymceView.html',
                    controller: 'tinymceCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_tinymce',
                                'app/components/forms/wysiwyg_tinymceController.js'
                            ], {serie:true});
                        }]
                    },
                    data: {
                        pageTitle: 'tinyMCE'
                    }
                })

            // -- LAYOUT --
                .state("restricted.layout", {
                    url: "/layout",
                    template: '<div ui-view autoscroll="false"/>',
                    abstract: true
                })
                .state("restricted.layout.top_menu", {
                    url: "/top_menu",
                    templateUrl: 'app/components/layout/top_menuView.html',
                    controller: 'top_menuCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/layout/top_menuController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Top Menu'
                    }
                })
                .state("restricted.layout.full_header", {
                    url: "/full_header",
                    templateUrl: 'app/components/layout/full_headerView.html',
                    controller: 'full_headerCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/layout/full_headerController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Full Header'
                    }
                })

            // -- KENDO UI --
                .state("restricted.kendoui", {
                    url: "/kendoui",
                    template: '<div ui-view autoscroll="false"/>',
                    abstract: true,
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('lazy_KendoUI');
                        }]
                    }
                })
                .state("restricted.kendoui.autocomplete", {
                    url: "/autocomplete",
                    templateUrl: 'app/components/kendoUI/autocompleteView.html',
                    controller: 'autocompleteCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/autocompleteController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Autocomplete (kendoUI)'
                    }
                })
                .state("restricted.kendoui.calendar", {
                    url: "/calendar",
                    templateUrl: 'app/components/kendoUI/calendarView.html',
                    controller: 'calendarCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/calendarController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Calendar (kendoUI)'
                    }
                })
                .state("restricted.kendoui.colorpicker", {
                    url: "/colorPicker",
                    templateUrl: 'app/components/kendoUI/colorPickerView.html',
                    data: {
                        pageTitle: 'ColorPicker (kendoUI)'
                    }
                })
                .state("restricted.kendoui.combobox", {
                    url: "/combobox",
                    templateUrl: 'app/components/kendoUI/comboboxView.html',
                    controller: 'comboboxCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/comboboxController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Combobox (kendoUI)'
                    }
                })
                .state("restricted.kendoui.datepicker", {
                    url: "/datepicker",
                    templateUrl: 'app/components/kendoUI/datepickerView.html',
                    controller: 'datepickerCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/datepickerController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Datepicker (kendoUI)'
                    }
                })
                .state("restricted.kendoui.datetimepicker", {
                    url: "/datetimepicker",
                    templateUrl: 'app/components/kendoUI/datetimepickerView.html',
                    controller: 'datetimepickerCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/datetimepickerController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Datetimepicker (kendoUI)'
                    }
                })
                .state("restricted.kendoui.dropdown_list", {
                    url: "/dropdown_list",
                    templateUrl: 'app/components/kendoUI/dropdown_listView.html',
                    controller: 'dropdownListCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/dropdown_listController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Dropdown List (kendoUI)'
                    }
                })
                .state("restricted.kendoui.masked_input", {
                    url: "/masked_input",
                    templateUrl: 'app/components/kendoUI/masked_inputView.html',
                    controller: 'maskedInputCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/masked_inputController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Masked Input (kendoUI)'
                    }
                })
                .state("restricted.kendoui.menu", {
                    url: "/menu",
                    templateUrl: 'app/components/kendoUI/menuView.html',
                    controller: 'menuCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/menuController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Menu (kendoUI)'
                    }
                })
                .state("restricted.kendoui.multiselect", {
                    url: "/multiselect",
                    templateUrl: 'app/components/kendoUI/multiselectView.html',
                    controller: 'multiselectCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/multiselectController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Multiselect (kendoUI)'
                    }
                })
                .state("restricted.kendoui.numeric_textbox", {
                    url: "/numeric_textbox",
                    templateUrl: 'app/components/kendoUI/numeric_textboxView.html',
                    controller: 'numericTextboxCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/numeric_textboxController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Numeric textbox (kendoUI)'
                    }
                })
                .state("restricted.kendoui.panelbar", {
                    url: "/panelbar",
                    templateUrl: 'app/components/kendoUI/panelbarView.html',
                    data: {
                        pageTitle: 'PanelBar (kendoUI)'
                    }
                })
                .state("restricted.kendoui.timepicker", {
                    url: "/timepicker",
                    templateUrl: 'app/components/kendoUI/timepickerView.html',
                    data: {
                        pageTitle: 'Timepicker (kendoUI)'
                    }
                })
                .state("restricted.kendoui.toolbar", {
                    url: "/toolbar",
                    templateUrl: 'app/components/kendoUI/toolbarView.html',
                    controller: 'toolbarCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/toolbarController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Toolbar (kendoUI)'
                    }
                })
                .state("restricted.kendoui.window", {
                    url: "/window",
                    templateUrl: 'app/components/kendoUI/windowView.html',
                    controller: 'windowCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/kendoUI/windowController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Window (kendoUI)'
                    }
                })
            // -- COMPONENTS --
                .state("restricted.components", {
                    url: "/components",
                    template: '<div ui-view autoscroll="false"/>',
                    abstract: true
                })
                .state("restricted.components.accordion", {
                    url: "/accordion",
                    templateUrl: 'app/components/components/accordionView.html',
                    data: {
                        pageTitle: 'Accordion (components)'
                    }
                })
                .state("restricted.components.buttons", {
                    url: "/buttons",
                    templateUrl: 'app/components/components/buttonsView.html',
                    data: {
                        pageTitle: 'Buttons (components)'
                    }
                })
                .state("restricted.components.buttons_fab", {
                    url: "/buttons_fab",
                    templateUrl: 'app/components/components/fabView.html',
                    data: {
                        pageTitle: 'Buttons FAB (components)'
                    }
                })
                .state("restricted.components.cards", {
                    url: "/cards",
                    templateUrl: 'app/components/components/cardsView.html',
                    controller: 'cardsCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/components/cardsController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Cards (components)'
                    }
                })
                .state("restricted.components.colors", {
                    url: "/colors",
                    templateUrl: 'app/components/components/colorsView.html',
                    data: {
                        pageTitle: 'Colors (components)'
                    }
                })
                .state("restricted.components.common", {
                    url: "/common",
                    templateUrl: 'app/components/components/commonView.html',
                    data: {
                        pageTitle: 'Common (components)'
                    }
                })
                .state("restricted.components.dropdowns", {
                    url: "/dropdowns",
                    templateUrl: 'app/components/components/dropdownsView.html',
                    data: {
                        pageTitle: 'Dropdowns (components)'
                    }
                })
                .state("restricted.components.dynamic_grid", {
                    url: "/dynamic_grid",
                    templateUrl: 'app/components/components/dynamic_gridView.html',
                    data: {
                        pageTitle: 'Dynamic Grid (components)'
                    }
                })
                .state("restricted.components.grid", {
                    url: "/grid",
                    templateUrl: 'app/components/components/gridView.html',
                    data: {
                        pageTitle: 'Grid (components)'
                    }
                })
                .state("restricted.components.icons", {
                    url: "/icons",
                    templateUrl: 'app/components/components/iconsView.html',
                    data: {
                        pageTitle: 'Icons (components)'
                    }
                })
                .state("restricted.components.lists", {
                    url: "/lists",
                    templateUrl: 'app/components/components/listsView.html',
                    data: {
                        pageTitle: 'Lists (components)'
                    }
                })
                .state("restricted.components.modal", {
                    url: "/modal",
                    templateUrl: 'app/components/components/modalView.html',
                    data: {
                        pageTitle: 'Modals/Lightboxes (components)'
                    }
                })
                .state("restricted.components.nestable", {
                    url: "/nestable",
                    templateUrl: 'app/components/components/nestableView.html',
                    controller: 'nestableCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/components/nestableController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Nestable (components)'
                    }
                })
                .state("restricted.components.notifications", {
                    url: "/notifications",
                    templateUrl: 'app/components/components/notificationsView.html',
                    controller: 'notificationsCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/components/notificationsController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Notifications (components)'
                    }
                })
                .state("restricted.components.panels", {
                    url: "/panels",
                    templateUrl: 'app/components/components/panelsView.html',
                    data: {
                        pageTitle: 'Panels (components)'
                    }
                })
                .state("restricted.components.preloaders", {
                    url: "/preloaders",
                    templateUrl: 'app/components/components/preloadersView.html',
                    controller: 'preloadersCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/components/preloadersController.js');
                        }]
                    },
                    data: {
                        pageTitle: 'Preloaders (components)'
                    }
                })
                .state("restricted.components.sortable", {
                    url: "/sortable",
                    templateUrl: 'app/components/components/sortableView.html',
                    controller: 'sortableCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_dragula',
                                'app/components/components/sortableController.js'
                            ], {serie:true} );
                        }]
                    },
                    data: {
                        pageTitle: 'Sortable (components)'
                    }
                })
                .state("restricted.components.tables_examples", {
                    url: "/tables_examples",
                    templateUrl: 'app/components/components/tables_examplesView.html',
                    data: {
                        pageTitle: 'Tables Examples (components)'
                    }
                })
                .state("restricted.components.tables", {
                    url: "/tables",
                    templateUrl: 'app/components/components/tablesView.html',
                    data: {
                        pageTitle: 'Tables (components)'
                    }
                })
                .state("restricted.components.tabs", {
                    url: "/tabs",
                    templateUrl: 'app/components/components/tabsView.html',
                    data: {
                        pageTitle: 'Tabs (components)'
                    }
                })
                .state("restricted.components.tooltips", {
                    url: "/tooltips",
                    templateUrl: 'app/components/components/tooltipsView.html',
                    data: {
                        pageTitle: 'Tooltips (components)'
                    }
                })
                .state("restricted.components.typography", {
                    url: "/typography",
                    templateUrl: 'app/components/components/typographyView.html',
                    data: {
                        pageTitle: 'Typography (components)'
                    }
                })
            // -- E-COMMERCE --
                .state("restricted.ecommerce", {
                    url: "/ecommerce",
                    template: '<div ui-view autoscroll="false"/>',
                    abstract: true
                })
                .state("restricted.ecommerce.product_details", {
                    url: "/product_details",
                    templateUrl: 'app/components/ecommerce/product_detailsView.html',
                    controller: 'productCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/ecommerce/productController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Product Details'
                    }
                })
                .state("restricted.ecommerce.product_edit", {
                    url: "/product_edit",
                    templateUrl: 'app/components/ecommerce/product_editView.html',
                    controller: 'productCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/ecommerce/productController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Product Edit'
                    }
                })
                .state("restricted.ecommerce.products_list", {
                    url: "/products_list",
                    templateUrl: 'app/components/ecommerce/products_listView.html',
                    controller: 'products_listCtrl',
                    resolve: {
                        products_data: function($http){
                            return $http({method: 'GET', url: 'data/ecommerce_products.json'})
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_pagination',
                                'app/components/ecommerce/products_listController.js'
                            ], { serie: true } );
                        }]
                    },
                    data: {
                        pageTitle: 'Products List'
                    }
                })
                .state("restricted.ecommerce.products_grid", {
                    url: "/products_grid",
                    templateUrl: 'app/components/ecommerce/products_gridView.html',
                    controller: 'products_gridCtrl',
                    resolve: {
                        products_data: function($http){
                            return $http({method: 'GET', url: 'data/ecommerce_products.json'})
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/ecommerce/products_gridController.js'
                            ], { serie: true } );
                        }]
                    },
                    data: {
                        pageTitle: 'Products Grid'
                    }
                })
            // -- PLUGINS --
                .state("restricted.plugins", {
                    url: "/plugins",
                    template: '<div ui-view autoscroll="false"/>',
                    abstract: true
                })
                .state("restricted.plugins.calendar", {
                    url: "/calendar",
                    templateUrl: 'app/components/plugins/calendarView.html',
                    controller: 'calendarCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_fullcalendar',
                                'app/components/plugins/calendarController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Calendar'
                    }
                })
                .state("restricted.plugins.code_editor", {
                    url: "/code_editor",
                    templateUrl: 'app/components/plugins/code_editorView.html',
                    controller: 'code_editorCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_codemirror',
                                'app/components/plugins/code_editorController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Code Editor'
                    }
                })
                .state("restricted.plugins.charts", {
                    url: "/charts",
                    templateUrl: 'app/components/plugins/chartsView.html',
                    controller: 'chartsCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_charts_chartist',
                                'lazy_charts_metricsgraphics',
                                'lazy_charts_c3',
                                'app/components/plugins/chartsController.js'
                            ], {serie: true});
                        }],
                        mg_chart_linked_1: function($http){
                            return $http({ method: 'GET', url: 'data/mg_brief-1.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        mg_chart_linked_2: function($http){
                            return $http({ method: 'GET', url: 'data/mg_brief-2.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        mg_confidence_band: function($http){
                            return $http({ method: 'GET', url: 'data/mg_confidence_band.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        mg_currency: function($http){
                            return $http({ method: 'GET', url: 'data/mg_some_currency.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Charts'
                    }
                })
                .state("restricted.plugins.datatables", {
                    url: "/datatables",
                    templateUrl: 'app/components/plugins/datatablesView.html',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'bower_components/angular-resource/angular-resource.min.js',
                                'lazy_datatables',
                                'app/components/plugins/datatablesController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Datatables'
                    }
                })
                .state("restricted.plugins.diff_view", {
                    url: "/diff_view",
                    templateUrl: 'app/components/plugins/diff_viewView.html',
                    controller: 'diff_viewCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_diff',
                                'app/components/plugins/diff_viewController.js'
                            ],{serie:true});
                        }]
                    },
                    data: {
                        pageTitle: 'Diff View'
                    }
                })
                .state("restricted.plugins.gantt_chart", {
                    url: "/gantt_chart",
                    controller: 'gantt_chartCtrl',
                    templateUrl: 'app/components/plugins/gantt_chartView.html',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_gantt_chart',
                                'app/components/plugins/gantt_chartController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Gantt Chart'
                    }
                })
                .state("restricted.plugins.google_maps", {
                    url: "/google_maps",
                    templateUrl: 'app/components/plugins/google_mapsView.html',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_google_maps',
                                'app/components/plugins/google_mapsController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Google Maps'
                    }
                })
                .state("restricted.plugins.tablesorter", {
                    url: "/tablesorter",
                    templateUrl: 'app/components/plugins/tablesorterView.html',
                    controller: 'tablesorterCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_tablesorter',
                                'app/components/plugins/tablesorterController.js'
                            ],{serie:true});
                        }],
                        ts_data: function($http){
                            return $http({ method: 'GET', url: 'data/tablesorter.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Tablesorter'
                    }
                })
                .state("restricted.plugins.vector_maps", {
                    url: "/vector_maps",
                    templateUrl: 'app/components/plugins/vector_mapsView.html',
                    controller: 'vector_mapsCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_vector_maps',
                                'app/components/plugins/vector_mapsController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Vector Maps'
                    }
                })

            // -- PAGES --
                .state("restricted.pages", {
                    url: "/pages",
                    template: '<div ui-view autoscroll="false" ng-class="{ \'uk-height-1-1\': page_full_height }" />',
                    abstract: true
                })
                .state("restricted.pages.blank", {
                    url: "/blank",
                    templateUrl: 'app/components/pages/blankView.html',
                    data: {
                        pageTitle: 'Blank Page'
                    }
                })
                .state("restricted.pages.chat", {
                    url: "/chat",
                    templateUrl: 'app/components/pages/chatView.html',
                    controller: 'chatCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/chatController.js'
                            ]);
                        }]
                    },
                    data: {
                        pageTitle: 'Chat'
                    }
                })
                .state("restricted.pages.contact_list", {
                    url: "/contact_list",
                    templateUrl: 'app/components/pages/contact_listView.html',
                    controller: 'contact_listCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/contact_listController.js'
                            ],{serie: true});
                        }],
                        contact_list: function($http){
                            return $http({ method: 'GET', url: 'data/contact_list.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Contact List'
                    }
                })
                .state("restricted.pages.gallery", {
                    url: "/gallery",
                    templateUrl: 'app/components/pages/galleryView.html',
                    controller: 'galleryCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/galleryController.js'
                            ],{serie: true});
                        }]
                    },
                    data: {
                        pageTitle: 'Gallery'
                    }
                })
                .state("restricted.pages.help", {
                    url: "/help",
                    templateUrl: 'app/components/pages/helpView.html',
                    controller: 'helpCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/helpController.js'
                            ],{serie: true});
                        }],
                        help_data: function($http){
                            return $http({ method: 'GET', url: 'data/help_faq.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Help Center'
                    }
                })
                .state("restricted.pages.invoices", {
                    url: "/invoices",
                    abstract: true,
                    templateUrl: 'app/components/pages/invoices_listView.html',
                    controller: 'invoicesCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/pages/invoicesController.js');
                        }],
                        invoices_data: function($http){
                            return $http({ method: 'GET', url: 'data/invoices_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    }
                })
                .state("restricted.pages.invoices.list", {
                    url: "/list",
                    views: {
                        'ivoice_content': {
                            templateUrl: 'app/components/pages/invoices_blankView.html',
                            controller: 'invoicesCtrl'
                        }
                    },
                    data: {
                        pageTitle: 'Invoices'
                    }
                })
                .state("restricted.pages.invoices.details", {
                    url: "/details/{invoiceId:[0-9]{1,4}}",
                    views: {
                        'ivoice_content': {
                            templateUrl: 'app/components/pages/invoices_detailView.html',
                            controller: 'invoicesCtrl'
                        }
                    },
                    params: { hidePreloader: true }
                })
                .state("restricted.pages.invoices.add", {
                    url: "/add",
                    views: {
                        'ivoice_content': {
                            templateUrl: 'app/components/pages/invoices_addView.html',
                            controller: 'invoicesCtrl'
                        }
                    },
                    params: { hidePreloader: true }
                })
                .state("restricted.pages.mailbox", {
                    url: "/mailbox",
                    templateUrl: 'app/components/pages/mailboxView.html',
                    controller: 'mailboxCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/pages/mailboxController.js');
                        }],
                        messages: function($http){
                            return $http({ method: 'GET', url: 'data/mailbox_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Mailbox'
                    }
                })
                .state("restricted.pages.notes", {
                    url: "/notes",
                    templateUrl: 'app/components/pages/notesView.html',
                    controller: 'notesCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/notesController.js'
                            ]);
                        }],
                        notes_data: function($http){
                            return $http({ method: 'GET', url: 'data/notes_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Notes'
                    }
                })
                .state("restricted.pages.pricing_tables", {
                    url: "/pricing_tables",
                    templateUrl: 'app/components/pages/pricing_tablesView.html',
                    data: {
                        pageTitle: 'Pricing Tables'
                    }
                })
                .state("restricted.pages.scrum_board", {
                    url: "/scrum_board",
                    templateUrl: 'app/components/pages/scrum_boardView.html',
                    controller: 'scrum_boardCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_dragula',
                                'app/components/pages/scrum_boardController.js'
                            ],{serie: true});
                        }],
                        tasks_list: function($http){
                            return $http({ method: 'GET', url: 'data/tasks_list.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Scrum Board'
                    }
                })
                .state("restricted.pages.settings", {
                    url: "/settings",
                    templateUrl: 'app/components/pages/settingsView.html',
                    controller: 'settingsCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load('app/components/pages/settingsController.js')
                        }]
                    },
                    data: {
                        pageTitle: 'Settings'
                    }
                })
                .state("restricted.pages.snippets", {
                    url: "/snippets",
                    templateUrl: 'app/components/pages/snippetsView.html',
                    controller: 'snippetsCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/snippetsController.js'
                            ]);
                        }],
                        snippets_data: function($http){
                            return $http({ method: 'GET', url: 'data/snippets.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'Snippets'
                    }
                })
                .state("restricted.pages.todo", {
                    url: "/todo",
                    templateUrl: 'app/components/pages/todoView.html',
                    controller: 'todoCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/todoController.js'
                            ]);
                        }],
                        todo_data: function($http){
                            return $http({ method: 'GET', url: 'data/todo_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'User profile'
                    }
                })
                .state("restricted.pages.user_profile", {
                    url: "/user_profile",
                    templateUrl: 'app/components/pages/user_profileView.html',
                    controller: 'user_profileCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/user_profileController.js'
                            ]);
                        }],
                        user_data: function($http){
                            return $http({ method: 'GET', url: 'data/user_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'User profile'
                    }
                })
                .state("restricted.pages.user_edit", {
                    url: "/user_edit",
                    templateUrl: 'app/components/pages/user_editView.html',
                    controller: 'user_editCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/user_editController.js'
                            ]);
                        }],
                        user_data: function($http){
                            return $http({ method: 'GET', url: 'data/user_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        },
                        groups_data: function($http){
                            return $http({ method: 'GET', url: 'data/groups_data.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    data: {
                        pageTitle: 'User edit'
                    }
                })
                .state("restricted.pages.issues", {
                    url: "/issues",
                    abstract: true,
                    template: '<div ui-view autoscroll="false" ng-class="{ \'uk-height-1-1\': page_full_height }" />',
                    resolve: {
                        deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'lazy_tablesorter',
                                'app/components/pages/issuesController.js'
                            ]);
                        }],
                        issues_data: function($http){
                            return $http({ method: 'GET', url: 'data/issues.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    }
                })
                .state("restricted.pages.issues.list", {
                    url: "/list",
                    templateUrl: 'app/components/pages/issues_listView.html',
                    controller: 'issuesCtrl',
                    data: {
                        pageTitle: 'Issues List'
                    }
                })
                .state("restricted.pages.issues.details", {
                    url: "/details/{issueId:[0-9]{1,4}}",
                    controller: 'issuesCtrl',
                    templateUrl: 'app/components/pages/issue_detailsView.html',
                    data: {
                        pageTitle: 'Issue Details'
                    }
                })
                .state("restricted.pages.blog", {
                    url: "/blog",
                    template: '<div ui-view autoscroll="false" ng-class="{ \'uk-height-1-1\': page_full_height }" />',
                    controller: 'blogCtrl',
                    resolve: {
                        deps: ['$ocLazyLoad', function($ocLazyLoad) {
                            return $ocLazyLoad.load([
                                'app/components/pages/blogController.js'
                            ]);
                        }],
                        blog_articles: function($http){
                            return $http({ method: 'GET', url: 'data/blog_articles.json' })
                                .then(function (data) {
                                    return data.data;
                                });
                        }
                    },
                    abstract: true
                })
                .state("restricted.pages.blog.list", {
                    url: "/list",
                    controller: 'blogCtrl',
                    templateUrl: 'app/components/pages/blog_listView.html',
                    data: {
                        pageTitle: 'Blog List'
                    }
                })
                .state("restricted.pages.blog.article", {
                    url: "/article/{articleId:[0-9]{1,4}}",
                    controller: 'blogCtrl',
                    templateUrl: 'app/components/pages/blog_articleView.html',
                    data: {
                        pageTitle: 'Blog Article'
                    }
                })
        }
    ]);
