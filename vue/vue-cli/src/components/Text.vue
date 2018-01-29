<template>
    <div>
        <h1 class='c'>hello world</h1>
        <h1>{{msg}}</h1>
        <router-view/>
    </div>
</template>


<script>
export default{
    data(){
        return {
          msg:'123456789'
        }
    }
}

</script>


<style scoped>
.c{
    background:orange;
}
</style>