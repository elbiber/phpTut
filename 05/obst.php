<?php
$produkte = array(
  "Obst" => array(
    "Birne",
    "Banane",
    "Apfel"
  ),
  "Elektronik" => [
    "Fernseher",
    "Kopfhoerer",
    "DVD-Player"
  ]
);

echo "<ul>";

foreach ($produkte as $category => $items) {
  echo "<li>{$category}<ul>";
  foreach ($items as $item) {
    echo "<li>{$item}</li>";
  }
  echo "</ul></li>";
}

echo "</ul>";

