
            <div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting" style="background-image:url(<?php the_field('bg_background'); ?>)">
              
                <div class="eight columns">
                  <div href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>" <?php post_class( 'eight columns dailyitem inner-post-image' ); ?> role="article">  
                    <div class="inner-logo-box" style="background-image:url('<?php the_field('logo'); ?>')">
                      <span class="inner-logo-name"><?php the_title(); ?></span>
                    </div>
                    <?php //the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
                  </div>
                </div>

                <div class="eight columns bg-white">
                  <section class="six columns offset-by-one padding60" itemprop="articleBody" style="border-bottom:2px solid <?php the_field('bg_color'); ?>; margin-bottom:-2px;">
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

            </div>
