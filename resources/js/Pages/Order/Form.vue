<template>
    <section class="order-page py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 lg:px-12 bg-white shadow-md rounded-lg">
        <h2 class="text-3xl font-bold text-center my-8">Order Your Website</h2>
    
        <form @submit.prevent="submitOrder" class="space-y-6">
            <!-- Basic Information -->
            <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
            <input
                type="text"
                id="name"
                v-model="form.name"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your name"
                required
            />
            </div>
    
            <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
            <input
                type="email"
                id="email"
                v-model="form.email"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your email"
                required
            />
            </div>
    
            <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number (Optional)</label>
            <input
                type="tel"
                id="phone"
                v-model="form.phone"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your phone number"
            />
            </div>
    
            <!-- Website Type Selection -->
            <div>
            <label for="websiteType" class="block text-sm font-medium text-gray-700">Website Type</label>
            <select
                id="websiteType"
                v-model="form.websiteType"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
            >
                <option value="">Select a website type</option>
                <option value="portfolio">Personal Portfolio</option>
                <option value="ecommerce">E-commerce</option>
                <option value="blog">Blog/News Website</option>
                <option value="corporate">Corporate Website</option>
                <option value="landing">Landing Page</option>
            </select>
            </div>
    
            <!-- Additional Features -->
            <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
            <textarea
                id="description"
                v-model="form.projectDescription"
                rows="4"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Describe your project"
                required
            ></textarea>
            </div>
    
            <div>
            <label for="designPreferences" class="block text-sm font-medium text-gray-700">Design Preferences (Optional)</label>
            <textarea
                id="designPreferences"
                v-model="form.designPreferences"
                rows="2"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Specify your design preferences"
            ></textarea>
            </div>
    
            <!-- Timeline & Budget -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
                <input
                type="date"
                id="deadline"
                v-model="form.deadline"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
                />
            </div>
    
            <div>
                <label for="budget" class="block text-sm font-medium text-gray-700">Budget (in USD)</label>
                <input
                type="number"
                id="budget"
                v-model="form.budget"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your budget"
                required
                />
            </div>
            </div>
    
            <!-- File Upload -->
            <div>
            <label for="file" class="block text-sm font-medium text-gray-700">Upload Relevant Files</label>
            <input
                type="file"
                id="file"
                @change="handleFileUpload"
                class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:text-gray-700 file:rounded-md file:bg-gray-100 hover:file:bg-gray-200"
            />
            </div>
    
            <!-- Submit Button -->
            <div>
            <button
                type="submit"
                class="w-full px-4 py-2 bg-blue-500 text-white font-medium text-lg rounded-md hover:bg-blue-600 transition-all"
            >
                Submit Order
            </button>
            </div>
        </form>
        </div>
    </section>
    </template>
    
    <script setup>
    import { ref } from "vue";
    
    const form = ref({
        name: "",
        email: "",
        phone: "",
        websiteType: "",
        projectDescription: "",
        designPreferences: "",
        deadline: "",
        budget: "",
        file: null,
    });
    
    const handleFileUpload = (event) => {
        form.value.file = event.target.files[0];
    };
    
    const submitOrder = () => {
        console.log("Order Submitted:", form.value);
    // Send the form data to your backend using axios or fetch
    };
    </script>
    
    <style scoped>
    .order-page { background: linear-gradient(to bottom, #f8f9fa, #e9ecef);}
    </style>
    