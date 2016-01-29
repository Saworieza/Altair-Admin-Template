angular
    .module('altairApp')
    .controller('snippetsCtrl', [
        '$rootScope',
        '$scope',
        'snippets_data',
        function ($rootScope,$scope,snippets_data) {

            $rootScope.toBarActive = true;

            $scope.showSnippet = function($event,snippet) {
                UIkit.modal.blockUI(
                    // snippet title
                    '<div class="uk-modal-header">'
                    +   '<h3 class="uk-modal-title">' + snippet.title + '</h3>'
                    + '</div>'
                    // snipped code
                    + $event.currentTarget.innerHTML
                    // hide modal
                    + '<div class="uk-modal-footer uk-text-right">'
                    + '<button type="button" class="md-btn md-btn-flat md-btn-flat-primary uk-modal-close">Close</button>'
                    + '</div>'
                );
            };

            $scope.languages = [
                {
                    id: 'php',
                    name: 'PHP'
                },
                {
                    id: 'css',
                    name: 'CSS'
                },
                {
                    id: 'javascript',
                    name: 'jQuery'
                }
            ];

            $scope.snippets = snippets_data;

            $scope.newTask_languages_options = [
                {
                    name: 'php',
                    title: 'PHP'
                },
                {
                    name: 'css',
                    title: 'CSS'
                },
                {
                    name: 'javascript',
                    title: 'jQuery'
                }
            ];

            $scope.newTask_languages_config = {
                create:false,
                maxItems: 1,
                valueField: 'name',
                labelField: 'title',
                placeholder: 'Select Language...'
            }

        }
    ]);