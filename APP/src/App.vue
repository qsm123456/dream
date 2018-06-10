<template>
  <div id="app">
    <common-header :bgColor="bg" @home="index">
      <span slot="title">{{ title }}</span>
    </common-header>
    <router-view class="content"/>
    <common-footer @change="switchTab" :bgColor="bg"></common-footer>
  </div>
</template>

<script>
  import CommonHeader from "@/components/common/Header";
  import CommonFooter from "@/components/common/Footer";

  export default {
    name: 'App',
    components: {
      CommonHeader,
      CommonFooter
    },
    data() {
      return {
        bg: "rgb(33, 150, 243)",
        title: "movie"
      };
    },
    methods:{
      index() {
        this.switchTab("movie");
        this.$router.push("/");
      },
      switchTab(tabName) {
        this.title = tabName;
        switch (tabName) {
          case "movie":
            this.bg = "rgb(33, 150, 243)";
            break;
          case "music":
            this.bg = "rgb(0, 150, 136)";
            break;
          case "photo":
            this.bg = "rgb(121, 85, 72)";
            break;
          case "ticket":
            this.bg = "rgb(63, 81, 181)";
            break;
          default:
            this.bg = "rgb(33, 150, 243)";
        }
      }
    }
}
</script>

<style>
  .content{
    margin: 1rem 0;
  }
</style>
