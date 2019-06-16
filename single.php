<?php
/**
 * Szablon pojedynczego wpisu
 */

get_header(); ?>

  <header class="single-header">
    <a href="/#main-thumbnails">
      <video class="top-video" loop autoplay muted poster="<?php the_field('header-video-single-poster', 26);?>">
        <source src="<?php the_field('header-video-single-webm', 26);?>" type="video/webm">
        <source src="<?php the_field('header-video-single-mp4', 26);?>">
        <?php if( get_field('header-video-single-ogv', 26)) {
          the_field('header-video-single-ogv', 26);
        }?>
        <?php the_field('header-video-single-unsupported-text', 26);?>
      </video>
    </a>
  </header>
  <section class="main-content">
        <?php
        while ( have_posts() ) : the_post();
        the_content();
        endwhile;
        ?>
    <nav class="post-nav ">
      <?php
     $nextPost = get_next_post();
    if($nextPost) {
        $nextPostID = $nextPost->ID;
?>
    <a class="prev-post" href="<?php echo get_permalink( $nextPostID ); ?>">
        <img src="http://gto.kjhank.pl/wp-content/themes/gto/assets/arrow-prev.svg" alt="strzałka w lewo">
    </a>
<?php } else {
        $first_post = get_posts( array(
            'posts_per_page'   => 1,
            'order' => 'ASC'
        ) );
        ?>
        <a class="prev-post" href="<?php echo get_permalink( $first_post[0]->ID ); ?>">
            <img src="http://gto.kjhank.pl/wp-content/themes/gto/assets/arrow-prev.svg" alt="strzałka w lewo">
        </a>

<?php } ?>

<?php
    $prevPost = get_previous_post();
    if($prevPost) {
        $prevPostID = $prevPost->ID;
?>
    <a class="next-post" href="<?php echo get_permalink( $prevPostID ); ?>">
        <img src="http://gto.kjhank.pl/wp-content/themes/gto/assets/arrow-next.svg" alt="strzałka w prawo">
    </a>
<?php } else {
    $latest_post = get_posts( array(
        'posts_per_page'   => 1,
        'order' => 'DESC'
    ) );
    ?>
    <a class="next-post" href="<?php echo get_permalink( $latest_post[0]->ID ); ?>">
        <img src="http://gto.kjhank.pl/wp-content/themes/gto/assets/arrow-next.svg" alt="strzałka w prawo">
    </a>
<?php } ?>
    </nav>
  </section>
  <footer class="single-footer">
    <span class="thikk">GTO.AGENCY</span> - od 1997 r.
  </footer>

<?php get_footer(); ?>
