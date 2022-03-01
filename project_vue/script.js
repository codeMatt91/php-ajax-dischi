console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
   el: '#app',
   data: {
      movies: [],
   }
});