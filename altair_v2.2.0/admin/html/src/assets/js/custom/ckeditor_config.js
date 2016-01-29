/*
*  Altair Admin
*  Configuration file for ckeditor (wysiwyg editor)
*/

CKEDITOR.editorConfig = function( config ) {
    // Define changes to default configuration here.
    // For complete reference see:
    // http://docs.ckeditor.com/#!/api/CKEDITOR.config

    config.skin = 'material_design,../../assets/skins/ckeditor/material_design/';

    // The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        { name: 'clipboard', groups: [ 'clipboard'] },
        { name: 'document', groups: [ 'undo', 'mode', 'document', 'doctools', 'tools', 'about' ] },
        { name: 'others', groups: [ 'others' ] },
        '/',
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
        { name: 'insert', groups: [ 'insert' ] },
        { name: 'links', groups: [ 'links' ] },
        { name: 'forms', groups: [ 'forms' ] }
    ];
    config.removeButtons = 'Scayt';

    config.extraPlugins = 'autogrow,colorbutton,colordialog';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;pre';

    config.height = 300;

    config.autoGrow_minHeight = 300;
    config.autoGrow_maxHeight = 520;
    config.removePlugins = 'resize';

};
