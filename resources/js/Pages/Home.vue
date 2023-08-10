<script setup>
    import { Head } from '@inertiajs/vue3';

    defineProps({
        canLogin: Boolean,
        canRegister: Boolean,
        frameworks: Array,
    });
</script>

<template>
    <Head title="Welcome" />

<!--    <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">-->
<!--        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>-->

<!--        <template v-else>-->
<!--            <Link :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>-->

<!--            <Link v-if="canRegister" :href="route('register')" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>-->
<!--        </template>-->
<!--    </div>-->

    <h1>Welcome</h1>

    <p>The following are all the technologies used in this series</p>

    <ul class="mt-5">
        <li v-for="framework in frameworks" v-text="framework"></li>
    </ul>
</template>

<style scoped>

</style>
