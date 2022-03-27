<template>
    <h1>Pit Stop</h1>

    <router-link :to="{ name: 'home' }" class="navbar-brand"
    >Home</router-link
    >

    <div class="container">
        <router-view/>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
