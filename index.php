<?php

include 'partials/header.php';

?>

<body>

  <!-- Header -->
  <header>
    <div class="container px-2">
      <div class="grid-row">
        <div class="logo">
          <i class="fab fa-spotify py-1"></i>
        </div> <!-- / .logo -->
      </div> <!-- / .grid-row -->
    </div> <!-- / .container -->
  </header>

  <!-- Main -->
  <main class="py-5 txt-small txt-center">
    <div class="container">
      <div class="grid-row albums">
        <!-- Loop -->

      </div> <!-- / .grid-row -->
    </div> <!-- / .container -->
  </main>

  <!-- Template -->
  <script id="entry-template" type="text/x-handlebars-template">
    <div class="col-sm-6 col-md-4">
      <div class="item p-3">
        <div class="image">
          <img src="{{poster}}" alt="Album cover {{title}} - {{author}}">
        </div>
        <div class="info pt-2">
          <h5 class="title">{{title}}</h5>
          <p class="artist pt-1">{{author}}</p>
          <p class="year">{{year}}</p>
        </div>
      </div>
    </div>
  </script>

  <!-- No Result Template -->
  <script id="no-result-template" type="text/x-handlebars-template">
    <div class="col"><h3>No results!</h3></div>
  </script>

  <!-- Javascript -->
  <script src="dist/app.js"></script>

</body>
</html>
