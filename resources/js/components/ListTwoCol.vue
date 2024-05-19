<template>
    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>
    
            <div class="grid grid-cols-2 gap-8 mt-8 md:mt-16 md:grid-cols-2">

                <div class="lg:flex py-3 px-3" v-for="post in data.posts" >
                    <img class="object-cover w-1/2" :src="post.image" alt="">
    
                    <div class="flex flex-col justify-between py-6 px-6 lg:mx-6">
                        <router-link :to="{name:'SinglePost', params:{id:post.id} }" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            {{ post.title }}
                        </router-link>
    
                        <span class="text-sm text-gray-500 dark:text-gray-300">{{ post.created_at }}</span>
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


const componentName = 'TwoColumnList';
export default {
    name: componentName,
    setup() {
        const data = ref({
            image: '',
        });

        const fetchData = async () => {
            try {
                const response = await axios.get(`${API_BASE_URL}latest-posts`);
                // const sliced = response.data.slice(13); // Exclude the first 13 item
                const lastFive = response.data.slice(-6); // Get the last 8 items
                data.value.posts = lastFive.map(item => ({
                    ...item,
                    image: 'https://bucket.barta24.com/' + item.featured_image,
                }));

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