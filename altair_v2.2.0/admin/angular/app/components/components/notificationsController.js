angular
    .module('altairApp')
    .controller('notificationsCtrl', [
        '$scope',
        '$rootScope',
        '$state',
        function ($scope,$rootScope,$state) {

            $scope.notificationCallback = function() {
                return alert('Notify closed!');
            };

            $scope.message_in_controller = "<a href='#' class='notify-action'>Undo</a> Message deleted";

        }
    ]);