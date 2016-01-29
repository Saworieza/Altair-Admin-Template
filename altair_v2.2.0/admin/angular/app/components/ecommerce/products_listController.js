angular
    .module('altairApp')
    .controller('products_listCtrl', [
        '$scope',
        '$rootScope',
        'products_data',
        function ($scope,$rootScope,products_data) {

            // products data
            $scope.products_data = products_data;

            $scope.pageSize = 10;

            $scope.filter_status_options = [
                {
                    value: '',
                    title: 'All'
                },
                {
                    value: 'in_stock',
                    title: 'In stock'
                },
                {
                    value: 'out_of_stock',
                    title: 'Out of stock'
                },
                {
                    value: 'ships_3_5_days',
                    title: 'Ships in 3-5 days'
                }
            ];

            $scope.filter_status_config = {
                create: false,
                valueField: 'value',
                labelField: 'title',
                placeholder: 'Status...'
            };

            $scope.filterData = {
                status: ["in_stock","out_of_stock","ships_3_5_days"]
            };

            $scope.filter_pageSize = ['5', '10', '15'];

        }
    ])
;
Array.prototype.contains = function(obj) {
    var i = this.length;
    while (i--) {
        if (this[i] === obj) {
            return true;
        }
    }
    return false;
};