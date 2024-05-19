<template>
    <div>
      <feature-post :data="featured_post"></feature-post>
      <four-column-list :posts="data.posts" ></four-column-list>
    </div>
  </template>
  
<script>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  import { API_BASE_URL } from './config';

  import FeaturePost from './FeaturePost.vue';
  import FourColumnList from './ListFourCol.vue';
  import TrendingPost from './TrendingPost.vue';
  import TwoColumnList from './ListTwoCol.vue';


    export default {
      name: 'CategoryPage',
      components: {
          FeaturePost,
          FourColumnList,
          TrendingPost,
          TwoColumnList,
      },

      setup() {
          const data = ref({
              image: '',
              value: {},
              posts: [],
          });

          const featured_post = ref({
              image: '',
              value: {},
          });

          let featured_posts = [];

          const fetchData = async () => {
              try {
                  const response = await axios.get(`${API_BASE_URL}latest-posts`);
                  const sliced = Object.fromEntries(
                      Object.entries(response.data).slice(0, 1)
                  )

                  featured_post.value = sliced[0];
                  featured_post.value.image = 'https://bucket.barta24.com/' + sliced[0].featured_image;    
                  featured_post.value.id = sliced[0].id;

                  featured_posts = response.data.slice(1).map(item => ({
                      ...item,
                      image: 'https://bucket.barta24.com/' + item.featured_image,
                  }));

                  data.value.posts = featured_posts.slice(-4);

              } catch (error) {
                  console.error('Error Fetching data:', error);
              }
          };

          onMounted(() => {
              fetchData();
          });

          return {
              data,
              featured_post,
          }
      },
    }
  </script>
  

  