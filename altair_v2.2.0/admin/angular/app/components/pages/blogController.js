angular
    .module('altairApp')
    .controller('blogCtrl', [
        '$stateParams',
        '$scope',
        'utils',
        'blog_articles',
        function ($stateParams,$scope,utils,blog_articles) {

            $scope.blog_articles = blog_articles;

            $scope.article = utils.findByItemId($scope.blog_articles, $stateParams.articleId);

            $scope.getYTSrc = function(src) {
                return 'https://www.youtube.com/embed/' + src + '?rel=0';
            };

            $scope.getSoundCloudSrc = function(src) {
                return 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/' + src + '&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true';
            };

        }
    ]);