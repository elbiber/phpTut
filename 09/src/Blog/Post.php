<?php

namespace Blog;
use User\User as GeneralUser;

class Post implements PostInterface
{
  public $title;  

  public $user;

  public function __construct()
  {
    $this->user = new GeneralUser();
  }
}
