
<!-- Documento HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dischi</title>
  <!-- cdn VUE -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <!-- /cdn VUE -->
  <!-- cdn AXIOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <!-- /cdn AXIOS -->
  <!-- cdn googleFont - lato -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- /cdn googleFont - lato -->
  <!-- link al CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- /link al CSS -->
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="shortcut icon" href="img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- /favicon -->
</head>

<body>

  <?php include __DIR__ . '/partials/template/header.php';?>

  <!-- root per VUE JS -->
  <div id="root">

    <main>
      <div class="container">
        <div class="album" v-for="album in albums">
          <div class="cover-box">
            <img :src="album.poster" :alt="album.title">
          </div>
          <div class="title-box flex">
            <h2>{{album.title}}</h2>
          </div>
          <div class="author-box flex">
            <h3>{{album.author}}</h3>
          </div>
          <div class="year-box flex">
            <h3>{{album.year}}</h3>
          </div>
        </div>
      </div>
    </main>

  </div>
  <!-- /root per VUE JS -->

  <!-- script js -->
  <script src="js/script.js" charset="utf-8"></script>
  <!-- /script js -->
</body>
<!-- /Documento HTML -->
