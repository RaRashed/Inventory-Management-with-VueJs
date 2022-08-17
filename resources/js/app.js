import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Require Vue
// Require Vue
/* window.Vue = require('vue').default;

// Register Vue Components
Vue.component('example-component', require('./components/ExampleComponents.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
});
*/

/*import { createApp } from "vue";

import App from "./components/ExampleComponents.vue";

createApp(App).mount("#app");

require("./bootstrap");
*/

require('./bootstrap');

import { createApp } from 'vue';

import examples from './components/examples.vue';

let app=createApp({})
app.component('example' , examples);

app.mount("#app")
