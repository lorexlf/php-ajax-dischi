<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Handlebars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.2/handlebars.min.js"></script>
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
    <div class="container">
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
      <div class="grid-row">
        <!-- Loop -->
        <div class="col-sm-6 col-md-4">
          <div class="item p-3">
            <div class="image">
              <img src="https://fanart.tv/api/download.php?type=download&image=161901&section=2" alt="Album cover Always the Hard Way - Terror">
            </div>
            <div class="info pt-2">
              <h5 class="title">Always the Hard Way Lorem ipsum dolor</h5>
              <p class="artist pt-1">Terror</p>
              <p class="year">2006</p>
            </div>
          </div>
        </div>
      </div> <!-- / .grid-row -->
    </div> <!-- / .container -->
  </main>

</body>
</html>
