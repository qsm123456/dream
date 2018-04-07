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
    line-height: 1rem;
    position: relative;
    z-index: 1;
  }
.head{
  height: 1rem;
  position: fixed;
  top: 0;
  width: 100%;
  color: #fff;
  text-align: center;
}
.head span{
  display: block;
  margin: 0;
  margin-left: .05rem;
  position: absolute;
  top: 0;
  left: 0;
}
  .title span {
    width: 100%;
  }

</style>
