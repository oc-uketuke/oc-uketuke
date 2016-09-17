const Vue = require('vue')

Vue.component('taiken',require('./components/taiken.vue'))
Vue.component('expereince', require('./components/expereince.vue'))

let vm = new Vue({
	el: '#app'
})
