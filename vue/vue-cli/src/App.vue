<template>
  <div id="app">
    <img src="./assets/logo.png">
    <div>
      <button>首页</button>
      <button>后退</button>
      <button>前进</button>
    </div>
    <div>
    <router-link to='/'>首页</router-link>
    <router-link to='/text'>测试</router-link>
    <router-link :to="{name:'text1',params:{name:'qsm',age:'20'}}">text1</router-link>
    <router-link to='/text/text2'>text2</router-link>
    <router-link to='text/url/5/zs'>Url</router-link>
    <router-link to="/home">重定向1</router-link>
    <router-link to="/home/9/zhangs">重定向2</router-link>
    <router-link to="/abc">alias</router-link>
    </div>
    <router-view/>
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
</style>
