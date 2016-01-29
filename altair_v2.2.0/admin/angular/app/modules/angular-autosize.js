;'use strict';
angular
    .module('textarea-autosize', [])
    .directive('textareaAutosize', [
        '$timeout',
        function($timeout) {
            return {
                restrict: 'A',
                link: function(scope, elem, attrs) {
                    autosize($(elem));
                    $timeout(function() {
                        scope.$apply(function () {
                            autosize.update($(elem))
                        });
                    })
                }
            }
        }
    ]);