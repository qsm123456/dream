<template>
  <div id="all">
    <div id="title_contain">
      <div class="title" v-for="(val,index) in list" :key="index">{{ val }}
        <img src="../assets/cheng.png" alt="" @click="del(index)">
      </div>
      <img id='scale' @click='scale' src="../assets/scale.png" alt="">
    </div>
    <div id="contain" v-show='show'>
      <ul>
        <li>
          <input id='search' type="text" v-model='info' value="info" @keyup='search($event)' placeholder="搜索"
                 name="search">
        </li>
        <li v-for="v in arr"><input type="checkbox" v-model="list" :value="v">{{ v }}</li>
      </ul>
    </div>
  </div>


</template>

<script>
  export default {
    data () {
      return {
        list: [],
        show: false,
        isIf: true,
        arr: ["变更中", "未生效", "作废了", "正常了", "审核完"],
        info: '',//搜索框输入的内容
      }
    },
    methods: {
      scale(){
        if (this.show == true) {
          this.show = false;
//              console.log('关')
        } else {
          this.show = true;
//              console.log('开')
        }
      },
      del(index){
        this.list.splice(index, 1);
      },
      search(e){
        var that = this;
        if (that.info != '') {//内容不为空就显示全部数据
          var a = [];
          this.arr.map(function (val, index, arr) {
            var reg = that.info;
            if (val.search(reg) != -1) {
              a.push(val);
            }
          });
          this.arr = a;
        } else {
          that.arr = ["变更中", "未生效", "作废了", "正常了", "审核完"];
        }
      }
    }
  };


</script>

<style scoped>
  #all {
    width: 300px;
  }

  #title_contain {
    margin-bottom: 1px;
    height: 25px;
    width: 100%;
    border: 1px solid black;
    box-shadow: 0.5px 0.5px 2px black;
    display: flex;
    align-items: center;
    position: relative;
  }

  .title {
    background: blue;
    /*width: 65px;*/
    float: left;
    height: 20px;
    border-radius: 18px;
    color: white;
    font-size: 12px;
    line-height: 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    padding-left: 3px;
  }

  #contain {
    /*margin-top:5px ;*/
    height: 200px;
    width: 100%;
    border: 1px solid black;
  }

  #search {
    width: 220px;
    outline: none;
    height: 25px;
    line-height: 25px;
    border-radius: 13px;
    background: url(../assets/search.png) no-repeat;
    opacity: .3;
    padding-left: 25px;
  }

  ul {
    width: 100px;
    /*padding: 15px;*/
  }

  li {
    list-style: none;
  }

  img {
    height: 15px;
    width: 15px;
    opacity: 0.6;
    padding-left: 5px;
  }

  #scale {
    position: absolute;
    right: 5px;
    height: 20px;
    width: 20px;
    cursor: pointer;
  }
</style>
