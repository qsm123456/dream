<template>
  <div id="app">
    <!--<img src="./assets/logo.png">-->
    <!--<div>-->
    <!--<button>首页</button>-->
    <!--<button>后退</button>-->
    <!--<button>前进</button>-->
    <!--</div>-->
    <div>
      <!--<router-link to='/'>首页</router-link>-->
      <!--<router-link to='/text'>测试</router-link>-->
      <!--<router-link :to="{name:'text1',params:{name:'qsm',age:'20',school:'nd'}}">text1</router-link>-->
      <!--<router-link to='/text/text2'>text2</router-link>-->
      <!--<router-link to='/url/5/zs'>Url</router-link>-->
      <!--<router-link to="/home">重定向1</router-link>-->
      <!--<router-link to="/home2/9/zhangs">重定向2</router-link>-->
      <!--<router-link to="/abc">alias</router-link>-->
      <!--<router-link to="/count">计算器</router-link>-->
      <!--<router-link to="/">复选</router-link>-->
    </div>
    <transition name="fade" mode="out-in">
      <router-view/>
    </transition>

  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
    #app {
           font-family: 'Avenir', Helvetica, Arial, sans-serif;
           -webkit-font-smoothing: antialiased;
           -moz-osx-font-smoothing: grayscale;
           text-align: center;
           color: #2c3e50;
           margin-top: 60px;
         }
    .fade-enter{
      opacity: 0;
    }
    .fade-enter-to{
      opacity: 1;
    }
    .fade-enter-active{
      transition: opacity 1s;
    }

    .fade-leave{
      opacity: 1;
    }
    .fade-leave-to{
      opacity: 0;
    }
    .fade-leave-active{
      transition: opacity 1s;
    }
</style>
