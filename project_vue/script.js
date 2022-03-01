console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
   el: '#root',
   data: {
      movies: [],
   },
   methods: {
      getApi() {
         axios.get('http://localhost:8888/php-ajax-dischi/api/index.php').then(res => {
            this.movies = res.data;
         })
      }
   },
   mounted() {
      this.getApi;
   }
});