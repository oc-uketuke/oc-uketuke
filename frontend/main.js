const Vue = require('vue')

Vue.component('taiken',require('./components/taiken.vue'))
Vue.component('attend-btn',require('./components/attend-btn.vue'))
// Vue.config.delimiters = ['${', '}']

let vm = new Vue({
	el: '#app'
})