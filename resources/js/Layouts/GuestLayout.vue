<script setup>
import CustomTransparentNavLink from '@/Components/CustomTransparentNavLink.vue';
import { ref, onMounted, onBeforeUnmount, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';

const paddingTop = ref(0);
const header = ref(null);
const isScrolled = ref(false);
const handleScroll = ref();

const updatePaddingTop = () => {   
    if(header != null) paddingTop.value = header.value.offsetHeight + 'px';
};

if (typeof window !== "undefined") 
  handleScroll.value = () => isScrolled.value = window.scrollY > 20;

onMounted(() => {
    // if (!route().current('welcome'))
    
    if (typeof window !== "undefined") {
        window.addEventListener("scroll", handleScroll.value);

        updatePaddingTop();
        window.addEventListener('resize', updatePaddingTop);
    }
});

onUnmounted(() => {
    if (typeof window !== "undefined") window.removeEventListener("scroll", handleScroll.value);
});

onBeforeUnmount(() => {
    if (typeof window !== "undefined") window.removeEventListener('resize', updatePaddingTop);  // Cleanup
});


</script>

<template>
    <div class="text-black/80 bg-laravel">
        <div class="relative w-full">
            <header ref="header" 
                class="fixed w-full grid grid-cols-2 items-center gap-2 p-4 lg:px-12 lg:grid-cols-3 z-10 shadow-inner shadow-white overflow-hidden transition-all" 
                :style="isScrolled ? 'background-color: rgba(0, 0, 0, 0.7)' : 'background-color: rgba(0, 0, 0, 0.5)'"
                >
                <div class="flex lg:col-start-2 lg:justify-center">
                    <Link :href="route('welcome')">
                        <img 
                            src="/images/logo_colorful.png" 
                            alt="Create My Site" 
                            class="h-[50px]" 
                        />
                    </Link>
                </div>
                <nav class="-ml-3 flex flex-1 gap-6 justify-end">
                    <CustomTransparentNavLink 
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                    >
                        Dashboard
                    </CustomTransparentNavLink>

                    <template v-else>
                        <CustomTransparentNavLink
                            :href="route('login')"
                            :reverseColor="true"
                        >
                            Log in
                        </CustomTransparentNavLink>

                        <CustomTransparentNavLink
                            :href="route('register')"
                        >
                            Register
                        </CustomTransparentNavLink>
                    </template>
                </nav>
            </header>
                
            <main :style="'padding-top:' + paddingTop">
                <slot />
            </main>

            <footer
                class="py-16 text-center text-sm text-black dark:text-white/70"
            >
                Get Your Website Now!
            </footer>
        </div>
    </div>
</template>

<style scoped>
.bg-laravel {
    background-image: url(https://laravel.com/assets/img/welcome/background.svg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: contain
}
</style>