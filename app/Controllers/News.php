<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class News extends Controller
{
  public function latestPost() 
  {
    $args  = [
			'posts_per_page' => 1,
		];
    $query    = new \WP_Query($args);
		return $query;
  }
}
