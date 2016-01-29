$(function() {
    // dragula.js
	altair_sortable.dragula_sortable();
});

altair_sortable = {
    dragula_sortable: function () {
        var drake = dragula([document.getElementById('dragula_sortable')]);

        // add class to dragula containers
        var containers = drake.containers,
            length = containers.length;

        for (var i = 0; i < length; i++) {
            $(containers[i]).addClass('dragula');
        }

        // refresh grid on drop
        drake.on('drop',function(){

            UIkit.$html.trigger('changed.uk.dom');
            $window.resize();

        })

    }
};