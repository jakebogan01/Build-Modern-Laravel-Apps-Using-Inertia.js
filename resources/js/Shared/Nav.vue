<script setup>
    import { Link } from "@inertiajs/vue3";
    import NavLink from "@/Shared/NavLink.vue";
</script>

<template>
    <nav>
        <ul class="flex list-disc space-x-4 list-inside">
            <li>
                <NavLink href="/" :active="'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="'Users'">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="'Settings'">Settings</NavLink>
            </li>
            <li>
                <Link href="/test" method="post" :data="{ foo: 'foo' }" class="text-blue-500 hover:underline">Test</Link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
