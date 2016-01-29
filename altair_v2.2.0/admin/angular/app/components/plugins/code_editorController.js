angular
    .module('altairApp')
    .controller('code_editorCtrl', [
        '$scope',
        '$rootScope',
        'preloaders',
        '$http',
        '$timeout',
        function ($scope,$rootScope,preloaders,$http,$timeout) {

            $rootScope.page_full_height = true;
            $rootScope.headerDoubleHeightActive = true;

            $scope.codemirror_data = "Start typing or click on the file to open it.";

            $scope.file_list = [
                {
                    id: 1,
                    name: "Email template",
                    file: "email_template.html",
                    mode: "html"
                },
                {
                    id: 2,
                    name: "Core functions",
                    file: "main.js",
                    mode: "js"
                },
                {
                    id: 3,
                    name: "Main Data",
                    file: "data.json",
                    mode: "json"
                },
                {
                    id: 5,
                    name: "File not found",
                    file: "some_file.txt"
                }
            ];

            $scope.editor_themes = [
                "default", "3024-day", "3024-night", "abcdef", "ambiance", "base16-dark", "base16-light", "blackboard", "cobalt", "colorforth", "dracula", "eclipse", "elegant", "erlang-dark", "icecoder", "lesser-dark", "liquibyte", "material", "mbo", "mdn-like", "midnight", "monokai", "neat", "neo", "night", "paraiso-dark", "paraiso-light", "pastel-on-dark", "rubyblue", "seti", "solarized dark", "solarized light", "the-matrix", "tomorrow-night-bright", "tomorrow-night-eighties", "ttcn", "twilight", "vibrant-ink", "xq-dark", "xq-light", "yeti", "zenburn"
            ];

            $scope.code_editor_options = {
                lineNumbers: true,
                mode: 'text/html',
                matchTags: {
                    bothTags: true
                },
                extraKeys: {
                    "F11": function(cm) {
                        cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                    },
                    "Esc": function(cm) {
                        if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                    }
                }
            };

            $scope.codemirrorLoaded = function(_editor){
                var code_editor = $('#code_editor');

                // full screen
                code_editor
                    .children('.CodeMirror')
                    .append('<button class="uk-modal-close uk-close uk-close-alt" type="button" id="code_editor_close"></button>');
                // close fullscreen
                $('#code_editor_close').click(function(e) {
                    e.preventDefault();
                    _editor.setOption("fullScreen", false);
                });
                $scope.openFullscreen = function($event) {
                    $event.preventDefault();
                    _editor.setOption("fullScreen", true);
                };

                // load file
                $scope.loadFile = function($event,file) {
                    $event.preventDefault();

                    var $this = $($event.currentTarget);

                    // check if file is already loaded into code editor
                    if($this.closest('li').hasClass('md-list-item-active')) {
                        return;
                    }

                    // show preloader
                    $rootScope.content_preloader_show('regular',$('.md-card-single'));

                    code_editor.children('.CodeMirror').velocity({ opacity: 0 }, {
                        duration: 400,
                        complete: function () {
                            $http
                                .get("data/codemirror/"+file.file)
                                .then(
                                function(res) {
                                    // set mode
                                    if(file.mode == 'html') {
                                        _editor.setOption("mode","text/html");
                                        _editor.setOption("matchTags",{
                                            bothTags: true
                                        });
                                    }
                                    if(file.mode == 'js') {
                                        _editor.setOption("mode","text/javascript");
                                        _editor.setOption("matchBrackets",true);
                                    }
                                    if(file.mode == 'json') {
                                        _editor.setOption("mode","application/json");
                                    }

                                    // set new content
                                    if(typeof res.data === "string") {
                                        $scope.codemirror_data = res.data;
                                    } else {
                                        $scope.codemirror_data = JSON.stringify(res.data, null, 2);
                                    }

                                    // add active class to clicked item
                                    $this
                                        .closest('li').addClass('md-list-item-active')
                                        .siblings('li').removeClass('md-list-item-active');

                                    $timeout(function() {
                                        // hide preloader
                                        $rootScope.content_preloader_hide();
                                    },280);

                                    // show code editor
                                    code_editor.children('.CodeMirror').velocity('reverse');
                                },
                                //error function
                                function(err) {
                                    if(err.status == "404") {
                                        $scope.codemirror_data = "File not found!";

                                        $this
                                            .closest('li')
                                            .siblings('li').removeClass('md-list-item-active');

                                        $timeout(function() {
                                            // hide preloader
                                            $rootScope.content_preloader_hide();
                                        },280);
                                        // show code editor
                                        code_editor.children('.CodeMirror').velocity('reverse');
                                    }
                                }
                            );
                        }
                    });

                };

                // change theme
                $scope.changeTheme = function($event,theme) {
                    $event.preventDefault();
                    _editor.setOption("theme", theme)
                }
            };

        }
    ]);


