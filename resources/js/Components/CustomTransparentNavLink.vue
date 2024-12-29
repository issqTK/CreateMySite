<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps(['href', 'reverseColor']);

const reverseColor = () => {
    console.log(props.reverseColor);
}

</script>

<template>
    <Link 
        @click.prevent="reverseColor"
        :href="href" 
        class=" transition-all duration-300
        px-4 py-2 text-center font-bold min-w-[120px] max-w-[220px]
        text-brightRed hover:text-white bg-transparent hover:bg-brightRed/90 
        ring-1 ring-brightRed focus:outline-none focus-visible:ring-white rounded-sm"
    >
        <slot />
    </Link>
</template>
