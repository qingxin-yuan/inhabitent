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
<h1 class="products-archive-heading">latest adventures<h1>


</header><!-- .page-header -->


<ul class="adventures-archive-list">
	<?php
		$args = array( 'post_type'=>'adventure');
		$posts = get_posts( $args ); // returns an array of posts
	?>
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
		<li>
		<div style="
		background: linear-gradient(30deg,rgba(60,60,60,0.5),rgba(60,60,60,0.5)),url('<?php echo CFS()->get('feature_image');?>');
		background-size:cover;">
			<a href="<?php echo get_permalink();?>" class="adventure-title-link">
				<h1><?php the_title();?></h1>
			</a>
			<a href="<?php echo get_permalink();?>">
				<p>read more</p>
			</a>
		</div>
	
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
</ul>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
