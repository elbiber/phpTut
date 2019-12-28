<?php

/* require "./src/User/User.php";
require "./src/Blog/PostInterface.php";
require "./src/Blog/Post.php";
require "./src/Forum/Post.php"; */

function autoload($className)
{
  $prefix = "App";
  $dir = "./src";
  $clss = substr($className, strlen($prefix));
  $clss = str_replace("\\", "/", $clss);
  if (file_exists("{$dir}{$clss}.php")) {
    require "{$dir}{$clss}.php";
  }
}

spl_autoload_register("autoload");

$post = new App\Blog\Post();
var_dump($post);

$post = new App\Forum\Post();
var_dump($post);


