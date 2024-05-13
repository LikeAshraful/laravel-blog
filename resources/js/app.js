import '../../public/tailadmin/js/index';

import { createApp } from 'vue';
import FeaturePost from './components/FeaturePost.vue';
import FourColumnList from './components/ListFourCol.vue';
import TrendingPost from './components/TrendingPost.vue';
import TwoColumnList from './components/ListTwoCol.vue';

createApp({
    components: {
        'feature-post': FeaturePost,
        'trending-post': TrendingPost,
        'four-column-list': FourColumnList,
        'two-column-list': TwoColumnList,
    },
}).mount('#app');