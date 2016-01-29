angular
    .module('altairApp')
    .controller('windowCtrl', [
        '$scope',
        function ($scope) {
            $scope.hello = "Hello from Controller!";
        }
    ]);