<?php 
/**
* Template Name: About Page
*
*/

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <article id="post-<?php the_ID();?>" <?php post_class();?>>
      <header class="entry-header custom-hero">
        <div class="container">
          <?php the_title('<h1 class="entry-title">','</h1>');?>
        </div>
      </header>
      <div class="container">
        <div class="entry-content">
          <h1>Our Story</h1>
          <?php echo CFS()->get('about_our_story');?>

          <h1>Our Team</h1>
          <?php echo CFS()->get('about_our_team');?>
        </div>
      </div>

    </article>

  </main><!-- #main -->

</div><!-- #primary -->
<?php get_footer();?>