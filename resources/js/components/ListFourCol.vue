<template>
    <section class="bg-gray-100 text-gray-900 py-20">
        <div class="container py-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/4" v-for="post in posts" :key="post.id">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <div class="w-full">
                            <div class="w-full flex p-2">                        
                                <div class="pl-2 pt-2">
                                    <p>{{ post.author }}</p>
                                    <p class="text-xs">{{ post.created_at }}</p>
                                </div>
                            </div>
                        </div>
                        <router-link :to="{ name: 'SinglePost', params: { id: post.id } }">                     
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" :src="post.image" alt="blog cover" />
                        <div class="p-4">
                            <!-- <h2 class="tracking-widest text-xs title-font font-bold text-green-400 mb-1 uppercase ">category</h2> -->                            
                            <h1 class="title-font text-lg font-bold text-gray-900 mb-3">{{ post.title }}</h1>
                            <div class="flex items-center flex-wrap ">
                                <p class="text-green-800 md:mb-2 lg:mb-0">
                                    <span class="inline-flex items-center">Read More </span>
                                </p> 
                            </div>
                        </div>
                    </router-link>
                    </div>
                </div>            
            </div>
        </div>
    </section>
</template>

<script>

const componentName = 'FourColumnList';
export default {
    name: componentName,  
    props: {
        posts: {
            type: Object,
            required: true,
        },
    },

};
</script>