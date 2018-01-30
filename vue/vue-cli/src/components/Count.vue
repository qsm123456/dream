<template>
  <div>
    <h2>这是一个计算器</h2>
    <h2>{{$store.state.count}}</h2>
    <h2>{{ count }}</h2>
    <button @click="$store.commit('add',5)">+1</button>
    <button @click='reduce'>-1</button>
  </div>
</template>


<script>
  import store from '@/vuex/store'
  import {mapState,mapMutations,mapGetters} from 'vuex'
  export default {
    store,
    data(){
        return {};
    },
//    computed:{
      /*count(){
          return this.$store.state.count;
      }*/

//
    /*computed:mapState({
      count:state=>state.count
    })*/
    computed:mapState(['count']),
    methods:mapMutations(['reduce'])

    }
</script>
