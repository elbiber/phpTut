<?php

/* $obst = "Ananas";

$warenkorb = array(
  "Banane",
  "Birne",
  "Banane",
  $obst
);

$warenkorb[] = "Apfel";
array_unshift($warenkorb, "Kiwi");

var_dump($warenkorb);
echo count($warenkorb);

var_dump(array_shift($warenkorb));

var_dump($warenkorb);
echo count($warenkorb);

$banane = var_dump(array_pop($warenkorb));

var_dump($warenkorb);
echo count($warenkorb);

$index = 3;
var_dump($warenkorb[$index]); */

$warenkorb = array(
  "Banane",
  "Birne",
  "Banane"
);

echo "<ul>";

$anzahl = count($warenkorb);
for ($x=0; $x < $anzahl; $x++) { 
  echo "<li>";
  echo $warenkorb[$x];
  echo "</li>";
}

foreach ($warenkorb as $key => $produkt) {
/*   echo "<li>";
  echo $key;
  echo ": ";
  echo $produkt;
  echo "</li>"; */
  echo "<li>{$key}: {$produkt}</li>";
}

echo "</ul>";