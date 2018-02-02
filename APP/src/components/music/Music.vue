<template>
    <div>
      <ul class="music-menu">
        <li class="newsong"><router-link to="/newsong">新歌</router-link></li>
        <li class="ranking">排行</li>
        <li class="playlist">歌单</li>
        <li class="singer">歌手</li>
      </ul>
    </div>
</template>

<script>
export default{

}
</script>



<style scoped>
  .music-menu{
    height: 1rem;
    /*background: #b89f7a;*/
    width: 100%;
    display: flex;
  }
  .music-menu li{
    float: left;
    flex-grow: 1;
    font-size: .4rem;
    line-height: 1rem;
    /*border-bottom: .1rem solid ;*/
  }
</style>
