$(function() {
    // ckeditor
    altair_wysiwyg._ckeditor();
    // tinymce
    altair_wysiwyg._tinymce();
});

// wysiwyg editors
altair_wysiwyg = {
    _ckeditor: function() {
        var $ckEditor = $('#wysiwyg_ckeditor');
        if($ckEditor.length) {
            $ckEditor
                .ckeditor(function() {
                    /* Callback function code. */
                }, {
                    customConfig: '../../assets/js/custom/ckeditor_config.js'
                });
        }
    },
    _tinymce: function() {
        var $tinymce = '#wysiwyg_tinymce';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: 'assets/skins/tinymce/material_design',
                selector: "#wysiwyg_tinymce",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        }
    }
};