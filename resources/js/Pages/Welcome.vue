<script setup>
import Layout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';

import ShowcaseWork from './Welcome/ShowcaseWork.vue';
import AboutMe from './Welcome/AboutMe.vue';
import Services from '@/Pages/ListServices.vue';
import SelectedWorks from './Welcome/SelectedWorks.vue';
import ClientTestimonials from './Welcome/ClientTestimonials.vue';
import Contact from './Welcome/Contact.vue';




defineOptions({
    layout: Layout,
});

defineProps({});

</script>

<template>
    <Head title="Welcome" />
    
    <ShowcaseWork />
    <AboutMe />
    <Services />
    <SelectedWorks />
    <ClientTestimonials />
    <Contact />
</template>
