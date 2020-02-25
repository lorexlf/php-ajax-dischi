<?php

  include __DIR__ . '/database.php';

?>

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
        <?php foreach ($database as $key => $album) { ?>
          <div class="col-sm-6 col-md-4">
            <div class="item p-3">
              <div class="image">
                <img src="<?php echo $album['poster'] ?>" alt="Album cover <?php echo $album['title'] ?> - <?php echo $album['author'] ?>">
              </div>
              <div class="info pt-2">
                <h5 class="title"><?php echo $album['title'] ?></h5>
                <p class="artist pt-1"><?php echo $album['author'] ?></p>
                <p class="year"><?php echo $album['year'] ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div> <!-- / .grid-row -->
    </div> <!-- / .container -->
  </main>

</body>
</html>
