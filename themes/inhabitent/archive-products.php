<?php
/**
* The template for displaying archive pages.
*
* @package inhabitent
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<?php if ( have_posts() ) : ?>

<header class="page-header">
<h1 class="products-archive-heading">shop stuff<h1>
<?php 


$terms = get_terms( array(
		'taxonomy' => 'product-type',
		'hide_empty' => 0,
) );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :?>

<ul class="products-archive-list">

	<?php foreach ( $terms as $term ) : ?>

		<li>
			<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
		</li>

	<?php endforeach; ?>
</ul>


<?php endif; ?>

</header><!-- .page-header -->

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>


<header class="entry-header">
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail( 'medium' ); ?>
<?php endif; ?>
</header>

<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
echo CFS()->get('price');
?>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
