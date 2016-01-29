angular
    .module('altairApp')
    .controller('issuesCtrl', [
        '$rootScope',
        '$scope',
        '$stateParams',
        'issues_data',
        'utils',
        'variables',
        function ($rootScope,$scope,$stateParams,issues_data,utils,variables) {

            $rootScope.pageHeadingActive = true;

            $scope.project_name = 'Altair';

            $scope.issues = issues_data;

            $scope.issue_details = utils.findByItemId($scope.issues, $stateParams.issueId);

            $scope.newTask = {
                name: 'Altair-245',
                assignee: [

                ],
                group: [
                    { name: 'todo', title: 'To Do' },
                    { name: 'inAnalysis', title: 'In Analysis' },
                    { name: 'inProgress', title: 'In Progress' },
                    { name: 'done', title: 'Done' }
                ]
            };

            $scope.newIssue = {
                assignee: {
                    config: {
                        create:false,
                        maxItems: 1,
                        valueField: 'id',
                        labelField: 'title',
                        placeholder: 'Select Assignee...'
                    },
                    options: [
                        { id: 1, title: 'Aleen Grant' },
                        { id: 2, title: 'Tyrese Koss' },
                        { id: 3, title: 'Chasity Green' },
                        { id: 4, title: 'Me' }
                    ]
                }
            };

            $scope.$on('onLastRepeat', function (scope, element, attrs) {

                // issues list tablesorter
                var $ts_issues = $("#ts_issues");
                if($(element).closest($ts_issues).length) {

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
                    $ts_issues
                        .tablesorter({
                            theme: 'altair',
                            widthFixed: true,
                            widgets: ['zebra', 'filter']
                        })
                        // initialize the pager plugin
                        .tablesorterPager(pagerOptions)
                        .on('pagerComplete', function (e, filter) {
                            // update selectize value
                            if (typeof selectizeObj !== 'undefined' && selectizeObj.data('selectize')) {
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
                                onDropdownOpen: function ($dropdown) {
                                    $dropdown
                                        .hide()
                                        .velocity('slideDown', {
                                            duration: 200,
                                            easing: variables.easing_swiftOut
                                        })
                                },
                                onDropdownClose: function ($dropdown) {
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
                            onDropdownOpen: function ($dropdown) {
                                $dropdown
                                    .hide()
                                    .velocity('slideDown', {
                                        duration: 200,
                                        easing: variables.easing_swiftOut
                                    })
                            },
                            onDropdownClose: function ($dropdown) {
                                $dropdown
                                    .show()
                                    .velocity('slideUp', {
                                        duration: 200,
                                        easing: variables.easing_swiftOut
                                    });

                                // hide tooltip
                                $('.uk-tooltip').hide();

                                if (typeof selectizeObj !== 'undefined' && selectizeObj.data('selectize')) {
                                    selectizePage = selectizeObj[0].selectize;
                                    selectizePage.destroy();
                                    $('.ts_gotoPage').next('.selectize_fix').remove();
                                    setTimeout(function () {
                                        createPageSelectize()
                                    })
                                }

                            }
                        });
                }

            })

        }
    ]);