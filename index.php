<?php
  get_header();
  $style_dir = get_stylesheet_directory_uri();
?>

  <header class="main-header">
    <video class="top-video" loop autoplay muted poster="<?php the_field('header-video-poster', 26);?>">
      <source src="<?php the_field('header-video-webm', 26);?>" type="video/webm">
      <source src="<?php the_field('header-video-mp4', 26);?>">
      <?php if( get_field('header-video-ogv', 26)) {
        the_field('header-video-ogv', 26);
      }?>
      <?php the_field('header-video-unsupported-text', 26);?>
    </video>
  </header>
<section class="main-thumbnails" id="main-thumbnails">
  <?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
    $post_id = get_the_ID();?>
    <article class="creation-thumbnail">
      <a class="creation-poster" href="<?php the_permalink();?>">
        <img class="creation-thumbnail-image"
             loading="lazy"
             src="<?php the_field('creation-thumbnail-image-375px', $post_id);?>"
             alt="<?php the_title();?> - <?php the_field('creation-subtitle', $post_id);?>"
             srcset="
                     <?php the_field('creation-thumbnail-image-750px', $post_id);?> 1x,
                     <?php the_field('creation-thumbnail-image-1500px', $post_id);?> 2x">
        <div>
          <h2 class="client-name"><?php the_title();?></h2>
          <h3 class="creation-subtitle"><?php the_field('creation-subtitle', $post_id);?></h3>
        </div>
      </a>
    </article>
	<?php } // end while
} // end if
?>

</section>
<footer class="main-footer">
  <video class="bottom-video" loop autoplay muted poster="<?php the_field('footer-video-poster', 26);?>">
    <source src="<?php the_field('footer-video-webm', 26);?>" type="video/webm">
    <source src="<?php the_field('footer-video-mp4', 26);?>">
    <?php if( get_field('footer-video-ogv', 26)) {
      the_field('footer-video-ogv', 26);
    }?>
    <?php the_field('footer-video-unsupported-text', 26);?> :-(
  </video>
</footer>
<?php get_footer(); ?>
