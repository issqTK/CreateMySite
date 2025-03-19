<script setup>
import { ref, onMounted, reactive } from "vue";
import Layout from "@/Layouts/GuestLayout.vue";
import CustomNavLink from "@/Components/CustomNavLink.vue";
import Step1 from "./Step1.vue";
import Step2 from "./Step2.vue";


defineOptions({ layout: Layout });

const props = defineProps(["slug"]);

const basicWebsite = reactive({
  firstName: "Issam",
  lastName: "Taki",
  email: "",
  phone: "",
  websiteType: "",
  projectDescription: "",
  websitePurpose: "",
  TargetAudience: "",
  References: "",
  domainAvailable: false,
  domain: "",
  hostAvailable: false,
  colorPreferred: "",
  logoAvailable: false,
  pagesNumber: 5,
  layoutPreferred: "",
  textContentReady: false,
  SEOContentNeeded: false,
  contactForm: false,
  SocialMediaLinks: false,
  NewsLetterSignup: false,
  basicAnimation: false,
  contentUpdateSelfUpdate: false,
  mobileResponsive: true,
  projectDeadline: "",
  budgetRange: "",
  futureScalability: false,
});

// Submit Form Handler
const submitOrder = () => {
  console.log("Order Submitted:", basicWebsite);
  alert("Order submitted successfully!");
};

onMounted(() => {});
</script>

<template>
  <section>
    <div class="fixed w-3/12 h-screen bg-brightRed/80">steps</div>

    <div
      class="flex flex-col gap-12 bg-white w-9/12 px-12 py-8 ml-[25%] text-slate-900"
    >
      <h2 class="text-3xl font-bold text-center">
        Custom Basic Website - Fast, Affordable & SEO-Optimized Web Design
      </h2>

      <form @submit.prevent="submitOrder" class="">
        <div class="flex flex-col gap-8">
          <Step1 
            v-model:firstName="basicWebsite.firstName" 
            v-model:lastName="basicWebsite.lastName"
          />
          <Step2
            v-model:websiteType="basicWebsite.websiteType"
            v-model:projectDescription="basicWebsite.projectDescription"
          />

         

         

          <!-- Budget Range -->
          <div class="flex flex-col gap-1 w-full">
            <label for="budget" class="text-sm font-semibold"
              >Budget Range</label
            >
            <input
              v-model="basicWebsite.budgetRange"
              type="text"
              id="budget"
              class="rounded-sm border-slate-300"
              placeholder="e.g., $400 - $2000"
            />
          </div>

          <!-- Deadline -->
          <div class="flex flex-col gap-1 w-full">
            <label for="deadline"  class="text-sm font-semibold">Project Deadline</label>
            <input
              v-model="basicWebsite.projectDeadline"
              type="date"
              id="deadline"
              class="rounded-sm border-slate-300"
            />
          </div>

          <!-- email -->
          <div class="flex flex-col gap-1 w-full">
            <label for="email"  class="text-sm font-semibold"
              >Your Email</label
            >
            <input
              v-model="basicWebsite.email"
              type="email"
              id="email"
              class="rounded-sm border-slate-300"
              placeholder="Enter your email"
              required
            />
          </div>
          <!-- phone -->
          <div class="flex flex-col gap-1">
            <label for="phone"  class="text-sm font-semibold"
              >Phone Number</label
            >
            <input
              v-model="basicWebsite.phone"
              type="tel"
              id="phone"
              class="rounded-sm border-slate-300"
              placeholder="Enter your phone number"
              required
            />
          </div>
          <div>
            <CustomNavLink :href="route('order.submit', basicWebsite)" class="!w-full !py-3"
                    >Order Now</CustomNavLink>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- 
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
        
                <div>
                <label for="file" class="block text-sm font-medium text-gray-700">Upload Relevant Files</label>
                <input
                    type="file"
                    id="file"
                    @change="handleFileUpload"
                    class="mt-1 block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:text-gray-700 file:rounded-md file:bg-gray-100 hover:file:bg-gray-200"
                />
                </div>
   -->
</template>

<style scoped>
label {
  text-transform: uppercase;
  font-size: 0.8em;
  color: rgb(36, 36, 36);
}
input,
textarea,
select {
  border-color: rgba(41, 41, 41, 0.299);
  border-width: 0.01px;
}
select option {
  background-color: white;
}
select option:hover {
  background-color: #ffcc00; /* Hover effect (Doesn't work in all browsers) */
}
</style>