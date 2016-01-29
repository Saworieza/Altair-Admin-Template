angular
    .module('altairApp')
    .controller('validationCtrl', [
        '$scope',
        '$rootScope',
        function ($scope,$rootScope) {

            var $formValidate = $('#form_validation');

            $formValidate
                .parsley()
                .on('form:validated',function() {
                    $scope.$apply();
                })
                .on('field:validated',function(parsleyField) {
                    if($(parsleyField.$element).hasClass('md-input')) {
                        $scope.$apply();
                    }
                });

            $scope.selectize_val_options = [
                { value: 'press', label: 'Press' },
                { value: 'net', label: 'Internet' },
                { value: 'mouth', label: 'Word of mouth' },
                { value: 'other', label: 'Other...' }
            ];

            $scope.selectize_val_config = {
                maxItems: 1,
                valueField: 'value',
                labelField: 'label',
                create: false,
                placeholder: 'Choose...'
            };

        }
    ]);