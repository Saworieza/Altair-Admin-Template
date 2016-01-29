angular
    .module('altairApp')
    .controller('notesCtrl', [
        '$rootScope',
        '$scope',
        '$window',
        'notes_data',
        function ($rootScope,$scope,$window,notes_data) {

            $rootScope.page_full_height = true;
            $rootScope.headerDoubleHeightActive = true;

            // get note data
            $scope.notes_data = notes_data;

            // hide note form
            $scope.noteActive = false;

            // open a note
            $scope.openNote = function($event,$parentIndex,$index,note) {
                $event.preventDefault();

                $scope.noteActive = true;

                $('.notes_list').children('li').removeClass('md-list-item-active');

                $($event.currentTarget).parent('li').addClass('md-list-item-active');

                $scope.note_form = {
                    parentIndex: $parentIndex,
                    index: $index,
                    id: note.id,
                    title: note.title,
                    content: note.content
                };

                angular.element($window).resize();
            };

            // create a note
            $scope.newNote = function($event,note) {
                $event.preventDefault();
                $scope.noteActive = true;

                $scope.note_form = {
                    id: '123',
                    title: '',
                    content: ''
                };

                angular.element($window).resize();
            };

            // save note
            $scope.saveNote = function($event) {
                $event.preventDefault();

                // get variables from active note
                var parentIndex = $scope.note_form.parentIndex,
                    index = $scope.note_form.index,
                    title = $scope.note_form.title;
                    content = $scope.note_form.content;

                if(parentIndex && index) {
                    // update main data
                    $scope.notes_data[parentIndex].notes[index] = {
                        title: title,
                        content: content,
                        date: moment().format("ddd DD.MM.YYYY")
                    };
                }

                var data = JSON.stringify($scope.note_form, null, 2);
                UIkit.modal.alert('<p>Note data:</p><pre>' + data + '</pre>');

                angular.element($window).resize();
            }

        }
    ]);