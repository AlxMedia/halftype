<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
	<div class="card">
		<div class="card-left">
			<div class="card-left-inner group">
				<div class="card-dots-one"></div>
				<div class="card-avatar">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
						<?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?>
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
		<div class="card-right">
			<div class="card-right-inner">
				<div class="card-right-thumbnail">	
					<div class="card-right-thumbnail-inner" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('halftype-square'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-large.png<?php endif; ?>');">
						<a class="card-thumb-link" href="<?php the_permalink(); ?>" rel="bookmark">
							<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
							<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
							<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
						</a>
					</div>
				</div>
				<div class="card-right-content">
					<h2 class="card-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="card-byline"><?php esc_html_e('by','halftype'); ?> <span class="author"><?php the_author_posts_link(); ?></span></div>
					<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
						<div class="card-excerpt">
							<?php the_excerpt(); ?>
						</div>
						<a class="card-more-link" href="<?php the_permalink(); ?>"><span><?php esc_html_e('More','halftype'); ?></span></a>
						<div class="clear"></div>
					<?php endif; ?>
					<div class="card-dots-two"></div>
					<div class="card-category"><i class="fa fa-file"></i> <?php the_category(' / '); ?></div>
					<a class="card-plus-link" href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i></a>
				</div>
			</div>
		</div>
	</div>
</article>