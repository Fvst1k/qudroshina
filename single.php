<?php ?>


<?php get_header() ?>
<?php
if ( have_posts() ) { the_post(); rewind_posts(); }
if ( in_category(3)) { include(TEMPLATEPATH . '/single-3.php'); }
else {}
?>

<?php
if ( have_posts() ) { the_post(); rewind_posts(); }
if ( in_category(19)) { include(TEMPLATEPATH . '/single-blog.php'); }
else {}
?>
<?php
if ( have_posts() ) { the_post(); rewind_posts(); }
if ( in_category(20)) { include(TEMPLATEPATH . '/single-solo-address.php'); }
else {}
?>


<?php get_footer(); ?>
