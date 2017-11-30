<?php get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="home-banner-wrapper">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'?>" class="home-logo" alt="inhabitent camping logo">

		</div>



		
<!-- getting shop categories -->
<section class="product-info-container">
	<h1>Shop Stuff</h1>
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
				<a href="<?php echo the_permalink();?>">
				<h2><?php the_title();  ?></h2>
				<p class="home-journal-button">read more</p></a>
			</div>
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
	</ul>
</section>


<section class="home-adventures">
	<h1>latest adventures</h1>
	<ul class="adventure-grid">
		<?php
			$args = array( 'post_type'=>'adventure');
			$posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
			<li>
				<h2><a href="<?php echo get_permalink();?>" class="adventure-title-link">
					<?php the_title();?></a></h2>
				
				<p><a href="<?php echo get_permalink();?>">read more</a></p>
				
			</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>

	<p><a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>" class="more-adventure-link">more adventures</a></p>

</section>





		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
