<template>
  <input type="text" v-model="query">
    <a v-for="exper in expers | filterBy query in 'furigana'">
    <div class="list-group-item">
        {{exper.id }}
        {{exper.furigana}}
        {{exper.name}}
        {{exper.school_name}}
    </div>
    </a>
</template>


<script>
	var request = require('superagent');
	module.exports = {
    props: ['exper', 'code'],
		data(){
			return {
        expers: []
			}
		},
    created(){
      request.get(`/api/opencanpass/${this.code}/people`).end((err, res) => {
        console.log(err, res)
        let data = JSON.parse(res.text)
        this.$set('expers',data)
      })
    },
	}
</script>
