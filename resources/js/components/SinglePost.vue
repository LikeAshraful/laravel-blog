<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-5 py-10 mx-auto">
            <div class="title">
                <h1 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                    {{ data.title }}
                </h1>
            </div>
            <div class="mt-8 ">
                <img class="object-cover w-full rounded-xl h-72 lg:h-96" :src="data.image" :alt="data.title">
            </div>


            <div id="content" class="mt-4">
                <p class="text-xl dark:text-white block" v-html="data.content"> </p>
            </div>
        </div>
    </section>

    
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { API_BASE_URL } from './config';
import { useRoute } from 'vue-router';


const componentName = 'SinglePost';
export default {
    name: componentName,
    setup() {

        const route = useRoute(); 

        const data = ref({
            image: '',
        });

        const fetchData = async () => {
            try {
                const id = route.params.id;
                const response = await axios.get(`${API_BASE_URL}post/${id}`);
                data.value = response.data;
                data.value.image = 'https://bucket.barta24.com/' + response.data.featured_image;
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