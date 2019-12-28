<?php

$staedte = array(
  "Berlin" => 0,//2000000,
  "Helsinki" => 1000000,
  "London" => 3000000
);

$staedte["Muenchen"] = 15000000;
$staedte["Muenchen"]++;

echo "<ul>";
foreach ($staedte as $key => $value) {
  echo "<li>{$key}: {$value}</li>";
}
echo "<ul>";

var_dump(isset($staedte["Berlin"]));
var_dump(empty($staedte["Berlin"]));

unset($staedte["Berlin"]);
var_dump($staedte);

// null vs. unset
