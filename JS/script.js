new Vue({

	el: '#app',
	data: {
		dischi : [],
        dataUrl : 'http://localhost/php-ajax-dischi/api.php',
	},

    created() {
		axios.get(this.dataUrl)
	    .then(response => this.dischi = response.data);
	}

})