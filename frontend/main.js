const Vue = require('vue')

Vue.component('taiken',require('./components/taiken.vue'))

let vm = new Vue({
	el: '#app'
})