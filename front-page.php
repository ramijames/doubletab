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
        <span class="logo-name"><?php the_title(); ?></span>
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

<a href="" class="mainbutton">View all Work <i class="fa fa-arrow-right"></i></a>

<div id="services" class="row padding60">
  <section class="">
    <h1 class="white">Doubletab is a web design, product design, and development studio that excels in helping businesses better connect with their audience.</h1>
  </section>
  <section class="">
    <h4 class="white">Development</h4>
    <hr>
    <div class="four columns">
      img
    </div>
    <div class="four columns">
      <ul>
        <li>Websites</li>
        <li>Web Applications</li>
        <li>Mobile Applications</li>
        <li>Content Management</li>
        <li>E-commerce Systems</li>
      </ul>
    </div>
  </section>
  <section class="">
    <h4 class="white">Design</h4>
    <hr>
    <div class="four columns">
      img
    </div>
    <div class="four columns">
      <ul>
        <li>Web &amp; Mobile Design</li>
        <li>User Experience</li>
        <li>Product Design</li>
        <li>User Interface Design</li>
        <li>Brand Identity</li>
      </ul>
    </div>
  </section>
  <section class="">
    <h4 class="white">Analysis</h4>
    <hr>
    <div class="four columns">
      img
    </div>
    <div class="four columns">
      <ul>
        <li>Server Administration</li>
        <li>SEO/SEM</li>
        <li>Email Campaigns</li>
        <li>Content Strategy</li>
        <li>Social Media Integration</li>
      </ul>
    </div>
  </section>
</div>

<?php get_footer(); ?>
