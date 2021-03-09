<?php
$post = $wp_query->post;
if ( in_category(array( 'waterproof', 'paint', 'otherwork' )) ) {
    include(STYLESHEETPATH.'/single-work.php');
} elseif ( in_category(array( 'news' )) ) {
    include(STYLESHEETPATH.'/single-news.php');
} elseif ( in_category(array( 'orders' )) ) {
    include(STYLESHEETPATH.'/single-order.php');
}
?>