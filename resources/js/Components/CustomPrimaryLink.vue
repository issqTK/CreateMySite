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
        class="min-w-[120px] max-w-[220px] transition-all duration-300
        px-4 py-2 text-center
        text-white
        bg-transparent hover:bg-brightRed/90 
        font-bold border border-brightRed transition  focus:outline-none focus-visible:ring-white rounded-sm"
    >
        <slot />
    </Link>
</template>
