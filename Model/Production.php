<?php

class Production {
  use Rating;
  public $name;
  public $genreID;
  public $image;
  public $genreName;

  public function __construct(string $_name, array $_genreID, string $_image, float $_criticsRating = null, float $_usersRating = null) {
    $this->name = $_name;

    if(!empty($_genreID)){
      $this->genreID = $_genreID;
      $this->setGenre($_genreID);
    } else {
      // GESTIONE ERRORE
      throw new Exception("Controlla gli ID genere nel database: $this->name");
    }

    $this->image = $_image;

    $this->criticsRating = $_criticsRating;
    $this->usersRating = $_usersRating;
  }


  public function setGenre($_genreID) {
    foreach($_genreID as $value){
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