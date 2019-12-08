/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Now the app has started!

require('./bootstrap');

window.Vue = require('vue');

//Import Vue Filter
require('./filter'); 

//Import progressbar
require('./progressbar'); 

//Setup custom events 
require('./customEvents'); 

//Import Sweetalert2
import Swal from 'sweetalert2'
window.Swal = Swal
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
window.Toast = Toast

//Import v-from
import { Form, HasError, AlertError } from 'vform'
//Import multiselect
import Multiselect from 'vue-multiselect';

// register globally
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('multiselect', Multiselect)	

Vue.component('Task', require('./components/TaskComponent.vue').default);

const app = new Vue({
}).$mount('#app');