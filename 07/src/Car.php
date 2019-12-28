<?php

class Car implements DriveInterface
{
  protected $ps;

  public function __construct($ps)
  {
    $this->ps = $ps;
  }

  public function getPs()
  {
    return $this->ps;
  }

  public function setPs($ps)
  {
    $this->ps = $ps;
  }

  public function drive($location)
  {
    return "Ein Auto fährt mit {$this->ps} PS nach {$location}."."\n";
  }
}
