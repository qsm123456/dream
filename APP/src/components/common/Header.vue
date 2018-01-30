<template>
    <div class="head" :style='{background:bgcolor}'>
        <span :style='{background:bgcolor}'>首页</span>
        <h2 class="title">
          <slot name="title">默认</slot>
        </h2>
    </div>
</template>

<script>
  export default{
      props:['bgcolor']
  }
</script>


<style scoped>
.head{
  height: 1rem;
  position: fixed;
  /*background-color: rgb(33, 150, 243);*/
  width: 100%;
  color: white;
  /*opacity: .5;*/
}
.head span{
  display: block;
  float: left;
  margin: 0;
  line-height: 1rem;
  /*text-indent: .1rem;*/
  margin-left: .05rem;
}
.title{
  line-height: 1rem;

}
</style>
