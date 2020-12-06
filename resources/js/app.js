require('./bootstrap');

import VueMask from 'di-vue-mask';


window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(VueMask);

const app = new Vue({
    el: '#app',
});
