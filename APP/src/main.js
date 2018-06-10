// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

import './assets/js/rem.js';
import './assets/css/reset.css';

import $ from 'jquery';

Vue.config.productionTip = false;
import VueTouch from 'vue-touch';
Vue.use(VueTouch,{name: 'v-touch'});


global.API_PROXY = 'https://bird.ioliu.cn/v2/?url=';

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
