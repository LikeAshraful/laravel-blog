<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-5 py-10 mx-auto">

            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-2/3 lg:w-1/2 rounded-xl h-72 lg:h-96" :src="data.image" alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 px-6">
                    <p class="text-sm text-blue-500 uppercase">{{ data.author }}</p>

                    <a href="#"
                        class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                        {{ data.title }}
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        {{ data.title }}
                    </p>

                    <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>

                    <div class="flex items-center mt-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full"
                            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                            alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-gray-700 dark:text-gray-200">{{ data.author }}</h1>
                            <!-- <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { API_BASE_URL } from './config';


const componentName = 'FeaturePost';
export default {
    name: componentName,
    setup() {
        const data = ref({
            image: '',
        });

        const fetchData = async () => {
            try {
                const response = await axios.get(`${API_BASE_URL}latest-posts`);
                const sliced = Object.fromEntries(
                    Object.entries(response.data).slice(0, 1)
                )
                data.value = sliced[0];
                data.value.image = 'https://bucket.barta24.com/' + sliced[0].featured_image;

            } catch (error) {
                console.error('Error Fetching data:', error);
            }
        };

        onMounted(() => {
            fetchData();
        });

        return {
            data,
        }
    },

};
</script>