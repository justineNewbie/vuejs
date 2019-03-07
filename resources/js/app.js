require('./bootstrap');
import VueRouter from 'vue-router'
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
window.Vue = require('vue');

Vue.component('main-app', require('./components/MainApp.vue').default);

import {
    routes
} from './routes.js'


Vue.use(VueRouter)
Vue.use(Vuetify)

const router = new VueRouter({
    routes,
    mode: 'history'
});

const app = new Vue({
    el: '#app',
    router
});
