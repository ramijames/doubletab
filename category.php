<?php get_header(); ?>
 
<div class="row">

      <div class="title_row">
        <header class="article-header">
        <?php if (is_category()) { ?>
          <h1 class="page-title" itemprop="headline">
            <span><?php _e( '', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
          </h1>

        <?php } elseif (is_tag()) { ?>
          <h1 class="page-title" itemprop="headline">
            <span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
          </h1>

        <?php } elseif (is_author()) {
          global $post;
          $author_id = $post->post_author;
        ?>
          <h1 class="page-title" itemprop="headline">

            <span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

          </h1>
        <?php } elseif (is_day()) { ?>
          <h1 class="page-title" itemprop="headline">
            <span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
          </h1>

        <?php } elseif (is_month()) { ?>
            <h1 class="page-title" itemprop="headline">
              <span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
            </h1>

        <?php } elseif (is_year()) { ?>
            <h1 class="page-title" itemprop="headline">
              <span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
            </h1>
        <?php } ?>
        </header>
      </div>

      <div class="row bg-white">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>" <?php post_class( 'four columns dailyitem post-image' ); ?> role="article" style="background-image:url(<?php the_field('bg_background'); ?>)">  
          <div class="logo-box" style="background-image:url('<?php the_field('logo'); ?>')">
            <span class="logo-name"><?php the_title(); ?></span>
          </div>
        </a>

        <?php endwhile; ?>
 
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>
 
        <?php endif; ?>

      </div>

</div>

  
<?php get_footer(); ?>
