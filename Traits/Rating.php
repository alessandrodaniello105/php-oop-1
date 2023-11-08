<?php

trait Rating {
  public $criticsRating;
  public $usersRating;
  private $averageRating;


  public function setAverageRating() {
    $this->averageRating = $this->criticsRating + $this->usersRating;
  }

  public function getAverageRating() {
    $this->setAverageRating();
    return round($this->averageRating / 2, 2);
  }

}