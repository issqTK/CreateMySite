<template>
    <section class="flex items-center justify-center bg-white py-9 lg:py-16 px-5 lg:px-14">
        <div class="flex flex-col md:flex-row items-start lg:items-center gap-4">
            <img 
                src="/images/welcome_page/Turning Ideas into Stunning Websites.png" 
                alt="Turning Ideas into Stunning Websites" 
                class="w-full md:min-w-[500px] h-auto  object-cover transition-transform duration-800 img-hidden"
                :class="{'animate-slide-in': isImageVisible}"
                ref="image"
            />
            <div class="bg-white/10 p-3 rounded">
                <h2 class="text-2xl md:text-4xl capitalize font-bold block w-full mb-4" >About us</h2>
                <p
                    class="text-gray-600 text-base md:text-lg text-justify opacity-0 transition-opacity duration-800 "
                    :class="{'animate-fade-up': isParagraphVisible}"
                    ref="paragraph"
                >
                    <span class="mb-4 block leading-loose">We are experienced <strong>full-stack web developers</strong> skilled in <strong>Laravel, Vue, Tailwind,</strong> and <strong>JavaScript</strong>, specializing in creating high-quality, visually stunning websites. With a focus on both <strong>frontend</strong> and <strong>backend development</strong>, we deliver custom solutions that are responsive, user-friendly, and crafted to meet each client's unique vision.</span>
                    <span class="leading-loose">Whether you're looking to build a new site from scratch or enhance your current web presence, we bring together <strong>design and functionality</strong> to create digital experiences that make an impact. If you need a <strong>web development team</strong> that can turn ideas into reality, let's collaborate and make your project stand out.</span>
                </p>
            </div>
            
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const isImageVisible = ref(false);
const isParagraphVisible = ref(false);

const image = ref(null)
const paragraph = ref(null)

const paragraphObserver = new IntersectionObserver(
    ([entry]) => {
        isParagraphVisible.value = entry.isIntersecting ? true : false;
    },
    { threshold: 0.2 }
);

const imageObserver = new IntersectionObserver(
    ([entry]) => {
        isImageVisible.value = entry.isIntersecting ? true : false;
    },
    { threshold: 0.1 }
);

onMounted(() => {
    imageObserver.observe(image.value);
    paragraphObserver.observe(paragraph.value);
});

onBeforeUnmount(() => {
    if (imageObserver) imageObserver.disconnect();
    if (paragraphObserver) paragraphObserver.disconnect();
});


</script>

<style scoped>
    * { box-sizing: border-box; }
    .opacity-0 { opacity: 0; transform: translateY(20px); }

    .animate-fade-up {
        transform: translateY(0);
        opacity: 1;
        transition: opacity 0.8s ease, transform 0.8s ease;
    }
    /* Initial off-screen state */
    .img-hidden {
        transform: translateX(-90%);
        opacity: 0;
    }
    /* Image Animation */
    .animate-slide-in {
        transform: translateX(0)!important;
        opacity: 1;
        transition: transform 0.8s ease, opacity 0.8s ease;
    }
</style>
