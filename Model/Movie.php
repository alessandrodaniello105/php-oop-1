<?php

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