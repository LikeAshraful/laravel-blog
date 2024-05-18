<template>
    <section class="bg-gray-100 text-gray-900 py-20">
        <div class="container py-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/4" v-for="post in data.posts" :key="post.id">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="w-full">
                            <div class="w-full flex p-2">
                                <!-- <div class="p-2 ">
                                    <img class="object-cover object-center w-10 h-10 rounded-full"
                            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                            alt="">
                                </div> -->
                                <div class="pl-2 pt-2">
                                    <p>{{ post.author }}</p>
                                    <p class="text-xs">{{ post.created_at }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" :src="post.image" alt="blog cover" />

                        <div class="p-4">
                            <!-- <h2 class="tracking-widest text-xs title-font font-bold text-green-400 mb-1 uppercase ">category</h2> -->
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ post.title }}</h1>
                            <div class="flex items-center flex-wrap ">
                                <router-link :to="{ name: 'SinglePost', params: { id: post.id } }" class="text-green-800 md:mb-2 lg:mb-0">
                                    <p class="inline-flex items-center">Read More </p>
                                </router-link> 
                            </div>
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


const componentName = 'FourColumnList';
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
                const lastFive = sliced.slice(-4); // Get the last five items
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