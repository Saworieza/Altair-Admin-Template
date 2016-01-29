angular
    .module('altairApp')
    .controller('helpCtrl', [
        '$rootScope',
        '$scope',
        '$timeout',
        'help_data',
        'variables',
        function ($rootScope,$scope,$timeout,help_data,variables) {

            $rootScope.page_full_height = true;
            $rootScope.headerDoubleHeightActive = true;

            $scope.help_data = help_data;

            var $toggleAll_btn = $('#toggleAll'),
                $help_accordion = $('.help_accordion');

            $scope.$on('onLastRepeat', function (scope, element, attrs) {
                UIkit.accordion($help_accordion, {
                    collapse: false,
                    showfirst: false
                });
            });

            $scope.toggleAll = function($event) {
                $event.preventDefault();
                $toggleAll_btn.velocity("transition.expandOut", {
                    duration: 280,
                    easing: variables.easing_swiftOut,
                    begin: function() {
                        if(!$help_accordion.hasClass('all_expanded')) {
                            $help_accordion.addClass('all_expanded').find('.uk-accordion-title').not('.uk-active').each(function() {
                                var $this = $(this);
                                $timeout(function() {
                                    $this.click()
                                },10);
                            });
                        } else {
                            $help_accordion.removeClass('all_expanded').find('.uk-accordion-title.uk-active').each(function() {
                                var $this = $(this);
                                $timeout(function() {
                                    $this.click()
                                },10);
                            });
                        }
                    },
                    complete: function() {
                        $toggleAll_btn.velocity("transition.expandIn", {
                            duration: 280,
                            easing: variables.easing_swiftOut,
                            begin: function() {
                                if(!$help_accordion.hasClass('all_expanded')) {
                                    $toggleAll_btn.html('&#xe8f2;');
                                } else {
                                    $toggleAll_btn.html('&#xe8ee;');
                                }
                            }
                        })
                    }
                });
            }

        }
    ]);