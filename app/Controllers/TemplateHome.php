<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateHome extends Controller
{
  public function projectsLoop()
  {
      $projects_items = get_posts([
          'post_type' => 'portfolio',
          'posts_per_page'=>'6',
      ]);

      return array_map(function ($post) {
          return apply_filters('the_title', $post->post_title);
      }, $projects_items);
  }
}
