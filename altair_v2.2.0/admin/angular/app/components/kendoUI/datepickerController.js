angular
    .module('altairApp')
    .controller('datepickerCtrl', [
        '$scope',
        function ($scope) {
            $scope.monthSelectorOptions = {
                start: "year",
                depth: "year"
            };
            $scope.getType = function(x) {
                return typeof x;
            };
            $scope.isDate = function(x) {
                return x instanceof Date;
            };
        }
    ]);