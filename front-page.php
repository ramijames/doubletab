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

<div id="team" class="row extras padding100">
  <section class="one-third column">
    <div class="ex-box">  
      <img src="http://placehold.it/350x200" class="bio-image">
      <h5 class="design">Rami James</h5>
      <p><strong>Design</strong></p>
      <p>Rami is passionate about creating value through visual communication. Time after time he has experienced how strong brands are built through research, user insight and powerful visual concepts. After several years in startups and design studios, he knows how to combine effective tactical measures with long-term brand management.</p>
      <hr>
      <p>
      <a href="mailto:rami@doubletab.com" class="button"><i class="fa fa-at"></i> Email</a>
      <a href="http://www.github.com/ramijames" class="button"><i class="fa fa-github"></i> Github</a>
      </p>
    </div>
  </section>
  <section class="one-third column">
    <div class="ex-box"> 
      <img src="http://placehold.it/350x200" class="bio-image">
      <h5 class="development">Shai James</h5>
      <p><strong>Development</strong></p>
      <p>Bio</p>
      <hr>
      <p>
      <a href="mailto:shai@doubletab.com" class="button"><i class="fa fa-at"></i> Email</a>
      <a href="http://www.github.com/shaijames" class="button"><i class="fa fa-github"></i> Github</a>
      </p>
    </div>
  </section>
  <section class="one-third column">
    <div class="ex-box"> 
      <img src="<?php bloginfo( 'template_directory' ); ?>/images/zlatkobijelic.png" class="bio-image">
      <h5 class="consultation">Zlatko Bijelic</h5>
      <p><strong>Business Development</strong></p>
      <p>Bio</p>
      <hr>
      <p>
      <a href="mailto:zlatko@doubletab.com" class="button"><i class="fa fa-at"></i> Email</a>
      <a href="https://twitter.com/zbijeli" class="button"><i class="fa fa-twitter"></i> Twitter</a>
      </p>
    </div>
  </section>
</div>

<?php get_footer(); ?>
