<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,700,800,900&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <!-- XLF CSS -->
  <link rel="stylesheet" href="dist/app.css">
  <title>Ajax Dischi</title>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="container px-2">
      <div class="grid-row jc-space-b ai-center">
        <div class="logo">
          <i class="fab fa-spotify py-1"></i>
        </div> <!-- / .logo -->
        <div class="search">
          <input type="text" name="search" value="">
          <button type="submit" name="button" class="btn btn-sm">Search</button>
        </div>
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
