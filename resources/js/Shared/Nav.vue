<script setup>
    import { Link } from "@inertiajs/vue3";
    import NavLink from "@/Shared/NavLink.vue";
</script>

<template>
    <nav>
        <div class="flex items-center">
            <ul class="flex space-x-6 mr-4">
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
                    <Link href="/test" method="post" :data="{ foo: 'foo' }" class="text-black hover:underline">Test
                    </Link>
                </li>
            </ul>
            <ul v-if="$page.props.currentAuthSession.user.canLogin" class="flex space-x-6">
                <li v-if="$page.props.auth.user">
                    <Link :href="route('dashboard')" class="text-black hover:underline">
                        Dashboard
                    </Link>
                </li>
                <li v-if="$page.props.auth.user">
                    <Link :href="route('logout')" method="post" class="text-black hover:underline">
                        logout
                    </Link>
                </li>
                <template v-else>
                    <li>
                        <Link :href="route('login')" class="text-black hover:underline">Log in</Link>
                    </li>

                    <li>
                        <Link v-if="$page.props.currentAuthSession.user.canRegister" :href="route('register')" class="text-black hover:underline">Register
                        </Link>
                    </li>
                </template>
            </ul>
        </div>
    </nav>
</template>
