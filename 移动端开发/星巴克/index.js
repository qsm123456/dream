/**
 * Created by ASUS1 on 2018/1/16.
 */

let oMenuLogo = document.querySelector('#menu_logo');
let oBig = document.querySelector('#big');
let oSList = document.querySelector('#s_list');
let aSpan = oSList.querySelectorAll('header .chos');
let bflag = true;
oMenuLogo.onclick = function (){
    $('#sec_menu').css('display','block');
    $('#big').css('display','block');
};
oBig.onclick = function () {
    $('#sec_menu').css('display','none');
    $('#big').css('display','none');
};

for(var i =0;i<aSpan[i].length;i++){
    aSpan[i].index = i;
        $(this).onclick = function () {
            console.log(123);
         if(bflag == true){//true代表关上要打开
             aSpan[i].siblings('ul').css('display','block');
         }else{
             aSpan[i].siblings('ul').css('display','none');
         }
             bflag =! bflag;
        };

    }

