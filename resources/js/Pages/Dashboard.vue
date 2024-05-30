<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import UserInformation from '@/Pages/UserInformation.vue';
</script>

<template>
    <Head title="Dashboard" />
    <UserInformation></UserInformation>
</template>
