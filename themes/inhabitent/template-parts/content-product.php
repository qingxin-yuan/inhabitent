<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
</header>


<div class="entry-content">
  <h1><?php the_title();?></h1>
  <h3><?php echo CFS()->get('price');?></h3>
  <p><?php the_content(); ?></p>

  <div class="single-post-social-media">
    <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>like</a></span>
    <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>tweet</a></span>
    <span><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i>pin</a></span>
	</div>

</div>