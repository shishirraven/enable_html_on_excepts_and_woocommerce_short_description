<?php
/*
Plugin Name: HTML on Excerpts
Description: This plugin allows HTML in excerpts.
Version: 1.0
Author:            Shishir Raven
Author URI:        https://iamshishir.com/
Author Email:      shishir.raven@gmail.com
Author URI: https://www.webforttechnology.com/
*/

function filter_post_excerpt_attrs( $metadata ) {
    if ( 'core/post-excerpt' === $metadata['name'] ) {
        $metadata["attributes"]["excerptLength"] = false;
    }

    return $metadata;
};

add_filter( 'block_type_metadata', 'filter_post_excerpt_attrs', 10 );
