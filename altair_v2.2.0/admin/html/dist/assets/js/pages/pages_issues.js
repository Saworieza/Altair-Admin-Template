$(function() {

    if(Modernizr.touch) {
        // make table cell focusable
        var $focus_highlight = $('.focus-highlight');
        if ( $focus_highlight.length ) {
            $focus_highlight
                .find('td, th')
                .attr('tabindex', '1')
                .on('touchstart', function() {
                    $(this).focus();
                });
        }
        // disable fastclick on table headers (touch devices)
        $('.tablesorter').find('th').addClass('needsclick');
    }

    // list view
    altair_issues.list_view();
});

altair_issues = {
    list_view: function() {

        var $ts_issues = $("#ts_issues");

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
        var ts_users = $ts_issues
            .tablesorter({
                theme: 'altair',
                widthFixed: true,
                widgets: ['zebra', 'filter']
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
                                duration: 280,
                                easing: easing_swiftOut
                            })
                    },
                    onDropdownClose: function($dropdown) {
                        $dropdown
                            .show()
                            .velocity('slideUp', {
                                duration: 280,
                                easing: easing_swiftOut
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
                            duration: 280,
                            easing: easing_swiftOut
                        })
                },
                onDropdownClose: function($dropdown) {
                    $dropdown
                        .show()
                        .velocity('slideUp', {
                            duration: 280,
                            easing: easing_swiftOut
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

    }
};