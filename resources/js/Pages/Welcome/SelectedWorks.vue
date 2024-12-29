<template>
<section class="py-9 lg:py-16 px-5 lg:px-14">
    <div>
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold ">Showcasing Our Expertise</h2>
            <p class="mt-2 hidden md:block">Explore our featured projects, from custom <strong>Laravel</strong> apps to dynamic <strong>Vue.js</strong> solutions, showcasing our expertise in crafting <strong>user-centric, functional websites</strong> that meet client needs.</p>
        </div>

        <!-- Projects -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Lenergia -->
            <div class="service-card flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 ease-out transform hover:scale-105">
                <img src="/images/welcome_page/lenergia.png" alt="Lenergia Solar Energy" class="w-full h-48 object-cover" />
                <div class="px-8 py-6 flex flex-col gap-4">
                    <h3 class="text-xl font-semibold">Lenergia - Solar Energy Solutions</h3>
                    
                    <p class="leading-relaxed">
                        A platform for estimating budget-friendly solar energy installations, offering services like <strong>photovoltaic</strong>, <strong>thermal</strong>, and <strong>hybrid</strong> systems.
                    </p>

                    <ul class="list-disc pl-6 leading-loose">
                        <li>Tech Stack: <strong>Laravel</strong>, <strong>Vue.js</strong></li>
                        <li>Features: <strong>Budget estimation</strong>, <strong>Tailored service recommendations</strong></li>
                        <li>Challenges: Integrating multiple service options for user convenience</li>
                    </ul>

                    <a href="#" class="text-brightRed hover:underline">Learn More</a>
                </div>
            </div>

            <!-- Prixa -->
            <div class="service-card flex flex-col justify-between bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 ease-out transform hover:scale-105">
                <img src="/images/welcome_page/prixa.png" alt="Prixa Marketplace" class="w-full h-48 object-cover" />
                <div class="px-8 py-6 flex flex-col gap-4">
                    <h3 class="text-xl font-semibold">Prixa - Marketplace for Listings</h3>
                    
                    <p class="leading-relaxed">
                        A dynamic app for listing and selling new or used items, integrated with <strong>Laravel</strong>, <strong>Inertia.js</strong>, and <strong>Vue.js</strong> for seamless user interaction.
                    </p>

                    <ul class="list-disc pl-6 leading-loose">
                        <li>Tech Stack: <strong>Laravel</strong>, <strong>Vue.js</strong>, <strong>Inertia.js</strong></li>
                        <li>Features: Real-time product listings, <strong>Direct communication</strong> with sellers</li>
                        <li>Challenges: Ensuring smooth performance across all devices</li>
                    </ul>

                    <a href="#" class="text-brightRed hover:underline">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex justify-center">
            <a href="#" class="inline-block bg-brightRed text-white py-3 px-6 rounded-lg hover:bg-transparent border hover:border-brightRed hover:text-brightRed transition duration-300">
                View Full Portfolio
            </a>
        </div>
    </div>
</section>
</template>
  
  <script setup>
  // Add any data or methods you may need for interactivity here.
  </script>
  
  <style scoped>
   .service-card {
        will-change: transform;
    }
  </style>
  