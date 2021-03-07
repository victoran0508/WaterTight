<?php
$post = $wp_query->post;
if ( in_category(array( 'paint', 'waterproof', 'otherwork' )) ) {
    include(STYLESHEETPATH.'/category-work.php');
} else {
    include(STYLESHEETPATH.'/category-news.php');
}
?>