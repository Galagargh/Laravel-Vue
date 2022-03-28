<template>
    <section class="mt-6 md:mt-16 flex flex-col">
        <h1 class="text-center font-black text-xl">Dealerships</h1>

        <div class="grid md:grid-cols-3 mt-4">
        </div>

    </section>
</template>

<script>
import loadingCard from "../components/Loading-Card";
import Card from "../components/Card";

export default {
    name: "Dealerships",
    components: {
        loadingCard, Card
    }
}
</script>

<style scoped>

</style>
