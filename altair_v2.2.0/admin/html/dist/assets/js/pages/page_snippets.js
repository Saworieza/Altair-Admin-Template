$(function() {
    // snippets init functions
    altair_snippets.init();
});

altair_snippets = {
    init: function () {

        var $snippets = $('#snippets'),
            snippet_modal = $('#snippet_new');

        // show code on content click
        $snippets
            .find('.md-card-content')
            .css({ 'cursor': 'pointer' })
            .on('click',function() {
                UIkit.modal.blockUI(
                    // snippet title
                    '<div class="uk-modal-header">'
                    +   '<h3 class="uk-modal-title">' + $(this).parent('.md-card').attr('data-snippet-title') + '</h3>'
                    + '</div>'

                    // snipped code
                    + $(this).html()

                    // hide modal
                    + '<div class="uk-modal-footer uk-text-right">'
                    + '<button type="button" class="md-btn md-btn-flat md-btn-flat-primary uk-modal-close">Close</button>'
                    + '</div>'
                );
            });

        // html editor
        var snippet_CodeMirror = $("#snippet_content").data("htmleditor").editor;

        // save snippet
        $('#snippet_new_save').on('click',function() {

            snippet_CodeMirror.save();
            var language = $("#snippet_language").val(),
                title = $("#snippet_title").val(),
                content = snippet_CodeMirror.getValue();

            // close main modal
            snippet_modal.find('.uk-modal-close').click();

            // uncomment code bellow to save snippet to json
            UIkit.modal.confirm('Do you want to save this snippet: <strong>"' + title + '"</strong>?', function(){
                UIkit.modal.alert("Snipped saved!");
                // uncoment following code to activate snippets saving
                /*$.ajax({
                    type: "POST",
                    url: "./data/save_snippet.php",
                    data: {
                        language: language,
                        title: title,
                        content: content
                    },
                    dataType: 'text',
                    success: function(){
                        // clear fields
                        $("#snippet_language,#snippet_title").val('');
                        snippet_CodeMirror.setValue('');
                        // show message
                        UIkit.modal.alert("Snipped saved!");
                    }
                });
                */
            });


        });

        // refresh htmleditor on modal show
        snippet_modal.on({
            'show.uk.modal': function(){
                $("#snippet_title").focus();
                snippet_CodeMirror.refresh();
            }
        });

    }
};