<template>
  <div>
    <common-header bgcolor="rgb(121, 85, 72)">
      <span>首页</span>
      <h3 slot="title">Book</h3>
    </common-header>

    <common-footer bgcolor="rgb(121, 85, 72)">
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
