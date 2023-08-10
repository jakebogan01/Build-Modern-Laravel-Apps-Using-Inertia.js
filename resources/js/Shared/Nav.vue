<script setup>
    import {Link} from "@inertiajs/vue3";
</script>

<template>
    <nav class="py-6">
        <ul class="list-disc">
            <li>
                <Link href="/" class="text-blue-500 hover:underline">Home</Link>
            </li>
            <li>
                <Link href="/users" class="text-blue-500 hover:underline">Users</Link>
            </li>
            <li>
                <Link href="/settings" class="text-blue-500 hover:underline">Settings</Link>
            </li>
            <li>
                <Link href="/test" method="post" :data="{ foo: 'foo' }" class="text-blue-500 hover:underline">Test</Link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
