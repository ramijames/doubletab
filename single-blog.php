<?php
/*
Single Post Template: Single Blog
*/
?>


<?php get_header(); ?>

			<div class="title_row">
        <header class="article-header">
            <h1 class="page-title" itemprop="headline">Blog</h1>
            <h5>What we've been up to recently, here at Doubletab.</h5>
        </header>
      </div>

			<div class="row entry-content">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<section class="blog-post-image eight columns padding100 centered" style="background-image:url(<?php the_field('bg_background'); ?>)">
								<h1 class="white"><?php the_title(); ?></h1>
								<h5 class="white">
								<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                     /* the time the post was published */
                     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                      /* the author of the post */
                      '<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                  ); ?>
                </h5>
                <?php echo sharing_display(); ?>
							</section>
							<article class="six columns offset-by-one padding100">
								<div id="inner-content">
									<section itemprop="articleBody">
										<?php
	                    // the content (pretty self explanatory huh)
	                    the_content();

	                    wp_link_pages( array(
	                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
	                      'after'       => '</div>',
	                      'link_before' => '<span>',
	                      'link_after'  => '</span>',
	                    ) );
	                  ?>
									</section>
								</div>
							</article>
							


						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<div class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</div>
									<div class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</div>
									<div class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</div>
							</article>

						<?php endif; ?>
					
				</div>
			</div>

<?php get_footer(); ?>
