const Vue = require('vue')

Vue.component('taiken',require('./components/taiken.vue'))
// Vue.config.delimiters = ['${', '}']

let vm = new Vue({
	el: '#app'
})