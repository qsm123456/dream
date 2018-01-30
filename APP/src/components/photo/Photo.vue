<template>
  <div>
    <common-header bgcolor="rgb(63, 81, 181)">
      <span>首页</span>
      <h3 slot="title">Photo</h3>
    </common-header>
    <h1>图片</h1>
    <common-footer bgcolor="rgb(63, 81, 181)">
      <ul>
        <li>电影</li>
        <li>音乐</li>
        <li>书籍</li>
        <li>图片</li>
      </ul>
    </common-footer>
  </div>
</template>

<script>
  import CommonHeader from '@/components/common/Header';
  import CommonFooter from '@/components/common/Footer';

  export default {
    components:{
      CommonHeader,
      CommonFooter,
    }
  }
</script>
