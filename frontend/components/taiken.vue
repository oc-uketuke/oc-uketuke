<template>
	<div>
		<h2>体験{{ taiken_num }}</h2>
		<select>
			
		</select>
		<button type="button">変更</button>
	</div>
</template>

<script>
	var request = require('superagent');
	module.exports = {
		props: {
			now_taiken: {
				required: true
			},
			oc_id: {
				required: true
			},
			taiken_num: {
				required: true
			}
		},
		data(){
			return {
				taiken_list:[],
				select_taiken:now_taiken
			}
		},
		created(){
			request.get(`/api/opencanpass/${this.oc_id}/taiken`).end(function(err, res){
				console.log(err, res)
			})
		}
	}
</script>