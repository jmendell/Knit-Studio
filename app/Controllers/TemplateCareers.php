<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCareers extends Controller
{
    protected $acf = true;

    public static function careersLoop()
    {
        $careers = get_posts([
          'post_type' => 'career',
          'posts_per_page'=> -1
        ]);

        return array_map(function ($post) {
            return [
                'title' => apply_filters('the_title', $post->post_title),
                'content' => apply_filters('the_content', $post->post_content),
                'locations' => get_field('location', $post),
            ];
        }, $careers);
    }
}
