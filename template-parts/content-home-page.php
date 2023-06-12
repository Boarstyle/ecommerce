<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1><?php echo get_the_title(); ?></h1>
<?php echo the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
