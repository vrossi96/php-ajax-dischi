<?php
include '../api/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous' />
   <title>PHP AJAX DISCHI M1</title>
</head>

<body>
   <header class="d-flex align-items-center">
      <img role="button" class="d-block" src="./img//spotify-logo.png" alt="Spotify">
   </header>
   <main class="d-flex align-items-center">
      <div class="card-container container">
         <div class="row gx-4 gy-3">
            <?php foreach ($database as $song) : ?>
               <div class="col-1-5">
                  <div class="card-song text-center">
                     <img class="img-fluid" src="<?php echo $song['poster'] ?>" alt="<?php echo $song['title'] ?>">
                     <p class="song-title"><?php echo $song['title'] ?></p>
                     <div>
                        <p class="song-desc"><?php echo $song['author'] ?></p>
                        <p class="song-desc"><?php echo $song['year'] ?></p>
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </main>
</body>

</html>