<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <div id="gantt_chart"></div>
                            <script>
                                ganttData = [
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
                                                user_name: "<?php echo $faker->firstNameMale; echo ' '.$faker->lastName; ?>",
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
                                                user_name: "<?php echo $faker->firstNameMale; echo ' '.$faker->lastName; ?>",
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
                                                user_name: "<?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?>",
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
                                                user_name: "<?php echo $faker->firstNameMale; echo ' '.$faker->lastName; ?>",
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
                                                user_name: "<?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?>",
                                                user_avatar: "assets/img/avatars/avatar_06_tn.png"
                                            }
                                        ]
                                    }
                                ];
                            </script>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
