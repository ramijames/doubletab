<?php get_header(); ?>
 
<div class="row">

      <div class="title_row">
        <header class="article-header">
            <h1 class="page-title" itemprop="headline">Blog</h1>
            <h5>What we've been up to recently, here at Doubletab.</h5>
        </header>
      </div>

      <div class="row padding100">
        <div id="inner-content" class="eight columns">
        <?php
          // Create a category as your portfolio set. Assign the category id to this post query.
          query_posts( array ( 'category_name' => 'blog', 'posts_per_page' => -1 ) );
        ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>" <?php post_class( 'eight columns' ); ?> role="article">  
          <h4 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
          <p class="byline entry-meta vcard">
            <?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                             /* the time the post was published */
                             '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                              /* the author of the post */
                              '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                          ); ?>
          </p>

        </a>
        <hr>

        <?php endwhile; ?>
 
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>
 
        <?php endif; ?>
        </div>
      </div>

</div>

  
<?php get_footer(); ?>
