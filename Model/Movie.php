<?php

class Movie extends Production {

  public $published_year;
  public $running_time;

  public function __construct(string $_name, array $_genreID, string $_image, int $_published_year, int $_running_time) {
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;

    parent::__construct($_name, $_genreID, $_image);
  }

}