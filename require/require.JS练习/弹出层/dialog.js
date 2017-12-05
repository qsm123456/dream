/**
 * Created by ASUS1 on 2017/12/3.
 */
define(['jquery'],function ($) {
    return{
        open:function (settings) {
            var defaultSettings = {
                width: 500,
                height: 400,
                title: '弹出层',
                content: ''
            };
            $.extend(defaultSettings, settings);
            console.log(defaultSettings);
            var html ='<div class="container">'
                +'<div class="shadow">'
                +'</div>'
                +'<div class="box">'
                +'<div class="title">'
                +'<div class="item">'+defaultSettings.title+'</div>'
                +'<div class="close">[X]</div>'
                +'</div>'
                +'<div class="content"></div>'
                +'</div>'
                +'</div>';
            $(document.body).append(html);
            $('.box').css({
                width:defaultSettings.width,
                height:defaultSettings.height
            });
            if(defaultSettings.content.indexOf('.html')!=-1){
                $('.content').load(defaultSettings.content)
            }else{
                $('.content').html(defaultSettings.content)
            }
            $('.close').on('click',function () {
                $(this).closest('.container').remove();
            })

        }
    }
})




