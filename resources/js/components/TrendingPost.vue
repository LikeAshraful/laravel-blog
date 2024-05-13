<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-5 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl dark:text-white">Trending on</h1>

            <div class="grid grid-cols-2 gap-4 mt-8 md:mt-16 md:grid-cols-4">

                <div class="lg:flex" v-for="post in data.posts">
                    <div class="flex flex-col justify-between py-3">
                        <span class="text-4xl lg:text-4xl font-bold text-gray">
                            0{{ data.posts.indexOf(post) + 1 }}
                        </span>
                    </div>
                    <div class="flex flex-col justify-between py-3 lg:mx-6 px-5">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            {{ post.title }}
                        </a>
                        <span class="text-sm text-gray-500 dark:text-gray-300">
                            {{ post.created_at }}
                        </span>
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
                const sliced = response.data.slice(5); // Exclude the first five item
                const lastFive = sliced.slice(-8); // Get the last 8 items
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