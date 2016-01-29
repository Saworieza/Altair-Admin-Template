angular
    .module('altairApp')
    .controller('regularCtrl', [
        '$scope',
        '$rootScope',
        function ($scope,$rootScope) {

            $scope.form = {
                input_d: "Lorem ipsum dolor sit...",
                input_k: "Iste voluptatibus doloribus et ut quibusdam unde asperiores minus aut pariatur deserunt et dolores voluptatum tempore voluptates nesciunt eum deleniti ea voluptas ad possimus amet cupiditate modi eum ullam magnam dolorum facere asperiores quis fuga sint asperiores dolorum rerum adipisci est reprehenderit in magnam."
            };

            $scope.selectize_a_data = {
                options: [
                    {
                        id: 1,
                        title: "Item A1",
                        value: "a1",
                        parent_id: 1
                    },
                    {
                        id: 2,
                        title: "Item B1",
                        value: "b1",
                        parent_id: 1
                    },
                    {
                        id: 3,
                        title: "Item C1",
                        value: "c1",
                        parent_id: 1
                    },
                    {
                        id: 4,
                        title: "Item A2",
                        value: "a2",
                        parent_id: 2
                    },
                    {
                        id: 5,
                        title: "Item B2",
                        value: "b2",
                        parent_id: 2
                    },
                    {
                        id: 6,
                        title: "Item C2",
                        value: "c2",
                        parent_id: 2
                    }
                ]
            };

            $scope.selectize_a_config = {
                create: false,
                maxItems: 1,
                placeholder: 'Select...',
                optgroupField: 'parent_id',
                optgroupLabelField: 'title',
                optgroupValueField: 'ogid',
                valueField: 'value',
                labelField: 'title',
                searchField: 'title'
            };

            $scope.selectize_b_options = ["Item A", "Item B", "Item C"];

            $scope.switches = {
                switch_a: 'true',
                switch_d: 'true',
                switch_f: 'true',
                switch_g: 'true',
                switch_h: 'true',
                switch_i: 'true'
            };

            $scope.checkbox_demo_4 = true;

        }
    ]);