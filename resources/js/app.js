/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);


import GlobalHome from './components/GlobalHome.vue';
app.component('global-home', GlobalHome);

import login from './components/login.vue';
app.component('login', login);

import register from './components/register.vue';
app.component('register', register);

// import pagination from 'laravel-vue-pagination';
// Vue.component('pagination', pagination);



import App from "./App.vue";
import router from "./routes/index";

createApp(App)
    .use(router)
    .mount("#app");