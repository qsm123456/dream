<template>
  <ul id="total">
    <li class='ticket' v-for="ticket in List">
      <ul id="station">
        <li id="train_no">{{ticket.train_no}}</li>
        <ul id="start_station">
          <li id="start_station_">{{ticket.start_station}}</li>
          <li id="start_station_type">{{ticket.start_station_type}}</li>
          <div id="start_time">{{ticket.start_time}}</div>
        </ul>
        <li id="run_time">{{ticket.run_time}}</li>
        <ul id="end_station">
          <li id="end_station_">{{ticket.end_station}}</li>
          <li id="end_station_type">{{ticket.end_station_type}}</li>
          <div id="end_time">{{ticket.end_time}}</div>
        </ul>
      </ul>
      <ul id="price_list">
        <li v-for="p in ticket.price_list">
          <div id="price">{{p.price}}</div>
          <div id="price_type">{{p.price_type}}</div>
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
        .get(API_PROXY + 'http://apis.juhe.cn/train/s2swithprice?start=' + encodeURI(this.$route.params.v1) + '&end=' + encodeURI(this.$route.params.v2) + '&date=&dtype=&key=a51972d9bf3e52ad3607effb24e829f3')
        .then(res => {
//          console.log(res);
          this.List = res.data.result.list;
        })
        .catch(res => {
          alert('出错了')
        })
    },
    methods: {}
  }
</script>


<style scoped>
  #total .ticket {
    border: 1px solid #2aabd2;
    text-indent: 10px;
  }

  #train_no {
    font-size: 17px;
  }

  #station li {
    float: left;
  }

  #station {
    width: 100%;
    height: 40px;
    line-height: 40px;
    /*background: lightyellow;*/
    display: flex;
  }

  #train_no {
    flex: 1;
  }

  #start_station {
    flex: 2;
    position: relative;
  }

  #start_station_type {
    flex: 1;
  }

  #run_time {
    flex: 2;
  }

  #end_station {
    flex: 2;
    position: relative;
  }

  #end_station_type {
    flex: 1;
  }

  #start_time, #end_time {
    position: absolute;
    top: 15px;
    left: 0;
    color: blue;
  }

  #price_list {
    display: flex;
  }

  #price_list li {
    flex: 1;
  }
</style>
