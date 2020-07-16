<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateTeam extends Controller
{
    protected $acf = true;

    public function teamLoop()
    {
        $args  = [
          'post_type' => 'team',
          'posts_per_page' => -1,
          'meta_key'			=> 'picture',
          'orderby'			=> 'meta_value',
          'order'				=> 'DESC'
        ];
        $query    = new \WP_Query($args);
        return $query;
    }
}
