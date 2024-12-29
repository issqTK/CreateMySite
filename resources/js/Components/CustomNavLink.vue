<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    }
});

</script>

<template>
    <Link 
        :href="href" 
        class=" transition-all duration-300
        min-w-[120px] lg:min-w-[160px] max-w-[220px] px-4 py-2 text-center font-bold text-white hover:text-brightRed bg-brightRed/90 hover:bg-transparent 
        ring-1 ring-brightRed focus:outline-none focus-visible:ring-white rounded-sm"
    >
        <slot />
    </Link>
</template>
