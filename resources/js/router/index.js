import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue';
import Vehicles from '../pages/Vehicles.vue';
import Dealerships from '../pages/Dealerships.vue';

const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/vehicles', name: 'Vehicles', component: Vehicles },
    { path: '/dealerships', name: 'Dealerships', component: Dealerships },
]

export default createRouter({
    history: createWebHistory(),
    routes
})
