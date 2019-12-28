<?php
/* 
require "src/Car.php";
require "src/SuperCar.php"; */

function autoload($className)
{
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }  
}

spl_autoload_register("autoload");

function drive(DriveInterface $obj)    
{
  return $obj->drive("Berlin");
}


$wv = new Car(150);
echo $wv->drive("Berlin");
var_dump(drive($wv));

$wbm = new SuperCar(250);
// $wbm = new AdvancedSuperCar(250);
echo $wbm->fly();
echo $wbm->drive("Muenchen");
var_dump(drive($wbm));

$bl = new Bicycle();
var_dump(drive($bl));
?>


