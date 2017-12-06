/**
 * Created by ASUS1 on 2017/12/6.
 */
function tooltip(sel) {
    $('sel').hover(function () {
        this.temptitle=$(this).attr('title')!=undefined?$(this).attr('title'):$(this).text();
        $('<div id="tip"></div>').text(this.temptitle).appendTo(document.body);
    },function () {

    })
}