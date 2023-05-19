<?php

class Post{

    /**
     * Return all posts
     * @return array
     */
    public static function all()
    {
//        $args = array(
//            'posts_per_page'   => -1,
//            'post_status'      => 'publish',
//
//        );
//        return get_posts($args);
        $args = array('posts_per_page' => -1);
        return query_posts($args);
    }
}