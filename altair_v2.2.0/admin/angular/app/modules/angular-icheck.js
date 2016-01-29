;'use strict';
angular
    .module('icheck', [])
    .directive('icheck', function ($timeout, $parse) {
        return {
            require: 'ngModel',
            restrict: 'A',
            link: function ($scope, element, $attrs, ngModel) {
                return $timeout(function () {
                    var value;
                    value = $attrs['value'];

                    $scope.$watch($attrs['ngModel'], function (newValue) {
                        $(element).iCheck('update');
                    });

                    $scope.$watch($attrs['ngDisabled'], function (newValue) {
                        $(element).iCheck(newValue ? 'disable' : 'enable');
                        $(element).iCheck('update');
                    });

                    return $(element).iCheck({
                        checkboxClass: 'icheckbox_md',
                        radioClass: 'iradio_md',
                        increaseArea: '20%'
                    }).on('ifChanged', function (event) {
                        if ( !!$(element).data('parsley-multiple') ) {
                            $(element).parsley().validate();
                        }
                        if ($(element).attr('type') === 'checkbox' && $attrs['ngModel']) {
                            $scope.$apply(function () {
                                return ngModel.$setViewValue(event.target.checked);
                            });
                        }
                    }).on('ifClicked', function (event) {
                        if ($(element).attr('type') === 'radio' && $attrs['ngModel']) {
                            return $scope.$apply(function () {
                                //set up for radio buttons to be de-selectable
                                if (ngModel.$viewValue != value)
                                    return ngModel.$setViewValue(value);
                                else
                                    ngModel.$setViewValue(null);
                                ngModel.$render();
                            });
                        }
                    });
                });
            }
        };
    });