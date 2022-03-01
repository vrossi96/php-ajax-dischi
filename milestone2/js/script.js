console.log('Vue ok', Vue);

const app = new Vue({
   el: 'app',
   data: {
      songs: [],
   },
   mounted(){
      axios.get('http://localhost/api/songs').then(res => {
         this.songs = res.data;
      }).catch(err => {console.error(err)})
   } 
}) 