<template>
  <section class="relative px-5 lg:px-14 overflow-hidden"
    style="height: calc(100vh - 82px);"
  >
    <div
      class="absolute inset-0 flex transition-transform duration-700"
      :style="slideStyle"
    >
      <div
        v-for="(slide, index) in slides"
        :key="index"
        class="w-full h-full flex-shrink-0"
      >
        <img
          :src="slide.image"
          :alt="slide.alt"
          class="w-full h-full object-cover"
          loading="lazy"
        />
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from "vue";

const currentSlideIndex = ref(0);
const slides = [
  {
    image: "https://placehold.co/1920x1080/8E44AD/FFFFFF?text=Slide+1",
    alt: "Slide 1",
  },
  {
    image: "https://placehold.co/1920x1080/8E44AD/FFFFFF?text=Slide+2",
    alt: "Slide 2",
  },
  {
    image: "https://placehold.co/1920x1080/8E44AD/FFFFFF?text=Slide+3",
    alt: "Slide 3",
  },
];

const slideStyle = computed(() => ({
  transform: `translateX(-${currentSlideIndex.value * 100}%)`,
}));

const nextSlide = () => {
  currentSlideIndex.value = (currentSlideIndex.value + 1) % slides.length;
};

const prevSlide = () => {
  currentSlideIndex.value =
    (currentSlideIndex.value - 1 + slides.length) % slides.length;
};

let slideInterval = null;
const startAutoSlide = () => {
  slideInterval = setInterval(nextSlide, 3000);
};
const stopAutoSlide = () => clearInterval(slideInterval);

onMounted(startAutoSlide);
onBeforeUnmount(stopAutoSlide);
</script>