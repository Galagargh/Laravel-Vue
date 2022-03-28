<template>
    <nav class="navbar max-w-full">
        <hr class="bg-blue-300 h-2 z-10">
        <div class="inner-nav flex flex-wrap bg-white h-16 z-0">
            <router-link :to="{ name: 'Home' }" class="self-center mr-2 px-6"
            ><h2 class="">Pit Stop</h2></router-link>

            <router-link :to="{ name: 'Vehicles' }" class="self-center px-6 py-1 bg-gray-200 hover:bg-blue-200 mr-2 transition-all duration-150 rounded-full"
            >Vehicles</router-link>

            <router-link :to="{ name: 'Dealerships' }" class="self-center px-6 py-1 bg-gray-200 hover:bg-blue-200 mr-2 transition-all duration-150 rounded-full"
            >Dealerships</router-link>
        </div>
    </nav>


    <div class="max-w-full mx-5 ">
        <router-view/>
    </div>
</template>

<script>
export default {
    name: "App",
}
</script>

<style scoped>

</style>
