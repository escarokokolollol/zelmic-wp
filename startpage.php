<?php
/**
* Template Name: Startpage
*
*/
?>

<?php get_header(); ?>

<div class="startpage">
  <div class="hero-container">
    <div class="hero-text">
      <h2>We are specialized in</h2>
      <h1>Topical delivery of pharmaceuticals</h1>
      <a href="http://localhost:8888/zelmic/about/">explore our services</a>
    </div>
    <video autoplay muted loop src="http://localhost:8888/zelmic/wp-content/uploads/2020/11/zelmic-video.mp4" ></video>
  </div>


  <?php if ( have_posts() ) :?>
    <?php while ( have_posts() ) : the_post()?>
      <div class="content">
        <?php echo the_content() ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>


<?php get_footer(); ?>