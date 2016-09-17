<template>
	<a class="waves-effect waves-light btn " v-if="!nowState" @click="attend">出席</a>
	<a href="/" class="waves-effect waves-light btn" v-if="nowState">ホームへ</a>
</template>

<style scoped>
.btn{
	margin-top: 40px;
}
</style>

<script>
	var request = require('superagent');
	module.exports = {
		props: {
			personNum: {
				required: true
			},
			nowState: {
				required: true
			}
		},
		methods: {
			attend(){
				request.post('/api/people/entry')
				.send({
					id: this.personNum
				})
				.end((err, res) => {
					this.nowState = JSON.parse(res.text)
				})
			}
		}
		
	}
</script>