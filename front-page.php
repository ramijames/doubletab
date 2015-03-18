<?php get_header(); ?>

<div class="row">
  <section id="homepagemain" class="eight columns">
    
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    <div class="eight columns padding100"><h1><span class"animated tada">Hello!</span> We are Doubletab<br> <small>&mdash; a wizzbang dev studio.</small></h1></div>
  </section>
</div>

<div class="title_row padding60">
  <h5 class="centered">Featured Work</h5>
</div>

<div class="row portfolio_row">

<?php
  // Create a category as your portfolio set. Assign the category id to this post query.
  query_posts( array ( 'category_name' => 'portfolio', 'posts_per_page' => -1 ) );
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>" <?php post_class( 'four columns dailyitem post-image' ); ?> role="article" style="background-image:url(<?php the_field('bg_background'); ?>)">  
      <div class="logo-box" style="background-image:url('<?php the_field('logo'); ?>')">
        <span class="logo-name" style="background-color: <?php the_field('bg_color'); ?>"><?php the_title(); ?></span>
      </div>
      <?php //the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
    </a>

<?php endwhile; ?>

    <?php bones_page_navi(); ?>

<?php else : ?>

    <article id="post-not-found" class="hentry cf">
      <div class="article-header">
        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
      </div>
      <div class="entry-content">
        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
      </div>
      <div class="article-footer">
        <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
      </div>
    </article>

<?php endif; ?>

</div>

<a href="/portfolio/" class="mainbutton">View all Projects <i class="fa fa-arrow-right"></i></a>

<?php get_footer(); ?>
