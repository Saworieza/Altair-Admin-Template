angular
    .module('altairApp')
    .controller('tinymceCtrl', [
        '$scope',
        function ($scope) {

            $scope.tinymce_content =
                '<img alt="" src="assets/img/gallery/Image01.jpg" style="float:left; height:173px; margin-right:16px; margin-bottom: 16px; width:260px" />'+
                '<h1>Header</h1>'+
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequuntur deleniti ducimus, eos fugit, mollitia neque praesentium quia quisquam quos sapiente voluptatem voluptatibus voluptatum. Assumenda consectetur deleniti doloremque fuga harum illum molestiae nisi possimus quidem vero. A accusantium alias aliquam animi cum doloremque eos est facilis illo, illum inventore ipsam itaque laboriosam maiores modi mollitia necessitatibus nemo non omnis perferendis quam quia, repellendus rerum vel veritatis voluptas voluptate? Aliquid asperiores at atque autem beatae consequatur culpa delectus eaque earum error et fugiat incidunt laborum libero molestias natus nobis odit optio, perspiciatis possimus quas saepe sapiente sed sint sit temporibus vel voluptatem. Adipisci alias assumenda dolorum eligendi enim, facilis ipsum iusto perferendis quod ratione repellat reprehenderit suscipit voluptatem. Cumque debitis eum facere facilis fugiat quo repellat sed veniam voluptas voluptate? Adipisci aliquid asperiores culpa laboriosam sint unde velit veritatis vero, voluptatibus? Accusantium aperiam aspernatur assumenda at consectetur consequuntur cupiditate dicta ducimus earum ex exercitationem explicabo fugit id illo inventore iste magnam minima molestiae mollitia nam nihil nobis officiis omnis perspiciatis porro praesentium provident quibusdam quidem quo ratione reiciendis sed sunt tempora tempore ullam, ut veritatis! Ab, aliquid asperiores cum et impedit, labore obcaecati perferendis quae, quas recusandae sint suscipit vitae voluptatem.';

            $scope.tinymce_options = {
                skin_url: 'assets/skins/tinymce/material_design',
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            }

        }
    ]);