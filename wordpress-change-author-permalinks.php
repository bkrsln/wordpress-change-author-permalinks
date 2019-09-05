function change_author_permalinks() {

    global $wp_rewrite;

    // Change the value of the author permalink base to whatever you want here
    $wp_rewrite->author_base = 'yazar';

    $wp_rewrite->flush_rules();
}

add_action('init','change_author_permalinks');​
