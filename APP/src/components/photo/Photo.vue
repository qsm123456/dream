<template>
  <div>
    <ul class="piclist clearfix" >
      <li class='photo' v-for="(item,index) in photoList" :key="index" >
          <img @click="big(index)" :src="item.src" alt="">
      </li>
    </ul>
  </div>
</template>

<script>
  import axios from 'axios'
 export default{
    data(){
        return{
            photoList:[],
        }
    },
    created(){
       axios
        .get('/static/data/photodata.json')
        .then(res=>{
//           console.log(res);
          this.photoList = res.data.photoData;
    })
      .catch(res=>{
        alert('出错了')
      })
    },
   methods:{
        big(photoIndex){
            this.$router.push(`/photodetail/${photoIndex}`)
        }
   }
 }
</script>


<style scoped>
.clearfix::after{
    content: '';
    display: block;
    clear: both;
}
  .photo{
    width: 50%;
    float: left;
  }
</style>
