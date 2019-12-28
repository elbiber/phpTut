<?php

class Bicycle implements DriveInterface
{
  
  public function __construct()
  {
   
  }

  public function drive($location)
  {
    return "Ein Fahrrad fährt nach {$location}." . "\n";
  }
}
