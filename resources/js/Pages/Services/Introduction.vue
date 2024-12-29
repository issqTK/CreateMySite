<script setup>

import { ref, onMounted, onBeforeUnmount } from 'vue';
import CustomNavLink from '@/Components/CustomNavLink.vue';

const props = defineProps(['title', 'description']);

const isEntryVisible = ref(false);

const entry = ref(null);

const observer = new IntersectionObserver(
    ([entry]) => {
        isEntryVisible.value = entry.isIntersecting ? true : false;
    },
    { threshold: 0.5 }
);

onMounted(() => {
    observer.observe(entry.value);
});

onBeforeUnmount(() => {
    if (observer) observer.disconnect();
});
</script>

<template>
    <section class="bg-white/90 " ref="entry">
        <div class="flex flex-col gap-8 md:gap-12 lg:gap-16 max-w-[1170px] mx-auto py-[50px] md:py-[80px] lg:py-[100px]">

            <div class="flex flex-col md:flex-row gap-8 md:gap-12 lg:gap-16 justify-between items-start w-full">

                <article class="opacity-0 -translate-y-24 transition-all duration-500 w-full flex flex-col px-4 gap-4 grow"
                    :class="{ 'opacity-100 !translate-y-0': isEntryVisible }">
                    
                    <h2 v-text="title" class="text-2xl md:text-3xl uppercase font-bold text-slate-900 text-pretty text-center md:text-left "></h2>

                    <p class="text-justify leading-relaxed lg:leading-loose" v-text="description"></p>
                </article >

                <div class="flex items-center justify-around md:justify-center gap-6 flex-none mx-auto translate-x-12 opacity-0 transition-all duration-700"
                    :class="{ 'opacity-100 !translate-x-0': isEntryVisible }">

                    <div><i class="fas fa-angle-left text-4xl text-slate-900"></i></div>

                    <div> <img src="https://pixlr.com/images/generator/photo-generator.webp" class="w-[300px] md:w-[250px] md:w-[300px] rounded" /></div>

                    <div><i class="fas fa-angle-right text-4xl text-slate-900"></i></div>
                </div>

            </div>

            <div class="flex flex-col md:flex-row gap-4 md:gap-12 lg:gap-16 opacity-0 items-center justify-center translate-y-4 transition-all duration-700"
                :class="{ '!opacity-100 !translate-y-0': isEntryVisible }">

                <CustomNavLink href="#" class="w-full py-3 rounded-md md:m-0 !w-full md:w-[140px]">View Portfolio</CustomNavLink>

                <CustomNavLink href="#" class="w-full py-3 rounded-md md:m-0 !w-full md:w-[140px]">Live Chat</CustomNavLink>

                <CustomNavLink href="#" class="w-full py-3 rounded-md md:m-0 !w-full md:w-[140px]">Call Back</CustomNavLink>

            </div>
        </div>
    </section>
</template>

<style scoped></style>