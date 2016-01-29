angular
    .module('altairApp')
    .controller('productCtrl', [
        '$scope',
        '$rootScope',
        'utils',
        function ($scope,$rootScope,utils) {

            $scope.product = {
                active: true,
                manufacturer: 'Samsung',
                name: 'Galaxy S6 edge',
                memory: '64GB',
                color: 'Black',
                sn: 'SM-G925TZKFTMB',
                sku: '4319572394',
                price: '540.00',
                tax: '18',
                quantity: '120',
                tags: [
                    'LTE',
                    'Quad HD',
                    'Android 5.0',
                    '64GB'
                ],
                description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam necessitatibus suscipit velit voluptatibus! Ab accusamus ad adipisci alias aliquid at atque consectetur, dicta dignissimos, distinctio dolores esse fugiat iste laborum libero magni maiores maxime modi nemo neque, nesciunt nisi nulla optio placeat quas quia quibusdam quis saepe sit ullam!',
                main_img: 'assets/img/ecommerce/s6_edge.jpg',
                other_img: [
                    'assets/img/ecommerce/s6_edge_1.jpg',
                    'assets/img/ecommerce/s6_edge_2.jpg',
                    'assets/img/ecommerce/s6_edge_3.jpg'
                ],
                options: [
                    {
                        group_name: 'Colors',
                        option_th: 'Color',
                        items: [
                            {
                                name: 'Black',
                                in_stock: true,
                                difference: '',
                                price: '0.00'
                            },
                            {
                                name: 'White',
                                in_stock: false,
                                difference: '+',
                                price: '25.00'
                            },
                            {
                                name: 'Red',
                                in_stock: true,
                                difference: '-',
                                price: '10.00'
                            }
                        ]
                    },
                    {
                        group_name: 'Internal memory',
                        option_th: 'Memory',
                        items: [
                            {
                                name: '32GB',
                                in_stock: false,
                                difference: '-',
                                price: '50.00'
                            },
                            {
                                name: '64GB',
                                in_stock: true,
                                difference: '',
                                price: '0.00'
                            },
                            {
                                name: '128GB',
                                in_stock: true,
                                difference: '+',
                                price: '80.00'
                            }
                        ]
                    }
                ],
                options_memory: [
                    '32GB', '64GB', '128GB'
                ],
                options_colors: [
                    'Black', 'White', 'Red'
                ]
            };

            // product options (edit)
            $scope.product_options_group = [];
            angular.forEach($scope.product.options, function(value) {
                $scope.product_options_group.push(value);
            });

            // product tags (edit)
            $scope.product_tags = $scope.product.tags;

            // serialize form on submit
            $scope.submitForm = function($event) {
                $event.preventDefault();
                var form_serialized = JSON.stringify( utils.serializeObject($('#product_edit_form')), null, 2 );
                UIkit.modal.alert('<p>Product data:</p><pre>' + form_serialized + '</pre>');
            }

        }
    ]);