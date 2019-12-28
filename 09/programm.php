<?php

/* require "./src/User/User.php";
require "./src/Blog/PostInterface.php";
require "./src/Blog/Post.php";
require "./src/Forum/Post.php"; */

function autoload($className)
{
  $className = str_replace("\\", "/", $className);
  if (file_exists("./src/{$className}.php")) {
    require "./src/{$className}.php";
  }
}

spl_autoload_register("autoload");

$post = new Blog\Post();
var_dump($post);

$post = new Forum\Post();
var_dump($post);


