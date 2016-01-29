angular
    .module('altairApp')
    .controller('dt_default',
        function($compile, $scope, $timeout, $resource, DTOptionsBuilder, DTColumnDefBuilder) {
            var vm = this;
            vm.dt_data = [];
            vm.dtOptions = DTOptionsBuilder
                .newOptions()
                .withDisplayLength(10)
                .withOption('initComplete', function() {
                    $timeout(function() {
                        $compile($('.dt-uikit .md-input'))($scope);
                    })
                });
            vm.dtColumnDefs = [
                DTColumnDefBuilder.newColumnDef(0),
                DTColumnDefBuilder.newColumnDef(1),
                DTColumnDefBuilder.newColumnDef(2),
                DTColumnDefBuilder.newColumnDef(3),
                DTColumnDefBuilder.newColumnDef(4),
                DTColumnDefBuilder.newColumnDef(5)
            ];
            $resource('data/dt_data.json')
                .query()
                .$promise
                .then(function(dt_data) {
                    vm.dt_data = dt_data;
                });
        }
    )
    .controller('dt_scroll_vertical',
        function($compile, $scope, $timeout, $resource, DTOptionsBuilder, DTColumnDefBuilder) {
            var vm = this;
            vm.dt_data = [];
            vm.dtOptions = DTOptionsBuilder
                .fromSource('data/dt_data.json')
                .withDisplayLength(10)
                .withOption('scrollY','200px')
                .withOption('scrollCollapse',false)
                .withOption('paging',false)
                .withOption('initComplete', function() {
                    $timeout(function() {
                        $compile($('.dt-uikit .md-input'))($scope);
                    })
                });
            vm.dtColumnDefs = [
                DTColumnDefBuilder.newColumnDef(0).withTitle('Name'),
                DTColumnDefBuilder.newColumnDef(1).withTitle('Position'),
                DTColumnDefBuilder.newColumnDef(2).withTitle('Office'),
                DTColumnDefBuilder.newColumnDef(3).withTitle('Extn.'),
                DTColumnDefBuilder.newColumnDef(4).withTitle('Start date'),
                DTColumnDefBuilder.newColumnDef(5).withTitle('Salary')
            ];

        }
    )
    .controller('dt_individual_search',
        function($compile, $scope, $timeout, $resource, DTOptionsBuilder, DTColumnDefBuilder) {
            var vm = this;
            vm.dtOptions = DTOptionsBuilder
                .fromSource('data/dt_data.json')
                .withPaginationType('full_numbers')
                .withColumnFilter({
                    aoColumns: [
                        {
                            type: 'text',
                            bRegex: true,
                            bSmart: true
                        },
                        {
                            type: 'text',
                            bRegex: true,
                            bSmart: true
                        },
                        {
                            type: 'text',
                            bRegex: true,
                            bSmart: true
                        },
                        {
                            type: 'number',
                            bRegex: true,
                            bSmart: true
                        },
                        {
                            type: 'number',
                            bRegex: true,
                            bSmart: true
                        },
                        {
                            type: 'number',
                            bRegex: true,
                            bSmart: true
                        }
                    ]
                })
                .withOption('initComplete', function() {
                    $timeout(function() {
                        $compile($('.dt-uikit .md-input'))($scope);
                    })
                });
            vm.dtColumnDefs = [
                DTColumnDefBuilder.newColumnDef(0).withTitle('Name'),
                DTColumnDefBuilder.newColumnDef(1).withTitle('Position'),
                DTColumnDefBuilder.newColumnDef(2).withTitle('Office'),
                DTColumnDefBuilder.newColumnDef(3).withTitle('Extn.'),
                DTColumnDefBuilder.newColumnDef(4).withTitle('Start date'),
                DTColumnDefBuilder.newColumnDef(5).withTitle('Salary')
            ];
        }
    )
    .controller('dt_col_vis',
        function($compile, $scope, $timeout, $resource, DTOptionsBuilder, DTColumnDefBuilder) {
            var vm = this;
            vm.dtInstance = {};
            vm.dtOptions = DTOptionsBuilder
                .fromSource('data/dt_data.json')
                .withPaginationType('full_numbers')
                .withOption('initComplete', function() {
                    $timeout(function() {

                        var $dt_colVis = vm.dtInstance.dataTable;
                        dt_colVis = vm.dtInstance.DataTable;

                        // init colVis
                        var colvis = new $.fn.dataTable.ColVis( dt_colVis, {
                            buttonText: 'Select columns',
                            exclude: [ 0 ],
                            restore: "Restore",
                            showAll: "Show all",
                            showNone: "Show none"
                        });

                        // custom colVis elements
                        var _colVis_button = $(colvis.dom.button).off('click').attr('class','md-btn md-btn-colVis');
                        var _colVis_wrapper = $('<div class="uk-button-dropdown uk-text-left" data-uk-dropdown="{mode:\'click\',pos:\'bottom-right\'}"/>').append(_colVis_button);
                        var _colVis_wrapper_outer = $('<div class="md-colVis uk-text-right"/>').append(_colVis_wrapper);
                        var _colVis_collection = $(colvis.dom.collection);

                        // Modify colVis collection
                        $(_colVis_collection)
                            .attr({
                                'class': 'md-list-inputs',
                                'style': ''
                            })
                            .find('input')
                            .each(function(index) {
                                var inputClone = $(this).clone().hide();
                                $(this).attr({
                                    'icheck': '',
                                    'class': 'md-icheck',
                                    'ng-model': 'col_icheck_' + index,
                                    'ng-checked': true,
                                    'id': 'col_' + index
                                }).css({
                                    'float': 'left'
                                }).before(inputClone)
                            })
                            .end()
                            .find('span').unwrap()
                            .each(function() {
                                var thisText = $(this).text();
                                var thisInputId =  $(this).prev('input').attr('id');
                                $(this)
                                    .after('<label for="' + thisInputId + '">' + thisText + '</label>')
                                    .end()
                            })
                            .remove();

                        // append collection to collection wrapper
                        var _colVis_collection_wrapper = $('<div class="uk-dropdown"/>').append(_colVis_collection);

                        // append collection wrapper to colVis wrapper
                        _colVis_wrapper.append(_colVis_collection_wrapper);

                        // insert colVis elements before datatable header
                        $dt_colVis.closest('.dt-uikit').find('.dt-uikit-header').before(_colVis_wrapper_outer);

                        // custom events
                        $dt_colVis.closest('.dt-uikit').find('.md-colVis .md-icheck').on('ifClicked',function() {
                            $(this).closest('li').click();
                        });

                        $dt_colVis.closest('.dt-uikit').find('.md-colVis .ColVis_ShowAll,.md-colVis .ColVis_Restore').on('click',function() {
                            $(this).closest('.uk-dropdown').find('.md-icheck').prop('checked',true).iCheck('update')
                        });

                        $dt_colVis.closest('.dt-uikit').find('.md-colVis .ColVis_ShowNone').on('click',function() {
                            $(this).closest('.uk-dropdown').find('.md-icheck').prop('checked',false).iCheck('update')
                        });

                        // md checkboxes
                        $compile($('.dt-uikit .md-icheck'))($scope);
                        // md inputs
                        $compile($('.dt-uikit .md-input'))($scope);

                    })
                });
            vm.dtColumnDefs = [
                DTColumnDefBuilder.newColumnDef(0).withTitle('Name'),
                DTColumnDefBuilder.newColumnDef(1).withTitle('Position'),
                DTColumnDefBuilder.newColumnDef(2).withTitle('Office'),
                DTColumnDefBuilder.newColumnDef(3).withTitle('Extn.'),
                DTColumnDefBuilder.newColumnDef(4).withTitle('Start date'),
                DTColumnDefBuilder.newColumnDef(5).withTitle('Salary')
            ];
        }
    )
    .controller('dt_table_tools',
        function($compile, $scope, $timeout, $resource, DTOptionsBuilder, DTColumnDefBuilder) {
            var vm = this;
            vm.dtInstance = {};
            vm.dtOptions = DTOptionsBuilder
                .fromSource('data/dt_data.json')
                .withPaginationType('full_numbers')
                .withOption('initComplete', function() {
                    $timeout(function() {

                        var $dt_tableTools = vm.dtInstance.dataTable;
                        dt_tabletTools = vm.dtInstance.DataTable;

                        var tt = new $.fn.dataTable.TableTools( dt_tabletTools, {
                            "sSwfPath": "bower_components/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
                        });
                        $( tt.fnContainer() ).insertBefore( $dt_tableTools.closest('.dt-uikit').find('.dt-uikit-header'));

                        $('body').on('click',function(e) {
                            if($('body').hasClass('DTTT_Print')) {
                                if ( !$(e.target).closest(".DTTT").length && !$(e.target).closest(".uk-table").length) {
                                    var esc = $.Event("keydown", { keyCode: 27 });
                                    $('body').trigger(esc);
                                }
                            }
                        });
                        // md inputs
                        $compile($('.dt-uikit .md-input'))($scope);
                    })
                });
            vm.dtColumnDefs = [
                DTColumnDefBuilder.newColumnDef(0).withTitle('Name'),
                DTColumnDefBuilder.newColumnDef(1).withTitle('Position'),
                DTColumnDefBuilder.newColumnDef(2).withTitle('Office'),
                DTColumnDefBuilder.newColumnDef(3).withTitle('Extn.'),
                DTColumnDefBuilder.newColumnDef(4).withTitle('Start date'),
                DTColumnDefBuilder.newColumnDef(5).withTitle('Salary')
            ];

        }
    );