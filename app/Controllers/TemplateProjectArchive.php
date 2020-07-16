<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateProjectArchive extends Controller
{
    protected $acf = true;

    public function projectsLoop()
    {
        $category = get_field('portfolio_category');
        
        $term_id = $category->term_id;

        $projects_items = get_posts([
            'post_type' => 'portfolio',
            'posts_per_page'=> -1,
            'tax_query' => array(
                array(
                  'taxonomy' => 'project_category',
                  'field' => 'id',
                  'terms' => $term_id
                )
              )
        ]);

        return array_map(function ($post) {
            return [
                'title' => apply_filters('the_title', $post->post_title),
                'content' => apply_filters('the_content', $post->post_content),
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large', array( 'class' => 'project-image' )),
                'permalink' => apply_filters('permalink', get_permalink($post)),
                'category' => get_field('portfolio_category'),
                'tags' => wp_get_post_tags($post->ID),
            ];
        }, $projects_items);
    }

    public function pageContent()
    {   
        $intro['title'] = get_field('portfolio_title');
        $intro['description'] = get_field('portfolio_description');
        $intro['video'] = get_field('portfolio_video');

        return $intro;
    }
}
