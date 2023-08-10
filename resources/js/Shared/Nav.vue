<script setup>
    import {Link} from "@inertiajs/vue3";
</script>

<template>
    <nav class="py-6">
        <ul>
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/users">Users</Link>
            </li>
            <li>
                <Link href="/settings">Settings</Link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
