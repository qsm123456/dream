<template>
    <div>
        <h1>子路由1</h1>
        <h1>{{ $route.params.name }}</h1>
        <h1>{{ $route.params.age }}</h1>
        <router-view/>
    </div>

</template>
<script>

</script>