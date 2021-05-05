

const App = new Vue ({

  el: "#root",

  data:{
    albums: [],
  },

  mounted: function(){
    axios.get("http://localhost/php-ajax-dischi/partials/api.php")
      .then((api) => {
        //assegno i dati ottenuto dall' API tramitre richiesta AJAX a una const, per semplificare i passaggi successivi.
        const Dati = api.data;
        // attribuisco i dati estrapolati dall'API e ordinati secondo l'anno alla variabie albums data che mi permetterà di stamparli
          this.albums = Dati;
        // lascio qui questi console log che servono per controllo
        console.log(this.albums);
      });
  },

});
