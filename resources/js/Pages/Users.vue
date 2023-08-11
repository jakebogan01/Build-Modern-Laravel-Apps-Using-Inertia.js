<script setup>
    import { Link } from '@inertiajs/vue3';
    import Layout from "@/Shared/Layout.vue";

    defineOptions({
        layout: Layout
    });
    defineProps({
        time: String,
        users: Array
    });
</script>

<template>
    <h1 class="text-3xl">Users</h1>

    <ul class="mt-5">
        <li v-for="user in users" :key="user.id" v-text="user.name"></li>
    </ul>

    <div class="mt-[1500px]">
        The current time is {{ time }}.

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
</template>

<style scoped>

</style>
