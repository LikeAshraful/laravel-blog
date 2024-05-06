<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl dark:text-white">Trending on</h1>

            <div class="grid grid-cols-3 gap-8 mt-8 md:mt-16 md:grid-cols-4">
                <div class="lg:flex">
                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            01
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>
                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            02
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>
                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">

                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            03
                        </span>
                    </div>

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            04
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            Morning routine to boost your mood
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 25 November 2020</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            05
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>
                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            06
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>
                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">

                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            07
                        </span>
                    </div>

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <div class="flex flex-col justify-between py-6">
                        <span class="text-6xl font-bold text-gray">
                            08
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            Morning routine to boost your mood
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 25 November 2020</span>
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


const componentName = 'TrendingPost';
export default {
    name: componentName,
    setup() {
        const data = ref({
            image: '',
        });

        const fetchData = async () => {
            try {
                const response = await axios.get(`${API_BASE_URL}latest-posts`);
                const sliced = response.data.slice(1); // Exclude the first item
                const lastFive = sliced.slice(-5); // Get the last five items
                data.value.posts = lastFive.map(item => ({
                    ...item,
                    image: 'https://bucket.barta24.com/' + item.featured_image,
                }));

                console.log(data);

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