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

<a href="/portfolio/" class="mainbutton">View all Work <i class="fa fa-arrow-right"></i></a>

<div id="services" class="row padding100">
  <section class="">
    <h2 class="white">Doubletab is a <span class="development">development</span>, <span class="design">product design</span>, and <span class="consultation">consultation</span> studio that excels in helping businesses better connect with their audience.</h2>
  </section>
  <section class="one-third column">
    <div class="row">
      <h4 class="white bg-development">Development</h4>
    </div>
    <div class="row">
      <div class="ex-box">
        <ul>
          <li><i class="fa fa-check-circle-o"></i> Laravel</li>
          <li><i class="fa fa-check-circle-o"></i> Web Applications</li>
          <li><i class="fa fa-check-circle-o"></i> Wordpress</li>
          <li><i class="fa fa-check-circle-o"></i> Payment Integration</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="one-third column">
    <div class="row">
      <h4 class="white bg-design">Design</h4>
    </div>
    <div class="row">
      <div class="ex-box">
        <ul>
          <li><i class="fa fa-check-circle-o"></i> Responsive Design</li>
          <li><i class="fa fa-check-circle-o"></i> User Experience</li>
          <li><i class="fa fa-check-circle-o"></i> Interface Design</li>
          <li><i class="fa fa-check-circle-o"></i> Brand Identity</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="one-third column">
    <div class="row">
      <h4 class="white bg-consultation">Analysis</h4>
    </div>
    <div class="row">
      <div class="ex-box">
        <ul>
          <li><i class="fa fa-check-circle-o"></i> Server Administration</li>
          <li><i class="fa fa-check-circle-o"></i> SEO/SEM</li>
          <li><i class="fa fa-check-circle-o"></i> Email Campaigns</li>
          <li><i class="fa fa-check-circle-o"></i> Social Integration</li>
        </ul>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
