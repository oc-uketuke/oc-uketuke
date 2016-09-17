<template>
	<div>
		<h5>体験{{ taikenNum }}</h5>
		<div class="input-field col s12">
			<select v-model="selected" class="browser-default">
				<option v-for="taiken in taikenList" :value="taiken.id">{{ taiken.name }}</option>
			</select>
		</div>
		<div class="input-field col s12" >
			<button type="button" class="waves-effect waves-light btn" :disabled="nowTaiken == selected" @click="updateTaiken">変更</button>
		</div>
	</div>
</template>

<script>
	var request = require('superagent');
	module.exports = {
		props: {
			nowTaiken: {
				required: true
			},
			ocId: {
				required: true
			},
			taikenNum: {
				required: true
			},
			personNum: {
				required: true
			}
		},
		data(){
			return {
				taikenList:[],
				selected:null
			}
		},
		methods: {
			updateTaiken(){
				request.post('/api/people/taiken')
				.send({
					id: this.personNum,
					taiken_num: this.taikenNum,
					taiken_id: this.selected
				}).end((err, res) => {					
					let data = JSON.parse(res.text)
					this.nowTaiken = data['taiken' + this.taikenNum] 
				})
			}
		},
		created(){			
			this.$set('selected',this.nowTaiken)
			request.get(`/api/opencanpass/${this.ocId}/taiken`).end((err, res) => {
				let data = JSON.parse(res.text)
				this.$set('taikenList',data[`taiken${this.ocId}`])
				console.log(this.taikenList)
			})
		}
	}
</script>