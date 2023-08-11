<script setup>
    import { Head } from '@inertiajs/vue3';
    import Layout from "@/Shared/Layout.vue";

    defineOptions({
        layout: Layout
    });
    defineProps({
        frameworks: Array,
    });
</script>

<template>
    <Head title="Home" />

    <h1 class="text-3xl">Home</h1>

    <p>The following are all the technologies used in this series</p>

    <ul class="mt-5">
        <li v-for="framework in frameworks" v-text="framework"></li>
    </ul>
</template>

<style scoped>

</style>
