angular
    .module('altairApp', [ angularDragula(angular) ] )
    .controller('scrum_boardCtrl', [
        '$rootScope',
        '$scope',
        'tasks_list',
        'dragulaService',
        function ($rootScope,$scope,tasks_list,dragulaService) {

            $rootScope.page_full_height = true;

            $scope.task_groups = [
                {
                    id: 'todo',
                    name: 'To Do'
                },
                {
                    id: 'inAnalysis',
                    name: 'In analysis'
                },
                {
                    id: 'inProgress',
                    name: 'In progress'
                },
                {
                    id: 'done',
                    name: 'Done'
                }
            ];

            $scope.tasks_list = tasks_list;

            // task info
            $scope.taskInfo = function(task) {
                $scope.info = {
                    name: task.name,
                    title: task.title,
                    status: task.status,
                    description: task.description,
                    assignee: task.assignee
                }
            };

            // new task
            $scope.newTask = {
                name: 'Altair-245',
                assignee: [
                    { id: 1, title: 'Aleen Grant' },
                    { id: 2, title: 'Tyrese Koss' },
                    { id: 3, title: 'Chasity Green' },
                    { id: 4, title: 'Me' }
                ],
                group: [
                    { name: 'todo', title: 'To Do' },
                    { name: 'inAnalysis', title: 'In Analysis' },
                    { name: 'inProgress', title: 'In Progress' },
                    { name: 'done', title: 'Done' }
                ]
            };

            $scope.newTask_assignee =  $scope.newTask.assignee;
            $scope.newTask_assignee_config = {
                create:false,
                maxItems: 1,
                valueField: 'id',
                labelField: 'title',
                placeholder: 'Select Assignee...'
            };
            $scope.newTask_group =  $scope.newTask.group;
            $scope.newTask_group_config =  {
                create:false,
                maxItems: 1,
                valueField: 'name',
                labelField: 'title',
                placeholder: 'Select Group...'
            }
        }
    ]);