<script setup>
import Layout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import Introduction from '@/Pages/Services/Introduction.vue';
import Card from '@/Pages/Services/Card.vue';

defineOptions({ layout: Layout });

const props = defineProps(['data']);

</script>

<template>
    <Head :title="data.meta_title" />

    <Introduction :title="data.title" :description="data.description" />

    <Card :data="props.data" />

</template>
