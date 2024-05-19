import { createRouter, createWebHistory } from 'vue-router';
import SinglePost from './components/SinglePost.vue';
import HomePage from './components/HomePage.vue';
import CategoryPage from './components/CategoryPage.vue';


const routes = [
  {
    path: '/',
    name: 'Home',
    component: HomePage
  },
  {
    path: '/detail/:id',
    name: 'SinglePost',
    component: SinglePost
  },
  {
    path: '/category/:category_name',
    name: 'CategoryPage',
    component: CategoryPage
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
