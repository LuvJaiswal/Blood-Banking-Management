
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// import * as VueGoogleMaps from 'vue2-google-maps'

// Vue.use(VueGoogleMaps, {
//   load: {
//     key: 'AIzaSyB0T-uGFTd8aQ_a7mZmhN0hX9F5dhVUeH4',
//     libraries: 'places',
//   }
// })

Vue.component('chats', require('./components/Chats.vue').default);
// Vue.component('event-location', require('./components/EventLocation.vue').default);
// Vue.component('event-regitration', require('./components/EventRegistration.vue').default);

//Vue.component('gmaps', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',

});