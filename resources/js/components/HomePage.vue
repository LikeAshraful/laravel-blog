<template>
    <div>
      <feature-post></feature-post>
      <four-column-list></four-column-list>
      <trending-post></trending-post>
      <two-column-list></two-column-list>
    </div>
  </template>
  
  <script>

import FeaturePost from './FeaturePost.vue';
import FourColumnList from './ListFourCol.vue';
import TrendingPost from './TrendingPost.vue';
import TwoColumnList from './ListTwoCol.vue';


  export default {
    name: 'HomePage',
    components: {
        FeaturePost,
        FourColumnList,
        TrendingPost,
        TwoColumnList,
    }
  }
  </script>
  

  