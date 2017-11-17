

<div class="tax-custom-type-header">
<?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<h1>
<?php echo $term->name; // will show the name?>
</h1>
<p> <?php echo $term->description;?></p>
</div>


<div class="tax-custom-type">

<?php 
// $args = array(
// 	'tax_query' => array(
// 		array(
// 			'taxonomy' => 'product-type',
// 			'field' => 'slug',
// 			'terms' => $term->name
// 		)
// 	)
// );
// $posts = get_posts( $args );
$args = array(

  'post_type' => 'products',
  'product-type' => $term->name

);
$posts = get_posts( $args );
?>
<ul>
<?php foreach( $posts as $post ) :setup_postdata( $post ); ?>
  <li class="product-type-block-wrapper">
  <?php if ( has_post_thumbnail() ) : ?>
  <?php the_post_thumbnail( 'medium' ); ?>
  <?php endif; ?>

  <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
  echo CFS()->get('price');?>
  </li>
<?php endforeach; wp_reset_postdata();?>
</ul>



</div>