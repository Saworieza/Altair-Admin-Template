angular
    .module('altairApp')
    .controller('contact_listCtrl', [
        '$rootScope',
        '$scope',
        '$window',
        'contact_list',
        function ($rootScope,$scope,$window,contact_list) {

            $scope.contact_list = contact_list;

            // get all companies from array
            var all_companies = contact_list.map(function(a) {
                return a.company;
            });

            // remove duplicate companies
            function eliminateDuplicates(arr) {
                var i,
                    len=arr.length,
                    out=[],
                    obj={};

                for (i=0;i<len;i++) {
                    obj[arr[i]]=0;
                }
                for (i in obj) {
                    out.push(i);
                }
                return out;
            }

            $scope.contact_list_companies = eliminateDuplicates(all_companies);

            $scope.$on('onLastRepeat', function (scope, element, attrs) {
                $scope.$apply(function () {
                    UIkit.grid($('#contact_list'),{
                        controls: '#contact_list_filter',
                        gutter: 20
                    });
                });
            })

        }
    ]);