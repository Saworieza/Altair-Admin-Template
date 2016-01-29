angular
    .module('altairApp')
    .controller('maskedInputCtrl', [
        '$scope',
        function ($scope) {
            $scope.phone = "555 123 4567";
            $scope.cc = "1234 1234 1234 1234";
            $scope.ssn = "003-12-3456";
            $scope.post = "W1N 1AC";
        }
    ]);