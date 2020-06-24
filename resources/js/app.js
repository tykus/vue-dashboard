import Vue from 'vue'
import axios from 'axios'

window.axios = axios.create({
    baseURL: 'https://dashboard.dev/api'
    // todo interceptors, timeout, headers
});

// Mixin the Ziggy route helper function
Vue.mixin({
    methods: {
        route
    }
});

Vue.component('SpotifyCard', require('./components/SpotifyCard').default)

const app = new Vue({}).$mount('#app')