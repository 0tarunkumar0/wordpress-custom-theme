<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
get_header(); ?>

<?php

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

?>
		<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
		<p> <?php the_content(); ?> <p>
			Posted by <?php the_author(); ?> on <?php the_time( get_option( 'date_format' ) );?>
<?php
	endwhile;
 else :
	echo "No posts present.";
endif ;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>