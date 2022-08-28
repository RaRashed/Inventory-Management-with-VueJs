import { createRouter, createWebHistory } from 'vue-router'

import ProductAdd from '../components/products/ProductAdd.vue'

const routes = [
    {
        path: '/products/create',
        name: 'products.create',
        component: ProductAdd
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
