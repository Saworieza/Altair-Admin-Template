angular
    .module('altairApp')
    .controller('multiselectCtrl', [
        '$scope',
        function ($scope) {
            $scope.selectOptions = {
                placeholder: "Select users...",
                dataTextField: "ContactName",
                dataValueField: "CustomerID",
                valuePrimitive: true,
                autoBind: false,
                dataSource: {
                    serverFiltering: true,
                    transport: {
                        read: {
                            url: "data/kUI_users_data.min.json"
                        }
                    }
                }
            };
            $scope.selectedIds = [ '04', '07' ];
        }
    ]);