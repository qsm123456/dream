<template>
  <ul class="footer" :style="{backgroundColor:bgColor}">
    <li>
      <router-link to="/" @click.native="$emit('change', 'movie')">电影</router-link>
    </li>
    <li>
      <router-link to="/newsong" @click.native="$emit('change', 'music')">音乐</router-link>
    </li>
    <li>
      <router-link to="/ticket_s" @click.native="$emit('change', 'ticket')">车票查询</router-link>
    </li>
    <li>
      <router-link to="/photo" @click.native="$emit('change', 'photo')">图片</router-link>
    </li>
    </ul>
</template>

<script>

  export default{
    props: ['bgColor'],
  }
</script>

<style scoped>
  .footer{
    height: 1rem;
    /*background-color: rgb(33, 150, 243);*/
    position: fixed;
    bottom: 0;
    width: 100%;
    display: flex;
    line-height: 1rem;
  }
  .footer li{
    flex-grow: 1;
    text-align: center;
    color: #ccc;
  }
  .footer li a{
    color: #cccccc;
  }
  .footer li a.router-link-exact-active{
    color: #fff;
    outline: none;
  }
</style>
