$(function() {
    // code editor
    altair_code_editor.init();
});

var $codeEditor =  $("#codeEditor"),
    file_list_class = '.file_list';

altair_code_editor = {
    init: function() {
        altair_code_editor.copy_list_sidebar();

        altair_code_editor.init_code_editor();
        altair_code_editor.distraction_free_mode();
        altair_code_editor.change_theme();
    },
    init_code_editor: function() {
        cEditor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
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
        });

        // open file from server and set content of Code Editor
        function loadFile(file,mode,callback) {
            // show preloader
            altair_helpers.content_preloader_show('regular',$('.md-card-single'));
            $codeEditor.next('.CodeMirror').velocity({
                opacity: 0
            }, {
                duration: 400,
                complete: function () {
                    $.ajax({
                        url : file,
                        dataType: "text",
                        success : function (data) {
                            if(mode == 'html') {
                                cEditor.setOption("mode","text/html");
                                cEditor.setOption("matchTags",{
                                    bothTags: true
                                });
                            }
                            if(mode == 'js') {
                                cEditor.setOption("mode","text/javascript");
                                cEditor.setOption("matchBrackets",true);
                            }
                            if(mode == 'php') {
                                cEditor.setOption("mode","application/x-httpd-php");
                                cEditor.setOption("matchTags",false);
                                cEditor.setOption("matchBrackets",true);
                            }
                            if(mode == 'json') {
                                cEditor.setOption("mode","application/json");
                            }
                            // set new content
                            cEditor.setValue(data);
                            // callback
                            if (typeof callback == "function") callback();
                            setTimeout(function() {
                                // hide preloader
                                altair_helpers.content_preloader_hide();
                            },280);
                            // show code editor
                            $codeEditor.next('.CodeMirror').velocity('reverse');
                        }
                    });
                }
            });

        }

        $(file_list_class).find('a').on('click',function(e) {
            e.preventDefault();


            var $this = $(this),
                this_file = $this.attr('data-editor-file'),
                this_mode = $this.attr('data-editor-mode');

            // check if file is already loaded into code editor
            if($this.closest('li').hasClass('md-list-item-active')) {
                return;
            }

            var callback = function() {
                $this.closest('li')
                    .addClass('md-list-item-active')
                    .siblings('li').removeClass('md-list-item-active');
            };

            loadFile('data/codemirror/file_content.php?file='+this_file,this_mode,callback);

        });

    },
    distraction_free_mode: function() {
        $codeEditor
            .next('.CodeMirror').append('<button class="uk-modal-close uk-close uk-close-alt" type="button" id="code_editor_close"></button>')
            // close fullscreen
            .on('click','#code_editor_close',function() {
                cEditor.setOption("fullScreen", false);
            });

        $('#code_editor_fullscreen').on('click', function(e) {
            e.preventDefault();
            cEditor.setOption("fullScreen", true);
        });
    },
    change_theme: function() {
        // select theme
        function selectTheme(theme) {
            cEditor.setOption("theme", theme);
        }

        $("#code_editor_theme").find('a').click(function(e) {
            e.preventDefault();
            var thisTheme = $(this).attr('data-editor-theme');

            selectTheme(thisTheme);

            $(this)
                .closest('li').addClass('uk-active')
                .siblings('li').removeClass('uk-active');

        });
    },
    copy_list_sidebar: function() {
        // hide secondary sidebar toggle for large screens
        $sidebar_secondary_toggle.addClass('uk-hidden-large');

        var file_list_sidebar = $(file_list_class).clone();

        file_list_sidebar.attr('id','file_list_sidebar');

        $sidebar_secondary
            .find('.sidebar_secondary_wrapper').html(file_list_sidebar);

    }
};
