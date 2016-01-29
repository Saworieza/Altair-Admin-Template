/*
* Usage
*
* <prism-highlight class="language-css">
*      body {
*         color: red;
*      }
* </prism-highlight>
*
* the files prismjs and prism css must be included in HTML, use class "language-XXX" to specify language
*/
;'use strict';
angular
    .module('ngPrism', [])
    .directive('prismHighlight', function ($timeout) {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
                element.ready(function() {
                    $timeout(function() {
                        Prism.highlightElement(element[0]);
                    })
                });
            }
        }
    });
