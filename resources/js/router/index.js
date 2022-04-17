import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue';
import Vehicles from '../pages/Vehicles.vue';
import Dealerships from '../pages/Dealerships.vue';
import Axios from '../pages/Axios.vue';

const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/vehicles', name: 'Vehicles', component: Vehicles },
    { path: '/dealerships', name: 'Dealerships', component: Dealerships },
    { path: '/axios', name: 'Axios', component: Axios },
]

export default createRouter({
    history: createWebHistory(),
    routes
})
