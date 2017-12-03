/**
 * Created by ASUS1 on 2017/12/3.
 */
// define(function () {
//     function isArray(arr) {
//         if(arr instanceof Array && arr.constructor == Array){
//             return true;
//         }else{
//             return false;
//         }
//     }
// return Array;
// });
define(function (arr) {
    function isArray(arr) {
        if(arr instanceof Array && arr.constructor == Array){//两种方法判断是不是数组
            return true
        }else{
            return false
        }
    }
    return isArray
});