/* Calculate Scrollbar Width (http://chris-spittles.co.uk/jquery-calculate-scrollbar-width/) */
;
function scrollbarWidth() {
    var a = jQuery('<div style="width: 100%; height:200px;">test</div>'), b = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append(a), c = a[0], a = b[0];
    jQuery("body").append(a);
    c = c.offsetWidth;
    b.css("overflow", "scroll");
    a = a.clientWidth;
    b.remove();
    return c - a
};