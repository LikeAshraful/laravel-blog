import '../../public/tailadmin/js/index';

import { createApp } from 'vue';
import FeaturePost from './components/FeaturePost.vue';

createApp({
    components: {
        'feature-post': FeaturePost,
    },
}).mount('#app');