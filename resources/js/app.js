/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueSweetalert2 from "vue-sweetalert2";
require("./bootstrap");

// If you don't need the styles, do not connect

window.Vue = require("vue");

Vue.use(VueSweetalert2);
Vue.component(
    "fecha-paciente",
    require("./components/FechaPaciente.vue").default
);
Vue.component(
    "eliminar-paciente",
    require("./components/EliminarPaciente.vue").default
);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
});
