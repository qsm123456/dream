<template>
  <div class="head" :style='{backgroundColor:bgColor}'>
        <span @click="$emit('home')" :style='{backgroundColor:bgColor}'>
          <router-link to="/" class="idx">首页</router-link>
        </span>
        <h2 class="title">
          <slot name="title">默认</slot>
        </h2>
    </div>
</template>


<script>
  export default{
    props: ['bgColor'],
  }
</script>

<style scoped>
  .idx {
    outline: none;
    font-size: 0.3rem;
    color: white;
  }
.head{
  height: 1rem;
  position: fixed;
  top: 0;
  /*background-color: rgb(33, 150, 243);*/
  width: 100%;
  color: #fff;
  /*opacity: .5;*/
  text-align: center;
}
.head span{
  display: block;
  /*float: left;*/
  margin: 0;
  line-height: 1rem;
  /*text-indent: .1rem;*/
  margin-left: .05rem;
  position: absolute;
  top: 0;
  left: 0;
}
.title{
  line-height: 1rem;
}

  .title span {
    width: 100%;
  }
</style>
