angular
    .module('altairApp')
    .controller('cardsCtrl', [
        '$scope',
        function ($scope) {

            $scope.selectize_card_options = ["Item A", "Item B", "Item C"];

            $scope.selectize_card_config = {
                create: false,
                maxItems: 1,
                placeholder: 'Select...'
            };

            $scope.switch_card = true;

        }
    ]);