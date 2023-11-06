<?php

class Movie {
  public $name;
  public $genre;
  public $length;
  public $image;

  public function __construct(string $_name, array $_genre, int $_length) {
    $this->name = $_name;
    $this->genre = $_genre;
    $this->length = $_length;
  }


}

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

