<template>
    <section class="mt-6 md:mt-16 flex flex-col">
        <h1 class="text-center font-black text-xl">Axios Test</h1>

        <div class="grid md:grid-cols-3 mt-4">
            <ul v-for="skill in skills">
                <li>{{ skill }}</li>
            </ul>
        </div>
    </section>
</template>

<script>
export default {
    name: "Axios",

    data(){
        return{
            skills: '',
        }
    },

    mounted(){
        // possibilities to grab JSON data from route
        // 1. Make an AJAX request (Javascript fetch api)
        // 2. Jquery .ajax
        // 3. Axios
        axios.get('/api/skills').then(
            response => this.skills = response.data
        );
    }
}
</script>

<style scoped>

</style>
