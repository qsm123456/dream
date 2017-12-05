/**
 * Created by ASUS1 on 2017/12/4.
 */
require(['jquery','dialog'],function ($,dialog) {
    $('#open').on('click',function () {
        var settings = {
            width:300,
            height:200,
            title:'注册',
            content:'table.html'
        };
        dialog.open(settings);
    })
});