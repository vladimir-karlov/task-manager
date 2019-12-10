import Vue from 'vue'

window.Vue = require('vue');

import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.css'

//Import Vue Filter
//Vue Filter to make first letter Capital
Vue.filter("strToUpper", function(text) {
	return text.charAt(0).toUpperCase() + text.slice(1);
});

//Vue moment js to show human readable date
import moment from "moment"; //Import Moment
Vue.filter("formatDate", function(date) {
	return moment(date).format('MMMM Do YYYY');
}); 

import App from './App.vue';
import vuetify from './plugins/vuetify';	

Vue.component('Task', require('./components/TaskComponent.vue').default);

Vue.config.productionTip = false

new Vue({
  vuetify,
  render: function (h) { return h(App) }
}).$mount('#app')
