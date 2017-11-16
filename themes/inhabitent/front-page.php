<?php get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		
<!-- getting shop categories -->
<section class="product-info-container">
	<h2>Shop Stuff</h2>
	<?php
			$terms = get_terms( array(
					'taxonomy' => 'product-type',
					'hide_empty' => 0,
			) );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :?>
			<div class="product-type-blocks">

				<?php foreach ( $terms as $term ) : ?>

						<div class="product-type-block-wrapper">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
							<p><?php echo $term->description; ?></p>
							<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
						</div>

				<?php endforeach; ?>

			</div>
			
	<?php endif; ?>
</section>



<!-- generate journals on home page -->
<section class="home-journal-posts">
	<h1>Inhabitent Journal</h1>
	<ul>
	<?php
		$args = array( 'posts_per_page'=>3 );
		$posts = get_posts( $args ); // returns an array of posts
	?>
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
		<li>
			<div class="home-image-wrapper">
			<?php the_post_thumbnail('full');?>
			</div>
			<div class="home-journal-info-wrapper">
				<p><?php the_date();?> / <?php comments_number();?></p>
				<h2><?php the_title();  ?></h2>
				<a href="<?php echo the_permalink();?>">read more</a>
			</div>
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
	</ul>
</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
