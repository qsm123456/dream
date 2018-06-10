<template>
    <div>
        <h5>这是测试URL传参的组件</h5>
        <h3>用户ID：{{ $route.params.userId }}</h3>
        <h3>用户名称：{{ $route.params.username }}</h3>
        <router-view/>
    </div>
</template>

