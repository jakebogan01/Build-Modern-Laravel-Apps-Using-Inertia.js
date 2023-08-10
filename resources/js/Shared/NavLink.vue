<script setup>
    import { Link } from "@inertiajs/vue3";

    defineProps({
        active: String,
    });
</script>

<template>
    <Link
        class="text-blue-500 hover:underline"
        :class="{'font-bold underline': $page.component === active}">
        <slot />
    </Link>
</template>

<style scoped>

</style>
