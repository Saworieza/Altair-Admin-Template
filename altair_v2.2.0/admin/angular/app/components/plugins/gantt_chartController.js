angular
    .module('altairApp')
    .controller('gantt_chartCtrl', [
        '$scope',
        '$timeout',
        function ($scope,$timeout) {

            $scope.gantt_data = [
                {
                    id: 1,
                    name: "Concept",
                    color: '#006064',
                    series: [
                        {
                            name: "Brainstorm",
                            start: '08/01/2015',
                            end: '08/03/2015',
                            color: "#0288D1",
                            user_name: "Oswaldo Conn",
                            user_avatar: "assets/img/avatars/avatar_01_tn.png"
                        },
                        {
                            name: "Wireframes",
                            start: '08/04/2015',
                            end: '08/07/2015',
                            color: "#0288D1"
                        },
                        {
                            name: "Concept description",
                            start: '08/06/2015',
                            end: '08/10/2015',
                            color: "#0288D1"
                        }
                    ]
                },
                {
                    id: 2,
                    name: "Design",
                    series: [
                        {
                            name: "Sketching",
                            start: '08/08/2015',
                            end: '08/16/2015',
                            color: "#0097A7"
                        },
                        {
                            name: "Photography",
                            start: '08/10/2015',
                            end: '08/16/2015',
                            color: "#0097A7",
                            user_name: "Alexandro Langosh",
                            user_avatar: "assets/img/avatars/avatar_05_tn.png"
                        },
                        {
                            name: "Feedback",
                            start: '08/19/2015',
                            end: '08/21/2015',
                            color: "#0097A7"
                        },
                        {
                            name: "Final Design",
                            start: '08/21/2015',
                            end: '08/27/2015',
                            color: "#0097A7",
                            user_name: "Jacquelyn Rohan",
                            user_avatar: "assets/img/avatars/avatar_02_tn.png"
                        }
                    ]
                },
                {
                    id: 3,
                    name: "Implementation",
                    series: [
                        {
                            name: "Specifications",
                            start: '08/26/2015',
                            end: '09/06/2015',
                            color: "#E65100"
                        },
                        {
                            name: "Templates",
                            start: '09/04/2015',
                            end: '09/10/2015',
                            color: "#E65100"
                        },
                        {
                            name: "Database",
                            start: '09/05/2015',
                            end: '09/13/2015',
                            color: "#E65100"
                        },
                        {
                            name: "Integration",
                            start: '09/16/2015',
                            end: '10/10/2015',
                            color: "#E65100",
                            user_name: "Ruben Shanahan",
                            user_avatar: "assets/img/avatars/avatar_07_tn.png"
                        }
                    ]
                },
                {
                    id: 4,
                    name: "Testing & Delivery",
                    series: [
                        {
                            name:   "Focus Group",
                            start:  '10/17/2015',
                            end:    '10/27/2015',
                            color:  "#689F38"
                        },
                        {
                            name:   "Stress Test",
                            start:  '10/25/2015',
                            end:    '11/06/2015',
                            color:  "#689F38"
                        },
                        {
                            name:   "Delivery",
                            start:  '11/07/2015',
                            end:    '11/12/2015',
                            color:  "#689F38",
                            user_name: "Candida Rodriguez",
                            user_avatar: "assets/img/avatars/avatar_06_tn.png"
                        }
                    ]
                }
            ];

            $timeout(function() {
                $('#gantt_chart').ganttView({
                    data: $scope.gantt_data,
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
            })

        }
    ]);