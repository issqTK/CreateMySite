<script setup>
import { services } from "@/data/Services.js";
import CustomTransparentNavLink from "@/Components/CustomTransparentNavLink.vue";

import { ref, reactive, onMounted, onBeforeUnmount } from "vue";

const buttonTexts = ["Discover", "Order Now", "Learn More", "Get Started"];

const randomText = ref([]);

const visibleCards = reactive({});

let observer;

const handleIntersection = (entries) => {
    entries.forEach((entry) => {
        const cardID = entry.target.dataset.id;

        if (entry.isIntersecting) 
            visibleCards[cardID] = true;
        else {
            setTimeout(() => { visibleCards[cardID] = false }, 100);
        }
        
    });
};

onMounted(() => {
    services.map(() => {
        randomText.value.push(
            buttonTexts[Math.floor(Math.random() * buttonTexts.length)]
        );
    });

    observer = new IntersectionObserver(handleIntersection, { threshold: 0.2 });

    services.forEach((service) => {
        const element = document.querySelector(`[data-id='${service.id}']`);
        if (element) observer.observe(element);
    });

});

onBeforeUnmount(() => {
    if (observer) {
        services.forEach((service) => {
            const element = document.querySelector(`[data-id='${service.id}']`);
            if (element) observer.unobserve(element);
        });
    }
});
</script>

<template>
    <section class="px-5 py-16 lg:px-14 lg:py-24 bg-transparent">
        <h2
            class="mb-14 lg:mb-16 px-8 py-4 text-xl md:text-2xl lg:text-3xl text-center text-brightRed font-bold uppercase"
        >
            Our Services: Crafting Your Digital Success
        </h2>

        <div
            class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-9 md:gap-6 lg:gap-12"
        >
            <div
                class="flex flex-col justify-between gap-6 md:gap-9 p-7 md:mx-auto w-full max-w-[380px] min-h-96 bg-white/85 rounded-lg shadow-lg transition-all duration-500 translate-y-12 opacity-0"
                v-for="(service, index) in services"
                :key="index"
                :data-id="service.id"
                :ref="`service-${service.id}`"
                :class="{
                    '!translate-y-0 !opacity-100 hover:!-translate-y-4':
                        visibleCards[service.id],
                }"
            >
                <div class="flex flex-col gap-6">
                    <div class="text-4xl text-center text-brightRed/90">
                        <i :class="service.svg"></i>
                    </div>

                    <h3
                        class="text-lg md:text-xl text-slite-900 text-center font-semibold"
                    >
                        {{ service.name }}
                    </h3>

                    <ul class="text-gray-700 gap-3 flex flex-col items-center">
                        <li
                            v-for="(feature, index) in service.features
                                .split(',')
                                .slice(0, 3)"
                            :key="index"
                            class=""
                        >
                            {{ feature.trim() }}
                        </li>
                    </ul>

                    <div class="flex flex-col gap-2 capitalize">
                        <span
                            class="block text-slite-900 text-center font-semibold"
                        >
                            Ideal for
                        </span>

                        <p class="md:truncate">{{ service.ideal_for }}</p>
                    </div>
                </div>

                <CustomTransparentNavLink
                    :href="route('service.show', { slug: service.slug })"
                    class="py-3 mx-auto"
                >
                    {{ randomText[index] }}
                </CustomTransparentNavLink>
            </div>
        </div>
    </section>
</template>
