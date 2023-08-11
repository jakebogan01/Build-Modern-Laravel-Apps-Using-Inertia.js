<script setup>
    import { Link } from '@inertiajs/vue3';
    import Layout from "@/Shared/Layout.vue";

    defineOptions({
        layout: Layout
    });
    defineProps({
        time: String
    });
</script>

<template>
    <h1 class="text-3xl">Users</h1>

    <div class="mt-[1500px]">
        The current time is {{ time }}.

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
</template>

<style scoped>

</style>
