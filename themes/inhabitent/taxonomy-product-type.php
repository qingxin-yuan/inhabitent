<?php
/**
* The template for displaying archive pages.
*
* @package inhabitent
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<div class="tax-custom-type-header">
<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<h1 class="tax-custom-heading">
<?php echo $term->name; // will show the name?>
</h1>
<p> <?php echo $term->description;?></p>
</div>


<div class="tax-custom-type">

<?php 

$args = array(

  'post_type' => 'products',
  'product-type' => $term->name

);
$posts = get_posts( $args );
?>
<ul class="tax-custom-list">
<?php foreach( $posts as $post ) :setup_postdata( $post ); ?>
  <li>
    <div class="tax-custom-image-wrapper">
  <?php if ( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail( 'medium' ); ?>
  <?php endif; ?>
  </div>
  <div class="tax-custom-text-wrapper">
      <span><?php the_title();?></span><span class="dots">
				<?php echo CFS()->get('price');?></span>
  </div>
  </li>
<?php endforeach; wp_reset_postdata();?>
</ul>

</div>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
