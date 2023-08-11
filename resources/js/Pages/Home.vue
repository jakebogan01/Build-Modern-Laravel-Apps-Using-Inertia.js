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
    <!--add dynamic meta tags-->
    <Head>
        <title>Home</title>
        <meta name="description" content="Home page" head-key="description">
    </Head>

    <!--alternative way to add meta tags-->
    <teleport to="head">
        <meta name="robots" content="noindex">
    </teleport>

    <h1 class="text-3xl">Home</h1>

    <p>The following are all the technologies used in this series</p>

    <ul class="mt-5">
        <li v-for="framework in frameworks" v-text="framework"></li>
    </ul>
</template>

<style scoped>

</style>
