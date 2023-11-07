<?php

// class Genre {
//   public $number;

//   public function __construct($_number) {
//     $this-> getGenre($_number);
//   }
  
//   public function getGenre($_number) {
//     $this->number = $_number;

//   }
  
// }

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/db/db.php';

$printableGenre = [];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>

  <!-- Vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <title>PHP OOP 1</title>
</head>
<body>
  
  <div id="app" class="container border rounded-2 my-3">
    <h2>MOVIES</h2>
    <div class="row justify-content-center">

      <!-- MOVIES -->
      <?php foreach ($movies as $movie): ?>

      <div class="col col-ctm" style="flex: 0 0 0%">

        <div class="card" style="width: 18rem;">

          <img src="img/<?php echo $movie->image ?>" class="card-img-top" alt="<?php echo $movie->name ?>">

          <div class="card-body">
            <h5 class="card-title"><?php echo $movie->name ?></h5>
            <p class="card-text">Genere/i: <?php echo implode(", ", $movie->genreName) ?></p>
            <p class="card-text">Durata: <?php echo $movie->length ?> min</p>

          </div>

        </div>  

      </div>

      <?php endforeach; ?>
      <!-- /MOVIES -->




    </div>
  </div>


  <script src="script.js"></script>
</body>
</html>

