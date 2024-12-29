<template>
<section class="bg-light py-9 lg:py-16 px-5 lg:px-14" ref="contactSection">
    <div class="text-center flex flex-col items-center gap-6">
        <h2 class="text-2xl md:text-4xl font-bold">Get In Touch!</h2>
        
        <p class="md:text-lg text-base max-w-[800px]">
            We’d love to hear from you! Whether you have a question or want to discuss your project, we’re here to help. Let’s create something amazing together.
        </p>

        <button 
            @click="showContactForm = !showContactForm"
            class="bg-brightRed text-white hover:text-brightRed py-2 px-6 rounded-lg hover:bg-transparent border border-brightRed transition duration-300">
            Contact Us
        </button>

        <!-- Contact Form Modal -->
        <div v-if="showContactForm" class="contact-form-modal fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center" @click="closeForm" >
            <div class="relative bg-white p-8 rounded-lg shadow-lg w-96" @click.stop>
                <h3 class="text-2xl font-semibold mb-4">Contact Us</h3>
                
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium">Full Name</label>
                        <input type="text" id="name" v-model="form.name" class="w-full px-3 py-2 border rounded-lg mt-2" required />
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email Address</label>
                        <input type="email" id="email" v-model="form.email" class="w-full px-3 py-2 border rounded-lg mt-2" required />
                    </div>

                    <div class="mb-10">
                        <label for="phone" class="block text-sm font-medium">Phone Number</label>
                        <input type="tel" id="phone" v-model="form.phone" class="w-full px-3 py-2 border rounded-lg mt-2" required />
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-green-500 hover:bg-transparent text-white hover:text-green-500 py-2 w-full text-center rounded-lg border border-green-500 transition duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
                
                <button @click="closeForm" class="absolute top-4 right-4 text-gray-600 font-bold">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Go to Top Button -->
    <button 
        v-if="showGoTopButton"
        @click="scrollToTop"
        class="fixed bottom-4 right-4 w-9 h-9 bg-darkGray/30 text-white rounded-full shadow-lg hover:bg-darkGray/90 transition duration-300"
    >
        <i class="fas fa-arrow-up"></i>
    </button>
</section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const showContactForm = ref(false);
const showGoTopButton = ref(false);
const contactSection = ref(null);

const form = ref({
    name: '',
    email: '',
    phone: ''
});

const submitForm = () => {
    // You can handle form submission here
    console.log('Form submitted:', form.value);
    // Reset form after submission
    form.value.name = '';
    form.value.email = '';
    form.value.phone = '';
    showContactForm.value = false;
};

const closeForm = () => {
    showContactForm.value = false;
};

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

// Detect scroll and show Go to Top button when reaching the last section
const handleScroll = () => {
  const lastSection = contactSection.value;
  if (window.scrollY + window.innerHeight >= lastSection.offsetTop) {
    showGoTopButton.value = true;
  } else {
    showGoTopButton.value = false;
  }
};

// Set up scroll event listener on mounted
onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

// Clean up the event listener when the component is destroyed
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.contact-form-modal {
display: flex;
justify-content: center;
align-items: center;
z-index: 10;
}

form input {
border-color: #e2e8f0;
border-radius: 0.375rem;
}

button {
transition: background-color 0.3s ease;
}
</style>
