import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';

const routes = [
  {
    path: '/',
    name: 'spa-home',
    component: HomeView,
  },
];

const isSubfolder = typeof window !== 'undefined' && window.location.pathname.includes('/hybridlaravel/public');
const base = isSubfolder ? '/hybridlaravel/public/spa' : '/spa';

const router = createRouter({
  history: createWebHistory(base),
  routes,
  scrollBehavior() {
    return { top: 0 };
  },
});

export default router;
