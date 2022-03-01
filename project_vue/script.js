console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
   el: '#root',
   data: {
      movies: [],
      selected:'',
   },
   methods: {
   },
   mounted() {
      axios.get('http://localhost:8888/php-ajax-dischi/api/').then(res => {
            this.movies = res.data;
      })
   }
});