<script setup>
    import { Head, Link } from '@inertiajs/vue3';
    import Layout from "@/Shared/Layout.vue";

    defineProps({
        time: String
    });
</script>

<template>
    <Head title="Users" />

    <Layout>
        <h1 class="text-3xl">Users</h1>

        <div class="mt-[1500px]">
            The current time is {{ time }}.

            <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
</template>

<style scoped>

</style>
