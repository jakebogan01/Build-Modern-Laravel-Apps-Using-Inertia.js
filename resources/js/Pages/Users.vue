<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import Nav from "@/Shared/Nav.vue";

    defineProps({
        time: String
    });
</script>

<template>
    <Head title="Users" />

    <h1 class="text-4xl font-bold">Users</h1>

    <Nav />

    <div class="mt-[1500px]">
        The current time is {{ time }}.

        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
    </div>
</template>

<style scoped>

</style>
