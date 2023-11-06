<?php

class Genre {
  public $number;

  public function __construct($_number) {
    $this-> getGenre($_number);
  }
  
  public function getGenre($_number) {
    $this->number = $_number;
    foreach($_number as $key => $value);
  }

  
}

class Movie {
  public $name;
  public $genre;
  public $length;
  public $image;

  public function __construct(string $_name, Genre $_genre, int $_length) {
    $this->name = $_name;
    $this->length = $_length;
    $this->genre = $_genre;
  }

  public function getGenre() {
    $this->genre = $_genre;
    foreach($_genre as $key => $value){
      if ($key == 2) {
        return "Animazione";
      }
    }
  }

}



$testMovie1 = new Movie('Il mio amico Totoro', new Genre([2, 3]), 133);

var_dump($testMovie1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <title>PHP OOP 1</title>
</head>
<body>
  
  <div id="app" class="container">

    {{title}}

  </div>


  <script src="script.js"></script>
</body>
</html>

