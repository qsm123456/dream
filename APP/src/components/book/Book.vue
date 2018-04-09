<template>
  <ul>
    <li v-for="menu in List">
      <p class="sel">{{menu.name}}</p>
      <ul>
        <li v-for="p in menu.list" class="chos">
          <p class="select">{{p.name}}</p>
        </li>
      </ul>
    </li>
  </ul>
</template>

<script>
  import axios from 'axios'
  export default{
    data(){
      return {
        List: []
      }
    },
    created(){
      axios
        .get(API_PROXY + 'http://apis.juhe.cn/cook/category?parentid=&dtype=&key=472aa3ffcee092d82a83665b7c023de4')
        .then(res => {
          console.log(res);
          this.List = res.data.result;
        })
        .catch(res => {
          alert('出错了')
        })
    },
    methods: {}
  }

  $('.select').onclick = function () {
    this.css({'background': '#2b669a'})
    console.log(this);
  }


</script>


<style scoped>
  .chos {
    color: #2b669a;
  }

  .sel {
    font-size: 20px;
    border-bottom: 1px solid orange;
    border-top: 1px solid orange;
    text-align: center;
  }

</style>
