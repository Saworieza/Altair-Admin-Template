angular
    .module('altairApp')
    .controller('tablesorterCtrl', [
        '$scope',
        '$timeout',
        '$compile',
        'variables',
        'ts_data',
        function ($scope,$timeout,$compile,variables,ts_data) {

            $scope.table_data = ts_data;

            $scope.alignChar_table_data = [
                [ "abc 123", ".423475", "Koala = cute = cudley", "search.google.com" ],
                [ "abc 1", "23.4", "Ox = stinky", "mail.yahoo.com" ],
                [ "bc 9", "1.0", "Girafee = tall", "http://www.facebook.com" ],
                [ "zyx 24", "7.67", "Bison = burger", "http://internship.whitehouse.gov/" ],
                [ "abc 11", "3000", "Chimp = banana lover", "about.ucla.edu" ],
                [ "abc 2", "56.5", "Elephant = unforgetable", "http://www.wikipedia.org/" ],
                [ "abc 9", "15.5", "Lion = rawr", "rental.nytimes.com/index.html" ],
                [ "ABC 10", "87.20000", "Zebra = stripey", "http://android.google.com" ],
                [ "zyx 1", "999.1", "Koala = cute, again!", "http://irsmrt.mit.edu/" ],
                [ "zyx 12", "0.2", "Llama = llove it", "http://aliens.nasa.gov/" ]
            ];

            // initialize tables
            $scope.$on('onLastRepeat', function (scope, element, attrs) {

                var $ts_pager_filter = $("#ts_pager_filter"),
                    $ts_align = $('#ts_align');

                // pager + filter
                if($(element).closest($ts_pager_filter).length) {

                    // define pager options
                    var pagerOptions = {
                        // target the pager markup - see the HTML block below
                        container: $(".ts_pager"),
                        // output string - default is '{page}/{totalPages}'; possible variables: {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
                        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
                        // if true, the table will remain the same height no matter how many records are displayed. The space is made up by an empty
                        // table row set to a height to compensate; default is false
                        fixedHeight: true,
                        // remove rows from the table to speed up the sort of large tables.
                        // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
                        removeRows: false,
                        // go to page selector - select dropdown that sets the current page
                        cssGoto: '.ts_gotoPage'
                    };

                    // Initialize tablesorter
                    var ts_users = $ts_pager_filter
                        .tablesorter({
                            theme: 'altair',
                            widthFixed: true,
                            widgets: ['zebra', 'filter'],
                            headers: {
                                0: {
                                    sorter: false,
                                    parser: false
                                }
                            }
                        })
                        // initialize the pager plugin
                        .tablesorterPager(pagerOptions)
                        .on('pagerComplete', function(e, filter){
                            // update selectize value
                            if(typeof selectizeObj !== 'undefined' && selectizeObj.data('selectize')) {
                                selectizePage = selectizeObj[0].selectize;
                                selectizePage.setValue($('select.ts_gotoPage option:selected').index() + 1, false);
                            }

                        });

                    // replace 'goto Page' select
                    function createPageSelectize() {
                        selectizeObj = $('select.ts_gotoPage')
                            .val($("select.ts_gotoPage option:selected").val())
                            .after('<div class="selectize_fix"></div>')
                            .selectize({
                                hideSelected: true,
                                onDropdownOpen: function($dropdown) {
                                    $dropdown
                                        .hide()
                                        .velocity('slideDown', {
                                            duration: 200,
                                            easing: variables.easing_swiftOut
                                        })
                                },
                                onDropdownClose: function($dropdown) {
                                    $dropdown
                                        .show()
                                        .velocity('slideUp', {
                                            duration: 200,
                                            easing: variables.easing_swiftOut
                                        });

                                    // hide tooltip
                                    $('.uk-tooltip').hide();
                                }
                            });
                    }
                    createPageSelectize();

                    // replace 'pagesize' select
                    $('.pagesize.ts_selectize')
                        .after('<div class="selectize_fix"></div>')
                        .selectize({
                            hideSelected: true,
                            onDropdownOpen: function($dropdown) {
                                $dropdown
                                    .hide()
                                    .velocity('slideDown', {
                                        duration: 200,
                                        easing: variables.easing_swiftOut
                                    })
                            },
                            onDropdownClose: function($dropdown) {
                                $dropdown
                                    .show()
                                    .velocity('slideUp', {
                                        duration: 200,
                                        easing: variables.easing_swiftOut
                                    });

                                // hide tooltip
                                $('.uk-tooltip').hide();

                                if(typeof selectizeObj !== 'undefined' && selectizeObj.data('selectize')) {
                                    selectizePage = selectizeObj[0].selectize;
                                    selectizePage.destroy();
                                    $('.ts_gotoPage').next('.selectize_fix').remove();
                                    setTimeout(function() {
                                        createPageSelectize()
                                    })
                                }

                            }
                        });

                    // select/unselect table rows
                    $('.ts_checkbox_all')
                        .iCheck({
                            checkboxClass: 'icheckbox_md',
                            radioClass: 'iradio_md',
                            increaseArea: '20%'
                        })
                        .on('ifChecked',function() {
                            $ts_pager_filter
                                .find('.ts_checkbox')
                                // check all checkboxes in table
                                .prop('checked',true)
                                .iCheck('update')
                                // add highlight to row
                                .closest('tr')
                                .addClass('row_highlighted');
                        })
                        .on('ifUnchecked',function() {
                            $ts_pager_filter
                                .find('.ts_checkbox')
                                // uncheck all checkboxes in table
                                .prop('checked',false)
                                .iCheck('update')
                                // remove highlight from row
                                .closest('tr')
                                .removeClass('row_highlighted');
                        });

                    // select/unselect table row
                    $ts_pager_filter.find('.ts_checkbox')
                        .on('ifUnchecked',function() {
                            $(this).closest('tr').removeClass('row_highlighted');
                            $('.ts_checkbox_all').prop('checked',false).iCheck('update');
                        }).on('ifChecked',function() {
                            $(this).closest('tr').addClass('row_highlighted');
                        });

                    // remove single row
                    $ts_pager_filter.on('click','.ts_remove_row',function(e) {
                        e.preventDefault();

                        var $this = $(this);
                        UIkit.modal.confirm('Are you sure you want to delete this user?', function(){
                            $this.closest('tr').remove();
                            ts_users.trigger('update');
                        }, {
                            labels: {
                                'Ok': 'Delete'
                            }
                        });
                    });
                }

                // align widget example
                if($(element).closest($ts_align).length) {
                    $ts_align.tablesorter({
                        theme: 'altair',
                        widgets: ['zebra', 'alignChar'],
                        widgetOptions: {
                            alignChar_wrap: '<i/>',
                            alignChar_charAttrib: 'data-align-char',
                            alignChar_indexAttrib: 'data-align-index',
                            alignChar_adjustAttrib: 'data-align-adjust' // percentage width adjustments
                        }
                    });
                }


            });

        }
    ]);