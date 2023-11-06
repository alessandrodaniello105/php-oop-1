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

$printableGenre = [];

class Movie {
  public $name;
  public $genreID;
  public $length;
  public $image;
  public $genreName;

  public function __construct(string $_name, array $_genreID, int $_length, string $_image) {
    $this->name = $_name;
    $this->setGenre($_genreID);
    $this->length = $_length;
    $this->image = $_image;
  }


  public function setGenre($_genreID) {
    $this->genreID = $_genreID;
    foreach($_genreID as $key => $value){
      if ($value == 1) {
        $this->genreName[] = "Fantascienza";
      } elseif ($value == 2) {
        $this->genreName[] = "Animazione";
      } elseif ($value == 3) {
        $this->genreName[] = "Divertimento";
      }
    }
  }


}



$testMovie1 = new Movie('Il mio amico Totoro', [2, 3], 133, 'mio-vicino-totoro.jpg');
var_dump($testMovie1);
$testMovie2 = new Movie('Matrix', [1], 198, 'matrix.jpg');


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
  
  <div id="app" class="container">
    <div class="row">

      <!-- MOVIE 1 -->
      <div  class="col">

        <div class="card" style="width: 18rem;">

          <img src="img/<?php echo $testMovie1->image ?>" class="card-img-top" alt="<?php echo $testMovie1->name ?>">

          <div class="card-body">
            <h5 class="card-title"><?php echo $testMovie1->name ?></h5>
            <p class="card-text">Genere/i: <?php echo implode(", ", $testMovie1->genreName) ?></p>
            <p class="card-text">Durata: <?php echo $testMovie1->length ?> min</p>

          </div>

        </div>  

      </div>
      <!-- /MOVIE 1 -->


      <!-- MOVIE 2 -->
      <div  class="col">

        <div class="card" style="width: 18rem;">

        <img src="img/<?php echo $testMovie2->image ?>" class="card-img-top" alt="<?php echo $testMovie2->name ?>">

          <div class="card-body">
            <h5 class="card-title"><?php echo $testMovie2->name ?></h5>
            <p class="card-text">Genere/i: <?php echo implode(", ", $testMovie2->genreName) ?></p>
            <p class="card-text">Durata: <?php echo $testMovie2->length ?> min</p>
          </div>

        </div>  

      </div>
      <!-- /MOVIE 2 -->


    </div>
  </div>


  <script src="script.js"></script>
</body>
</html>

