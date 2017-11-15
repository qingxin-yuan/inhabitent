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

<!-- generate journals on home page -->
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



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
