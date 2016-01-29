'use strict';

/**
 * Module to use Switchery as a directive for angular.
 * @TODO implement Switchery as a service, https://github.com/abpetkov/switchery/pull/11
 */
angular.module('NgSwitchery', [])
    .directive('uiSwitch', ['$window', '$timeout','$log', '$parse', function($window, $timeout, $log, $parse) {

        /**
         * Initializes the HTML element as a Switchery switch.
         *
         * $timeout is in place as a workaround to work within angular-ui tabs.
         *
         * @param scope
         * @param elem
         * @param attrs
         * @param ngModel
         */

        function hex2rgba(hex,opacity){
            hex = hex.replace('#','');
            var r = parseInt(hex.substring(0,2), 16),
                g = parseInt(hex.substring(2,4), 16),
                b = parseInt(hex.substring(4,6), 16);

            return 'rgba('+r+','+g+','+b+','+opacity/100+')';
        }

        function linkSwitchery(scope, elem, attrs, ngModel) {
            if(!ngModel) return false;

            var options = {
                color: attrs.color ? hex2rgba(attrs.color, 50) : hex2rgba('#009688',50),
                jackColor: attrs.color ? hex2rgba(attrs.color, 100) : hex2rgba('#009688',100),
                secondaryColor: attrs.secondaryColor ? hex2rgba(attrs.secondaryColor, 50) : 'rgba(0, 0, 0,0.26)',
                jackSecondaryColor: attrs.secondaryColor ? hex2rgba(attrs.secondaryColor, 100) : '#fafafa',
                className: attrs.class
            };

            var switcher;
            var previousDisabledValue;
            // Watch for attribute changes to recreate the switch if the 'disabled' attribute changes
            attrs.$observe('disabled', function(value) {
                if (value == undefined || value == previousDisabledValue) {
                    return;
                } else {
                    previousDisabledValue = value;
                }
                initializeSwitch();
            });

            function initializeSwitch() {
                $timeout(function() {
                    // Remove any old switcher
                    if (switcher) {
                        angular.element(switcher.switcher).remove();
                    }
                    // (re)create switcher to reflect latest state of the checkbox element
                    switcher = new $window.Switchery(elem[0], options);
                    var element = switcher.element;
                    element.checked = scope.initValue;
                    switcher.setPosition(false);
                    element.addEventListener('change',function(evt) {
                        scope.$apply(function() {
                            ngModel.$setViewValue(element.checked);
                        })
                    })
                }, 0);
            }
            initializeSwitch();
        }

        return {
            require: 'ngModel',
            restrict: 'AE',
            scope : {
                initValue : '=ngModel'
            },
            link: linkSwitchery
        }
    }]);