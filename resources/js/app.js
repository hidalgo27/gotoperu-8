/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//
import VueTelInput from 'vue-tel-input';
Vue.use(VueTelInput);

//
import ElementUI from 'element-ui';
// import Loading from "element-ui/packages/loading/src";
import locale from "element-ui/src/locale/lang/es";
// Vue.use(Loading);
Vue.use(ElementUI, {locale});


// import masonry from 'masonry-layout/masonry'
// // import "swiper/swiper-bundle";
// Vue.use(masonry);
// import Swiper JS


// var Swiper = new Swiper('.swiper-container', {
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// });
//
// var Swiper = new Swiper('.swiper-destino', {
//
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// });
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('itinerary-component', require('./components/ItineraryComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
