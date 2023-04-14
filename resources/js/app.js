/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import { createApp } from 'vue';





/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */



import ExampleComponent from './components/ExampleComponent.vue';
app.component('employees-index', ExampleComponent);



const app = createApp({});

//app.use(router)
app.mount('#app')



// import '../assets/admin/vendor/fontawesome-free/css/all.css';
// import '../assets/admin/css/sb-admin-2.min.css';
//
// import '../assets/admin/vendor/jquery/jquery.min.js';
// import '../assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js';
// import '../assets/admin/js/sb-admin-2.min.js';
