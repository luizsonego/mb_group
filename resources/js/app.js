require('./bootstrap');

// import Vue from 'vue'

import VueTheMask from 'vue-the-mask';
import VueMask from 'di-vue-mask';


window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueTheMask);
Vue.use(VueMask);

const app = new Vue({
    el: '#app',
});
