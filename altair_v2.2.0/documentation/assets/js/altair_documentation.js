/*
* Altair Admin Documentation
*/

$(function() {

    // table of content
    $("#documentation_toc").tocify({
        theme: 'none',
        scrollHistory: true,
        selectors: "h2, h3, h4"
    });

    // open links in new window
    $("a[href^='http']")
        .attr('target','_blank')
        .addClass('external_link');

    // internal links
    $(".internal_link").click(function(e) {
        e.preventDefault();
        var this_name = $(this).attr('data-el-name');
        $('html, body').animate({
            scrollTop: $("[name=" + this_name + "]").offset().top
        }, 280);
    });

});