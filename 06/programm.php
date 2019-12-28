<?php

$a = ["Max"];

function halloWelt(&$name) {
  $name[] = "Hans";
  var_dump($name);
}

/* function halloWelt()
{
  global $name;
  echo $name . "\n";
} */

// halloWelt();
halloWelt($a);
var_dump($a);

function halloAge($name, $age = 33)
{
  var_dump($name);
  var_dump($age);
}

halloAge("Willy");
halloAge("Willy", 36);

function add($a, $b)
{
  return $a + $b;
}

function multiply($a, $b)
{
  var_dump($a);
  return $a * $b;
}

function tillZero($a)
{
  if($a === 0)
  {
    return $a;    
  }
  return tillZero($a - 1) + $a;

}

echo tillZero(100);

var_dump(add(1, multiply(3, 4)));