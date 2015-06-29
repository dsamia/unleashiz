<?php
/**
 * Template Name: Page Accueil
 *
 * @package WordPress
 * @subpackage unleashiz
 * @since unleashiz
 */
get_header(); ?>
<?php
	/*if ( is_front_page() && unleashiz_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}*/
?>
<?php include 'index-teaser.php'; ?>
<?php include 'index-concept.php'; ?>

<?php include 'index-benefices.php'; ?>

<?php include 'index-solution.php'; ?>

<?php include 'index-conviction.php'; ?>


<?php include 'index-p7.php'; ?>

<?php include 'index-contact.php'; ?>
		<?php
			/*if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				unleashiz_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;*/
		?>

	<?php //get_sidebar( 'content' ); ?>
<?php
//get_sidebar();
get_footer();
