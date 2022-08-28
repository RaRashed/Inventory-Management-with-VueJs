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

//require('./bootstrap');

import { createApp } from 'vue';
//import { createStore } from 'vuex'
//import store from './store/index';

import examples from './components/examples.vue';
import ProductAdd from './components/products/ProductAdd.vue';

/*let app=createApp({})
app.component('example' , examples);
app.component('productadd' , productadd);
*/
import router from './router';
import store from "./store/index.js";

/* createApp(productadd)
  .use(store)
   .mount("#app");
   */

  //app.mount("#app").use(store);

//app.mount("#app")

/*const app = createApp({ productadd})
app.use(store)
*/

createApp({
    components: {
        ProductAdd
    }
}).use(store).use(router).mount('#app')

