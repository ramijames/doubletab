<?php get_header(); ?>

			<div id="content">

			<div class="topbox">
				<div class="topboxcontent">
					<section class="cd-intro">
							<h1 class="cd-headline letters type">
								<span>Designers need</span> 
								<span class="cd-words-wrapper">
									<b class="is-visible">Freebies</b>
                  <b>Downloads</b>
                  <b>Stock Photos</b>
                  <b>Fonts</b>
                  <b>Icons</b>
                  <b>Vectors</b>
								</span>
							</h1>
						</section> <!-- cd-intro -->
					<!-- p>Inspiration, Freebies, Downloads, Graphics, Stock Photos, Fonts, Icons, Vectors, and all the best that the web has to offer.</p-->
				</div>
			</div>

				<div id="inner-content" class="wrap cf">

						

						<main id="indexmain" class="m-all t-3of3 d-7of7 cf dailyset" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php include('searchform.php'); ?>

							<?php
								// I love WordPress so
								query_posts("cat=6");
							?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

									<article id="post-<?php the_ID(); ?>" <?php post_class( 'm-all t-3of3 d-1of3 cf dailyitem' ); ?> role="article">

										<header class="article-header" style="background:<?php the_field('bg_color'); ?>">
											<h5 class="h2 entry-title"><?php the_title(); ?></h5>
										</header>

										<!--section class="entry-content cf">
											<?php //the_content(); ?>
										</section-->

										<footer class="article-footer cf">
											<p class="footer-comment-count">
												<?php comments_number( __( 
													'<span>0 Comments</span>', 'bonestheme' ), 
													__( '<span>1 Comment</span>', 'bonestheme' ), 
													__( '<span>% Comments</span>', 'bonestheme' ) )
												;?>
											</p>
											<p class="byline entry-meta vcard">
		                  	<?php printf( '<time class="updated entry-time" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>' ); ?>
											</p>

		                 	<?php /* printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') );*/ ?>

		                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


										</footer>

									</article>

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


						</main>
					
						<div class="newsbox">
							<h3>Sign up with your email for our Newsletter</h3>
							<!-- Begin MailChimp Signup Form -->
								<div id="mc_embed_signup">
									<form action="//weeklypixels.us5.list-manage.com/subscribe/post?u=0cd4c231af47d2b7d40a5eac6&amp;id=fbfa2e5c42" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									    <div id="mc_embed_signup_scroll">
										
									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address </label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									    <div style="position: absolute; left: -5000px;"><input type="text" name="b_0cd4c231af47d2b7d40a5eac6_fbfa2e5c42" tabindex="-1" value=""></div>
									    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
									    </div>
									</form>
								</div>
							<!--End mc_embed_signup-->
						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
