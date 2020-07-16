<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    protected $acf = true;

    public function officesLoop()
    {
        $args  = [
          'post_type' => 'office',
          'posts_per_page' => -1,
          'meta_key'  => 'city_code',
          'orderby'   => 'meta_value',
          'order' => 'ASC',
          
        ];
        $query    = new \WP_Query($args);
        return $query;
    }
}
