<template>
  <h3 class="text-2xl text-center">What is your name ?</h3>

  <!-- step 1 -->
  <div class="flex gap-8">
    <span
      class="w-full text-center py-3 font-bold rounded-sm bg-slate-50 cursor-pointer hover:bg-slate-100"
    >
      Mister
    </span>

    <span
      class="w-full text-center py-3 font-bold rounded-sm bg-slate-50 cursor-pointer hover:bg-slate-100"
    >
      Madam
    </span>
  </div>

  <div class="flex gap-8">
    <div class="flex flex-col gap-1 w-full">
      <label for="firstName" class="text-sm font-semibold">First Name</label>
      <input
        type="text"
        :value="props.firstName"
        @input="emit('update:firstName', $event.target.value)"
        id="firstName"
        class="rounded-sm border-slate-300"
        required
      />
    </div>

    <div class="flex flex-col gap-1 w-full">
      <label for="familyName" class="text-sm font-semibold">Family Name</label>
      <input
        type="text"
        :value="props.lastName"
        @input="emit('update:lastName', $event.target.value)"
        id="familyName"
        class="rounded-sm border-slate-300"
        required
      />
    </div>
  </div>
</template>

<script setup>
import { defineProps, defineEmits } from "vue";
const props = defineProps(['firstName', 'lastName']);
const emit = defineEmits(["update:firstName", "update:lastName"]);

</script>
