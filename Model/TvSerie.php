<?php

class TvSerie extends Production {

  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(
    string $_name, 
    array $_genreID, 
    string $_image, 
    int $_aired_from_year, 
    int $_aired_to_year, 
    int $_number_of_episodes, 
    int $_number_of_seasons) {
      $this->aired_from_year = $_aired_from_year;
      $this->aired_to_year = $_aired_to_year;
      $this->number_of_episodes = $_number_of_episodes;
      $this->number_of_seasons = $_number_of_seasons;

      parent::__construct($_name, $_genreID, $_image);
  }

  public function setGenre($_genreID) {
    $this->genreID = $_genreID;
    foreach($_genreID as $value){
      if ($value == 5) {
        $this->genreName[] = "Drammatico";
      } elseif ($value == 6) {
        $this->genreName[] = "Fantastico";
      } elseif ($value == 8) {
        $this->genreName[] = "Horror";
      } elseif ($value == 11) {
        $this->genreName[] = "Commedia";
      } elseif ($value == 14) {
        $this->genreName[] = "Sentimentale";
      }
    }
  }

}