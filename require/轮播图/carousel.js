/**
 * Created by ASUS1 on 2017/12/9.
 */
requirejs.config({
   paths:{
       jquery:'jquery-3.2.1'
   }
});
define(['jquery'],function ($) {
   // /*轮播图类*/
    function Carousel() {
        this.$container=$('<div class="cars-container"></div>');
        this.$img=$('<div class=""></div>');
        this.$ul=$('<ul class="tab"></ul>>');
        this.$arrows=$('<div class="arrows"></div>');
        this.$pre=$('<span>&lt;</span>');
        this.$next=$('<span>&gt</span>');
    }
});