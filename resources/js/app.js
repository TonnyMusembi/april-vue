require('./bootstrap');

//import Vue from 'vue';


import { createApp } from 'vue'


// const router = VueRouter.createRouter({
//     // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
//     history: VueRouter.createWebHashHistory(),
//     routes, // short for `routes: routes`
// })
const app = createApp({
    /* root component options */
})
import Home from './components/Home.vue';


//app.use(router)

app.component('home', Home);



app.mount('#app')