<script setup>
    import Nav from "@/Shared/Nav.vue";
    import {Head} from "@inertiajs/vue3";
</script>

<template>
    <!--add default title if pages don't have one-->
    <Head title="Default title" />

    <section class="p-6 bg-gray-200">
        <header class="flex justify-between max-w-6xl mx-auto">
            <h1 class="text-lg font-bold">My App</h1>
            <Nav/>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>

<style scoped>

</style>
