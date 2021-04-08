<?php get_header(); ?>

<div class="content">
	
	<?php while ( have_posts() ): the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
			<div class="card">
				<div class="card-left">
					<div class="card-left-inner group">
						<div class="card-left-inner-single">
							<div class="card-avatar">
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
									<?php echo get_avatar( get_the_author_meta( 'ID' ), '128' ); ?>
								</a>
							</div>
							<div class="card-date">
								<div class="card-date-month"><?php the_time('M') ?></div>
								<div class="card-date-day"><?php the_time('d') ?></div>
								<div class="card-date-year"><?php the_time('Y') ?></div>
							</div>
							<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
								<a class="card-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="card-right">
					<div class="card-right-inner">
						<div class="card-category-single"><i class="fa fa-file"></i> <?php the_category(' / '); ?></div>
						<div class="card-dots-three"></div>
						<header class="entry-header group">
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<div class="card-byline">
								<?php esc_html_e('by','halftype'); ?> <span class="author"><?php the_author_posts_link(); ?></span>
								<span class="card-date-alt">&middot; <?php the_time( get_option('date_format') ); ?></span>
							</div>
						</header>
						
						<div class="entry-media">
							<?php if ( get_theme_mod('post-formats-enable','off') == 'on' || get_post_format() ) : ?>
								<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
							<?php else: ?>
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('halftype-large'); ?>
								<?php endif; ?>
							<?php endif; ?>
						</div>
						<div class="entry-content">
							<div class="entry themeform">	
								<?php the_content(); ?>
								<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','halftype'),'after'=>'</div>')); ?>
								<div class="clear"></div>				
							</div><!--/.entry-->
						</div>
						<div class="entry-footer group">
							
							<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','halftype').'</span> ','','</p>'); ?>
							
							<div class="clear"></div>
							
							<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
								<div class="author-bio">
									<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
									<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
									<p class="bio-desc"><?php the_author_meta('description'); ?></p>
									<div class="clear"></div>
								</div>
							<?php endif; ?>
							
							<div class="entry-bar">
								<div class="entry-bar-left">
									<?php do_action( 'alx_ext_sharrre' ); ?>
								</div>
								<div class="entry-bar-right">
									<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
								</div>
							</div>

							<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
							
							<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
							
						</div>

					</div>
				</div>
			</div>
			
		</article>
	
	<?php endwhile; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>