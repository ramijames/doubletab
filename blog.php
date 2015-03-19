<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
 
<div class="row">

      <div class="title_row">
        <header class="article-header">
            <h1 class="page-title" itemprop="headline">Blog</h1>
            <h5>What we've been up to recently, here at Doubletab.</h5>
        </header>
      </div>

      <div class="entry-content">
        <div id="inner-content" class="six columns offset-by-one padding100">
        

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article>
          <section class="two columns">       
            <small>
            <?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                 /* the time the post was published */
                 '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                  /* the author of the post */
                  '<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
              ); ?>
              <hr style="width:90%;margin-right:10%">
            </small>
          </section>
          <section class="six columns"> 
            <h4 class="h2 entry-title">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h4>
            <?php the_excerpt(); ?>
          </section> 

        </article>

        <?php endwhile; ?>
 
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>
 
        <?php endif; ?>
        </div>
      </div>

</div>

  
<?php get_footer(); ?>
