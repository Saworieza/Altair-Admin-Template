$(function() {
    // diff
    altair_diff.init();
});


altair_diff  = {
    init: function() {

        var diffType = 'diffChars';

        var panel_a = $('#diff_panel_a'),
            panel_b = $('#diff_panel_b'),
            make_diff = function(diffType) {
                var panel_a_val = panel_a.val(),
                    panel_b_val = panel_b.val(),
                    diff = JsDiff[diffType](panel_a_val, panel_b_val);

                $('#diff_result').html('');

                diff.forEach(function(part){
                    var color = part.added ? 'md-color-light-green-600': part.removed ? 'md-color-red-500 uk-text-del' : 'md-color-grey-400';

                    var span = $('<span/>');

                    span
                        .addClass(color)
                        .text(part.value);

                    $('#diff_result').append(span);
                });

            };

        make_diff(diffType);

        panel_a.on('change', function() {
            make_diff(diffType);
        });

        panel_b.on('change', function() {
            make_diff(diffType);
        });

        $('.diff_radio').on('ifChecked',function() {
            make_diff($(this).val());
        });

    }
};