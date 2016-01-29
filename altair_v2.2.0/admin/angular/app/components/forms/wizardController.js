angular
    .module('altairApp')
    .controller('wizardCtrl', [
        '$scope',
        '$rootScope',
        'utils',
        function ($scope,$rootScope,utils) {

            var $wizard_advanced_form = $('#wizard_advanced_form');

            $scope.finishedWizard = function() {
                var form_serialized = JSON.stringify( utils.serializeObject($wizard_advanced_form), null, 2 );
                UIkit.modal.alert('<p>Wizard data:</p><pre>' + form_serialized + '</pre>');
            };

        }
    ]);