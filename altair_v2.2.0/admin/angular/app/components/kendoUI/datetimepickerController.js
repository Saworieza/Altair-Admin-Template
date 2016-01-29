angular
    .module('altairApp')
    .controller('datetimepickerCtrl', [
        '$scope',
        function ($scope) {
            $scope.getType = function(x) {
                return typeof x;
            };
            $scope.isDate = function(x) {
                return x instanceof Date;
            };
        }
    ]);