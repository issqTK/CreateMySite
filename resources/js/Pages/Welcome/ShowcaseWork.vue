<template>
    <section class="relative py-9 lg:py-16 px-5 lg:px-14 h-screen overflow-hidden">
        <div class="absolute inset-0 flex transition-transform duration-700" :style="slideStyle">
            <div v-for="(slide, index) in slides" :key="index" class="w-full h-full flex-shrink-0">
                <img :src="slide.image" :alt="slide.alt" class="w-full h-full object-cover" />
            </div>
        </div>

        <section class="section-padding h-screen overflow-hidden bg-white">
            <div class="absolute inset-0 flex transition-transform duration-700" :style="slideStyle">
                <div v-for="(slide, index) in slides" :key="index" class="w-full h-full flex-shrink-0">
                    <img :src="slide.image" :alt="slide.alt" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </section>

        <!--    <button 
            @click="prevSlide" 
            class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white bg-black bg-opacity-50 rounded-full p-2"
        >
            &lt;
        </button>
    
        <button 
            @click="nextSlide" 
            class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white bg-black bg-opacity-50 rounded-full p-2"
        >
            &gt;
        </button> -->
    </section>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from 'vue';

const currentSlideIndex = ref(0);
const slides = [
    { image: 'https://via.placeholder.com/1920x1080/FF5733/FFFFFF?text=Slide+1', alt: 'Slide 1' },
    { image: 'https://via.placeholder.com/1920x1080/33CFF5/FFFFFF?text=Slide+2', alt: 'Slide 2' },
    { image: 'https://via.placeholder.com/1920x1080/8E44AD/FFFFFF?text=Slide+3', alt: 'Slide 3' },
];

let slideInterval = null;

const slideStyle = computed(() => ({
    transform: `translateX(-${currentSlideIndex.value * 100}%)`,
}));

const nextSlide = () => {
    currentSlideIndex.value = currentSlideIndex.value + 1;
    if (slides.length == currentSlideIndex.value) currentSlideIndex.value = 0
};

const prevSlide = () => {
    if (currentSlideIndex.value == 0) currentSlideIndex.value = slides.length;
    currentSlideIndex.value = currentSlideIndex.value - 1;
};

const startAutoSlide = () => {
    slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
};

const stopAutoSlide = () => {
    if (slideInterval) {
        clearInterval(slideInterval);
    }
};

onMounted(() => {
    startAutoSlide();
});

onBeforeUnmount(() => {
    stopAutoSlide();
});
</script>