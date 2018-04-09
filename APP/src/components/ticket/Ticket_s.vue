<template>
  <form action="">
    <div id="start_">
      <label for="start">出发地：</label>
      <input type="text" id="start" v-model='search_one'>
    </div>
    <div id="end_">
      <label for="end">下车地：</label>
      <input type="text" id="end" v-model='search_two'>
    </div>
    <router-link :to="{name:'Ticket',params:{v1:search_one,v2:search_two}}">
      <div id="search">查询</div>
    </router-link>
  </form>

</template>


<script>
  export default{
    props: [''],
    data(){
      return {
        search_one: '',
        search_two: ''
      }
    }
  }
</script>

<style scoped>
  input {
    margin-top: 5px;
  }

  #search {
    color: black;
    font-size: 18px;
  }

  #search {
    display: block;
    height: 30px;
    width: 30px;
    background: blue;
  }
</style>
