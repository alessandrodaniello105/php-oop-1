<?php

class Movie extends Production {

  public $published_year;
  public $running_time;

  public function __construct(string $_name, array $_genreID, string $_image, $_published_year, int $_running_time) {
    
    if(is_numeric($_published_year)) {
      $this->published_year = $_published_year;
    } else {
      throw new Exception ("L'anno di pubblicazione del film deve essere un numero");
    }

    $this->running_time = $_running_time;

    parent::__construct($_name, $_genreID, $_image);
  }

}