<?php

if (!empty($name)) {
  echo "Name ist defined";
}
// Weitere String methoden
$name = "Willy HALLO";

echo strtoupper($name) . "\n";
echo strtolower($name) . "\n";
echo str_replace("HALLO", "Welcome", $name) . "\n";

$ergebnis = strpos($name, "Willy");
var_dump($ergebnis);

if (!empty($ergebnis)) {
  echo "Begriff gefunden!";
}

if ($ergebnis !== false) {
  echo "Begriff gefunden!";
}

$a = 0;
while ($a <= 10) {
  var_dump($a);
  $a++;
}

for ($i=0; $i < 10 ; $i += 2) {
  var_dump($i);
}

// Aufgabe

$ergebnis = 0;
$a = 1;
while ($a <= 100) {
  $ergebnis += $a;
  $a++;
}
var_dump($ergebnis);

$ergebnis = 0;
for ($i = 1; $i <= 100; $i++) {
  $ergebnis += $i;
}
var_dump($ergebnis);




