<template>
    <section class="px-0 py-16 lg:px-14 lg:py-24 bg-transparent">
        <h2
            v-text="props.data.type + ' Service'"
            class="text-2xl md:text-3xl lg:text-4xl uppercase font-semibold text-center mb-14 lg:mb-16 py-4 text-brightRed"
            style="font-family: 'Montserrat';"
        ></h2>

        <div
            class="flex flex-col gap-9 lg:gap-20 p-9 md:p-12 lg:py-24 lg:px-16 bg-white/90 lg:rounded-md"
        >
            <h3
                class="text-xl md:text-2xl lg:text-3xl text-slite-900 text-center font-bold"
            >
                {{ props.data.name }}
            </h3>

            <div
                class="flex flex-col lg:flex-row justify-center gap-9 md:gap-12"
            >
                <div
                    class="lg:w-9/12 w-full flex flex-col md:flex-row gap-9 lg:gap-12 items-center md:items-stretch"
                >
                    <!-- Features -->
                    <div
                        class="w-3/4 md:w-2/4 bg-rose-100/30 rounded text-center bg-brightRed/10 shadow"
                    >
                        <span
                            class="mb-2 px-6 text-slate-900 py-3 bg-brightRed/20 rounded-sm block font-semibold uppercase text-sm md:text-md"
                            >Features</span
                        >

                        <ul
                            class="text-gray-700 gap-4 flex flex-col list-none px-4 md:px-6 py-3 md:py-5"
                        >
                            <li
                                class="capitalize"
                                v-for="(
                                    feature, index
                                ) in props.data.features.split(',')"
                                :key="index"
                            >
                                {{ feature.trim() }}
                            </li>
                        </ul>
                    </div>

                    <!-- Ideal For -->
                    <div
                        class="w-3/4 md:w-2/4 bg-gray-100/30 rounded text-center bg-gray-300/10 shadow"
                    >
                        <span
                            class="mb-2 px-6 text-slate-900 py-3 bg-gray-300/20 rounded-sm block font-semibold uppercase text-sm md:text-md"
                            >Ideal For</span
                        >

                        <ul
                            class="text-gray-700 gap-4 flex flex-col list-none list-inside px-4 md:px-6 py-3 md:py-5"
                        >
                            <li
                                class="capitalize"
                                v-for="(
                                    ideal_for, index
                                ) in props.data.ideal_for.split(',')"
                                :key="index"
                            >
                                {{ ideal_for }}
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- starting at -->
                <div class="lg:w-3/12 w-full flex flex-col justify-between">
                    <div
                        class="p-4 text-center bg-brightRed/10 rounded-sm table w-3/4 md:w-full mx-auto shadow"
                    >
                        <span
                            class="font-semibold uppercase text-xs block text-slate-900"
                            >Starting at
                        </span>

                        <span class="text-brightRed text-xl font-bold block">
                            ${{ props.data.starting_price }}
                        </span>
                    </div>

                    <span class="capitalize text-center font-semibold hidden lg:block">
                        {{ props.data.type }}
                    </span>
                </div>
            </div>

            <!-- order now -->
            <div class="flex justify-center">
                <CustomNavLink href="#" class="!w-full !py-3"
                    >Order Now</CustomNavLink
                >
            </div>
        </div>
    </section>
</template>

<script setup>
import CustomNavLink from "@/Components/CustomNavLink.vue";

const props = defineProps(["data"]);
</script>

<style scoped></style>
