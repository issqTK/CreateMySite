<template>
    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-1 w-full">
            <label for="websiteType" class="text-sm font-semibold">Website Type - Purpose of the website</label>
            
            <select
                id="websiteType"
                :value="props.websiteType"
                @change="emit('update:websiteType', $event.target.value)"
                class="rounded-sm border-slate-300 w-full"
                required
            >
                <option selected disabled value="">Select a website type</option>
                <option value="portfolio">Personal Portfolio</option>
                <option value="business">Business Website</option>
                <option value="ecommerce">E-commerce</option>
                <option value="blog">Blog/News Website</option>
                <option value="corporate">Corporate Website</option>
                <option value="landing">Landing Page</option>
            </select>
        </div>

        <div class="flex flex-col gap-1 w-full">
            <label for="description" class="text-sm font-semibold">Project Description</label>

            <textarea
                id="description"
                rows="8"
                :value="props.projectDescription"
                @input="emit('update:projectDescription', $event.target.value)"
                class="rounded-sm border-slate-300"
                placeholder="Describe your project"
                required
            ></textarea>
        </div>
    </div>
</template>

<script setup>
import { defineProps, defineEmits } from "vue";

const props = defineProps(['websiteType', 'projectDescription']);
const emit = defineEmits(["update:websiteType", "update:projectDescription"]);

</script>
