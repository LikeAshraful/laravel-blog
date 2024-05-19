<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-5 py-10 mx-auto">

            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-2/3 lg:w-1/2 rounded-xl h-72 lg:h-96" :src="data.image" alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 px-6">
                    <p class="text-sm text-blue-500 uppercase">{{ data.author }}</p>       

                    <a :href="'/detail/' + data.id" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                        {{ data.title }}
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        {{ data.title }}
                    </p>

                    <a :href="'/detail/' + data.id"  class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>
                   
                </div>
            </div>
        </div>
    </section>
</template>

<script>

const componentName = 'FeaturePost';
export default {
    name: componentName,   
    props: {
        data: {
            type: Object,
            required: true,
        },
    },

};
</script>
