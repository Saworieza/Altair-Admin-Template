$(function() {
	altair_gantt.init();
});

altair_gantt = {
    init: function() {
        var $gantt_chart = $('#gantt_chart');
        if($gantt_chart.length) {
            $gantt_chart.ganttView({
                data: ganttData,
                behavior: {
                    onClick: function (data) {
                        var msg = "You clicked on an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                        console.log(msg);
                    },
                    onResize: function (data) {
                        var msg = "You resized an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                        console.log(msg);
                    },
                    onDrag: function (data) {
                        var msg = "You dragged an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                        console.log(msg);
                    }
                }
            });

            $('.series-user').each(function() {
                UIkit.tooltip($(this), {});
            })

        }
    }
};