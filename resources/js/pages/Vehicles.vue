<template>
    <section class="my-6 md:mt-16 flex flex-col">
        <h1 class="text-center font-black text-xl">Available Vehicles</h1>
        <div class="grid md:grid-cols-3 mt-4">

                    <card v-for="car in cars" :details="car"></card>

                    <p class="text-blue-600">LOADING</p>

        </div>
    </section>
</template>

<script>
import { defineAsyncComponent } from 'vue';
import {ref} from 'vue';
import LoadingCard from '../components/Loading-Card.vue';
import Card from "../components/Card";



export default {
    name: "Vehicles",
    components: {
        Card,
        LoadingCard
    },
    data(){
        return{
            cars: {}
        }
    },
    mounted(){
        axios.get('/api/cars')
            .then(response => this.cars = response.data)
    }
}
</script>

<style scoped>

</style>
