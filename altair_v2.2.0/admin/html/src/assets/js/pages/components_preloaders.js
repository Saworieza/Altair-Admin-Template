/*
*  Altair Admin
*  @version v2.2.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  components_preloaders.js - components_preloaders.html
*/

$(function() {
    // show preloader
    $('#show_preloader_regular').click(function() {
        altair_helpers.content_preloader_show('regular');
        setTimeout(function() {
            altair_helpers.content_preloader_hide();
        },3000)
    });
    $('#show_preloader_md').click(function() {
        altair_helpers.content_preloader_show();
        setTimeout(function() {
            altair_helpers.content_preloader_hide();
        },3000)
    })
});