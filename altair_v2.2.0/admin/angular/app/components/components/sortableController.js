angular
    .module('altairApp',[angularDragula(angular)])
    .controller('sortableCtrl', [
        '$scope',
        '$rootScope',
        'utils',
        function ($scope,$rootScope,utils) {

            var imgRetina = utils.isHighDensity() ? '@2x' : '' ;

            $scope.dragulaItems = [
                {
                    background_image: 'assets/img/gallery/Image01'+imgRetina+'.jpg',
                    description: 'Quia cumque excepturi mollitia ipsa officiis dolore odit aspernatur natus officiis.'
                },
                {
                    background_image: 'assets/img/gallery/Image02'+imgRetina+'.jpg',
                    description: 'Est quam perspiciatis debitis consequatur vero repudiandae alias quod perspiciatis maiores et autem nostrum officiis velit.'
                },
                {
                    background_image: 'assets/img/gallery/Image03'+imgRetina+'.jpg',
                    description: 'Ducimus velit enim aut modi dolorum in veniam ea eos porro accusamus ad sint pariatur et omnis.'
                },
                {
                    background_image: 'assets/img/gallery/Image04'+imgRetina+'.jpg',
                    description: 'Nihil officia et est nisi consequuntur ut voluptates earum temporibus omnis excepturi doloribus nihil vero.'
                },
                {
                    background_image: 'assets/img/gallery/Image05'+imgRetina+'.jpg',
                    description: 'Expedita aspernatur enim enim ullam provident unde nulla qui quae sint eius id sit possimus rerum.'
                },
                {
                    background_image: 'assets/img/gallery/Image06'+imgRetina+'.jpg',
                    description: 'In accusamus dicta qui sit aliquam perferendis quam facilis eum fuga delectus et.'
                },
                {
                    background_image: 'assets/img/gallery/Image07'+imgRetina+'.jpg',
                    description: 'Dolor dolorem fugiat veritatis minima enim eligendi velit aspernatur molestiae deleniti magni labore.'
                },
                {
                    background_image: 'assets/img/gallery/Image08'+imgRetina+'.jpg',
                    description: 'Impedit vel consequuntur dolorem facilis commodi suscipit impedit aut error et.'
                }
            ];

        }
    ]);