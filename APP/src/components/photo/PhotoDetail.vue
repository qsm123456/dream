<template>
    <v-touch  v-on:swipeleft="callbackl"  v-on:swiperight="callbackr"  v-on:tap="onTap">
      <div class="picDetail" >
        <img  :src="'/static/img1/' + nowIndex  + '.jpg'" alt="">
      </div>
    </v-touch>
</template>

<script>
  import axios from 'axios'
export default{
    data(){
        return {nowIndex:0};
    },
    created(){
      this.nowIndex = parseInt(this.$route.params.photoIndex) + 1
    },
    methods:{
      callbackl(){
        this.nowIndex ++;
//        console.log($route.params.photoIndex)
        if(this.nowIndex == 24){
          this.nowIndex=1
        }
      },
      callbackr(){
        this.nowIndex --;
        if(this.nowIndex == 0){
          this.nowIndex = 24;
        }
      },
      onTap(){
        this.$router.push('/Photo')
      }
    }
}
</script>


<style scoped>
.picDetail{
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #000;
}
 img{
    width: 100%;
    position: absolute;
    top:50%;
    left: 0;
    transform:translateY(-50%);
 }
</style>
