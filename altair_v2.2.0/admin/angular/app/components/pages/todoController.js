angular
    .module('altairApp')
    .controller('todoCtrl', [
        '$rootScope',
        '$scope',
        'todo_data',
        function ($rootScope,$scope,todo_data) {

            $rootScope.page_full_height = true;
            $rootScope.headerDoubleHeightActive = true;

            $scope.todo_data = todo_data;

            $scope.todo_length = $scope.todo_data.length;

        }
    ]);