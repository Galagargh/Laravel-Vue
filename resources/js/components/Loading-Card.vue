<template>
    <div class="card m-5 max-w-full rounded-[20px] bg-white shadow-sm hover:shadow-lg transition-all duration-150">
        <div class="flexcard-img h-64 bg-gray-400 rounded-t-[20px]">
            <div class="flex self-center h-full justify-center items-center">
                <div class="spinner-border animate-spin inline-block w-8 h-8 border-4 rounded-full" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="card-body px-5 py-10">
            <h4 class="pt-4 flex items-center"><span class="font-bold mr-2">Brand:</span><span class="loading-area inline-flex bg-gray-400 pt-6 px-6 min-w-[50%] rounded-full animate-pulse"></span></h4>
            <h4 class="pt-4 flex items-center"><span class="font-bold mr-2">Model:</span><span class="loading-area inline-flex bg-gray-400 pt-6 px-6 min-w-[70%] rounded-full animate-pulse"></span></h4>
            <p class="pt-4">
                <span class="font-bold mr-2">Description:</span><span class="inline-flex bg-gray-400 pt-6 px-6 mt-6 min-w-[100%] min-h-[150px] rounded-lg animate-pulse"></span>
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Loading-Card"
}
</script>

<style scoped>

</style>
