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

require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/TvSerie.php';
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
  
  <div id="app" class="container border rounded-2 my-3 text-center">
    
    <!-- MOVIES -->
    <div class="row justify-content-center border rounded-2 my-3">

      <h2>MOVIES</h2>

      <?php foreach ($movies as $movie): ?>

      <div class="col col-ctm" style="flex: 0 0 0%">

        <div class="card" style="width: 18rem;">

          <img src="img/<?php echo $movie->image ?>" class="card-img-top" alt="<?php echo $movie->name ?>">

          <div class="card-body">
            <h4 class="card-title"><?php echo $movie->name ?></h4>
            <p class="card-text">Genere/i: <?php echo implode(", ", $movie->genreName) ?></p>
            <p class="card-text">Anno Pubblicazione: <?php echo $movie->published_year ?></p>
            <p class="card-text">Durata: <?php echo $movie->running_time ?> min</p>

          </div>

        </div>  

      </div>

      <?php endforeach; ?>
    
    </div>
    <!-- /MOVIES -->

    <!-- TV SERIES -->
    <div class="row justify-content-center border rounded-2 my-3">

      <h2>TV SERIES</h2>

      <?php foreach ($tvSeries as $tvserie): ?>

      <div class="col col-ctm" style="flex: 0 0 0%">

        <div class="card" style="width: 18rem;">

          <img src="img/<?php echo $tvserie->image ?>" class="card-img-top" alt="<?php echo $tvserie->name ?>">

          <div class="card-body">
            <h4 class="card-title"><?php echo $tvserie->name ?></h4>
            <p class="card-text">Genere/i: <?php echo implode(", ", $tvserie->genreName) ?></p>
            <p class="card-text">Da/A: <?php echo $tvserie->aired_from_year ?>/<?php echo $tvserie->aired_to_year ?></p>
            <p class="card-text">Episodi: <?php echo $tvserie->number_of_episodes ?></p>
            <p class="card-text">Stagioni: <?php echo $tvserie->number_of_seasons ?></p>

          </div>

        </div>  

      </div>

      <?php endforeach; ?>
    
    </div>
    <!-- /TV SERIES -->




  </div>


  <script src="script.js"></script>
</body>
</html>

