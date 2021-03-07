<?php
$post = $wp_query->post;
if ( in_category(array( 'waterproof', 'paint', 'otherwork' )) ) {
    include(STYLESHEETPATH.'/single-work.php');
} else {
    include(STYLESHEETPATH.'/single-news.php');
}
?>