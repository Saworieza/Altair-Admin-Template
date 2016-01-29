$(function() {
    // draggable tasks
    altair_scrum_board.draggable_tasks();
});

altair_scrum_board = {
    draggable_tasks: function() {

        var drake = dragula([
            $('#scrum_column_todo')[0],
            $('#scrum_column_inAnalysis')[0],
            $('#scrum_column_inProgress')[0],
            $('#scrum_column_done')[0]
        ]);

        var containers = drake.containers,
            length = containers.length;

        for (var i = 0; i < length; i++) {
            $(containers[i]).addClass('dragula dragula-vertical');
        }

    }
};