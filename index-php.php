<?php

  include __DIR__ . '/database.php';
  include 'partials/header.php';

?>

<body>

  <!-- Header -->
  <header>
    <div class="container px-2">
      <div class="grid-row jc-space-b ai-center">
        <div class="logo">
          <i class="fab fa-spotify py-1"></i>
        </div> <!-- / .logo -->
        <div class="authors-list">
          <select id="search-cd" name="search">
            <option value="">All</option>
            <?php foreach ($database as $value) { ?>

              <option value="<?= $value['author'] ?>"><?= $value['author'] ?></option>

            <?php } ?>
          </select>
        </div>
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
