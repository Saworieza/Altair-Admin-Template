angular
    .module('directive.ionSlider', [])
    .directive('ionSlider', [
        '$document',
        function($document) {
            "use strict";
            return {
                restrict: 'EA',
                require: 'ngModel',
                scope: true,
                template: '<input type="text" />',
                link: function(scope, element, attrs, ngModel) {

                    var input = element.find('input'),
                        isDouble = attrs.type === 'double';

                    input.ionRangeSlider({
                        grid: attrs.grid,
                        hide_min_max: attrs.hide_min_max,
                        values: scope.$eval(attrs.values),
                        min_prefix: attrs.minPrefix,
                        max_prefix: attrs.maxPrefix,
                        min_postfix: attrs.minPostfix,
                        max_postfix: attrs.maxPostfix,
                        min: +attrs.min,
                        max: +attrs.max,
                        type: attrs.type,
                        prefix: attrs.prefix,
                        from_min: attrs.fromMin,
                        from_max: attrs.fromMax,
                        from_shadow: attrs.fromShadow,
                        to_min: attrs.toMin,
                        to_max: attrs.toMax,
                        to_shadow: attrs.toShadow,
                        grid_num: attrs.gridNum,
                        force_edges: attrs.forceEdges
                    });

                    var slider = input.data("ionRangeSlider");

                    ngModel.$render = function() {
                        var options;
                        if(isDouble) {
                            options = ngModel.$viewValue || {};
                        } else {
                            options = {
                                from: ngModel.$viewValue
                            };
                        }
                        slider.update(options);
                    };
                    input.on('change', function() {
                        ngModel.$setViewValue(isDouble ? {from: input.data("from"), to: input.data("to")} : input.data("from"));
                    });
                    element.on('mousedown', function() {
                        if(!scope.$eval(attrs.ngDisabled)) {
                            $document.one('mouseup', function() {
                                scope.$emit('sliderSlideFinished');
                            });
                        }
                    });
                    scope.$watch(attrs.ngDisabled, function(disabled) {
                        slider.update({
                            disable: disabled
                        });
                    });
                    scope.$on('$destroy', function() {
                        slider.destroy();
                    });
                }
            };
        }
    ]);