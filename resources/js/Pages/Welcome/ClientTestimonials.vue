<template>
<section class="py-9 lg:py-16 px-5 lg:px-14 bg-white">
    <div>
        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-bold">What Our Clients Say</h2>
            <p class="mt-2">Hear from some of the people we've worked with!</p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial Card -->
            <div
                class="testimonial-card flex flex-col gap-3 justify-start d p-6 rounded-lg bg-white shadow-md hover:shadow-xl transition-all duration-300 ease-out" 
                v-for="(testimonial, index) in testimonials" 
                key="index"
            >
                <div class="flex items-center space-x-4">
                    <img
                        class="w-16 h-16 rounded-full object-cover"
                        :src="testimonial.image"
                    />
                    
                    <div>
                        <h4 class="font-semibold text-xl">{{ testimonial.name }}</h4>
                        <p class="text-gray-500">{{ testimonial.role }}</p>
                    </div>
                </div>

                <img 
                    style="width: 150px;"
                    :src="'/images/welcome_page/'+testimonial.starts"  
                />

                <p class="mt-4 text-gray-700">
                    <span style="color: #ff9000">«</span> &nbsp;{{ testimonial.quote }}&nbsp; <span style="color: #ff9000">»</span>
                </p>
            </div>
        </div>
    </div>
</section>
</template>
  
<script setup>
  const testimonials = [
    {
        name: "Vincent Bell",
        role: "CEO, Example Corp",
        image: "https://randomuser.me/api/portraits/men/21.jpg",
        starts: "4StartAndHalf.png",
        quote: "Working with 'Createmysite' was an amazing experience. The team delivered exactly what we needed on time and exceeded our expectations."
    },
    {
        name: "Anna Smith",
        role: "Founder, Tech Innovators",
        image: "https://i.ibb.co/QcqyrVG/Mask-Group.png",
        starts: "5Start.png",
        quote: "The team at CreateMySite helped us transform our online presence. Their creativity and attention to detail were second to none."
    },
    {
        name: "Pascal Leo",
        role: "Marketing Director, Creative Agency",
        image: "https://randomuser.me/api/portraits/men/29.jpg",
        starts: "4StartAndHalf.png",
        quote: "The collaboration was seamless. CreatemySite understood our vision and brought it to life with precision and flair. Highly recommend!"
    }
  ];
</script>
  
<style scoped>
.testimonial-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.testimonial-card > div > img {
    width: 64px;
    height: 64px;
}
</style>  