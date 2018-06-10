/**
 * Created by ASUS1 on 2018/1/30.
 */
import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

const state = {
  count:1,
};

const mutations = {
  add(state,num){
    state.count+=num;
  },
  reduce(state){
    state.count--;
  }
};
const getters = {
  count: function (state) {
    return state.count+=10;
  }
};

export default new Vuex.Store({
  state,
  mutations,
  getters,
})
