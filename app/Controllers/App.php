<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    protected $acf = true;

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function projectCategories() 
    {
        $categories = get_terms('project_category');
    
        return array_map(function ($term) {
            
            return [
                'title' => apply_filters('the_title', $term->name),
                'description' => $term->description,
                'image' => get_field('category_image', $term),
            ];
        }, $categories);
    }

    public function footerCallout()
    {
        return [
            'text' => get_field('footer_callout_text', 'option'),
            'link' => get_field('footer_callout_link', 'option'),
            'link_text' => get_field('footer_callout_link_text', 'option')
        ];
    }

    public function socialLinks()
    {
        return get_field('social_media_accounts', 'option');
    }

    public function latestPost() 
    {
        $args  = [
            'posts_per_page' => 1,
            'ignore_sticky_posts' => 1
        ];
        $query    = new \WP_Query($args);
        return $query;

    }

    public function latestStickyPost() 
    {       
        $sticky = get_option( 'sticky_posts' );
        $args = array(
            'posts_per_page' => 1,
            'post__in' => $sticky,
            'ignore_sticky_posts' => 1
        );
        $query = new \WP_Query($args);
        return $query;
    }
}
