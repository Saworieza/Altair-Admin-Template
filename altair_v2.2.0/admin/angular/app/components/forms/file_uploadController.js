angular
    .module('altairApp')
    .controller('file_uploadCtrl', [
        '$scope',
        '$timeout',
        function ($scope,$timeout) {

            var progressbar = $("#file_upload-progressbar"),
                bar         = progressbar.find('.uk-progress-bar'),
                settings    = {

                    action: '/', // upload url

                    allow : '*.(jpg|jpeg|gif|png)', // allow only images

                    loadstart: function() {
                        bar.css("width", "0%").text("0%");
                        progressbar.removeClass("uk-hidden");
                    },

                    progress: function(percent) {
                        percent = Math.ceil(percent);
                        bar.css("width", percent+"%").text(percent+"%");
                    },

                    allcomplete: function(response) {

                        bar.css("width", "100%").text("100%");

                        setTimeout(function(){
                            progressbar.addClass("uk-hidden");
                        }, 250);

                        alert("Upload Completed")
                    }
                };

            var select = UIkit.uploadSelect($("#file_upload-select"), settings),
                drop   = UIkit.uploadDrop($("#file_upload-drop"), settings);

        }
    ]);