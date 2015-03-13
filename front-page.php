<?php get_header(); ?>

<div class="row">
  <section id="homepagemain" class="eight columns">
    
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    <div class="eight columns padding100"><h1><span class"animated tada">Hello!</span> We are Doubletab<br> <small>&mdash; a wizzbang dev studio.</small></h1></div>
  </section>
</div>

<div class="row">

<?php
  // Create a category as your portfolio set. Assign the category id to this post query.
  query_posts("cat=3");
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>" <?php post_class( 'four columns dailyitem' ); ?> role="article">
      

      <header class="article-header">
        <h5 class="h2 entry-title"><?php the_title(); ?></h5>
        <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
      </header>

      <div class="post-image eight columns padding40" style="background-image:url(<?php the_field('bg_background'); ?>)"></div>

    </a>



<?php endwhile; ?>

    <?php bones_page_navi(); ?>

<?php else : ?>

    <article id="post-not-found" class="hentry cf">
      <header class="article-header">
        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
      </header>
      <section class="entry-content">
        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
      </section>
      <footer class="article-footer">
        <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
      </footer>
    </article>

<?php endif; ?>

</div>

<?php get_footer(); ?>
