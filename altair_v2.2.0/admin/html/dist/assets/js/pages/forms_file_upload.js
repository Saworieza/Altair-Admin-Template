$(function() {
    // file upload
    altair_form_file_upload.init();
});


altair_form_file_upload = {
    init: function() {

        var progressbar = $("#file_upload-progressbar"),
            bar         = progressbar.find('.uk-progress-bar'),
            settings    = {
                action: '/', // Target url for the upload
                allow : '*.(jpg|jpeg|gif|png)', // File filter
                loadstart: function() {
                    bar.css("width", "0%").text("0%");
                    progressbar.removeClass("uk-hidden");
                },
                progress: function(percent) {
                    percent = Math.ceil(percent);
                    bar.css("width", percent+"%").text(percent+"%");
                },
                allcomplete: function(response,xhr) {
                    bar.css("width", "100%").text("100%");
                    setTimeout(function(){
                        progressbar.addClass("uk-hidden");
                    }, 250);
                    setTimeout(function() {
                        UIkit.notify({
                            message: "Upload Completed",
                            pos: 'top-right'
                        });
                    },280);
                }
            };

        var select = UIkit.uploadSelect($("#file_upload-select"), settings),
            drop   = UIkit.uploadDrop($("#file_upload-drop"), settings);
    }
};