<template>
    <div class="card m-5 max-w-full rounded-[20px] bg-white shadow-sm hover:shadow-lg transition-all duration-150 hover:translate-y-1 hover:translate-x-1 transform-gpu">
        <div class="card-img h-64 bg-gray-400 rounded-t-[20px]">

        </div>
        <div class="card-body px-5 py-10">
            <h4 class="pt-4"><span class="font-bold mr-2">Brand:</span>{{ details.brand }}</h4>
            <h4 class="pt-4"><span class="font-bold mr-2">Model:</span>{{ details.model }}</h4>
            <p class="pt-4"><span class="font-bold mr-2">Model:</span>{{ details.description }}</p>
        </div>
    </div>
</template>

<script>
// import { defineAsyncComponent } from "vue";
// import LoadingCard from "./Loading-Card";
//
// const Card = defineAsyncComponent({
//     loader: () => import("../components/Card.vue"),
//     loadingComponent: LoadingCard
// });

export default {
    name: "Card",
    props: ['details'],

    data(){
        return{
            cars: {}
        }
    }
}
</script>

<style scoped>

</style>
