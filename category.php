<?php
$post = $wp_query->post;
if ( in_category(array( 'paint', 'waterproof', 'otherwork' )) ) {
    include(STYLESHEETPATH.'/category-work.php');
} elseif ( in_category(array( 'news' )) ) {
    include(STYLESHEETPATH.'/category-news.php');
} elseif ( in_category(array( 'orders' )) ) {
    include(STYLESHEETPATH.'/category-orders.php');
}
?>