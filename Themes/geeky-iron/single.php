<?php get_header();?>
<?php get_sidebar();?>	
	<div id="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-wrap">
			<div class="post-date">
				<span class="date-month">
				<?php the_time('M'); ?>
				</span>
				<span class="date-day">
				<?php the_time('j'); ?>
				</span>
				<span class="date-year">
				<?php the_time('Y'); ?>
				</span>
			</div>
			<div class="post-content-wrap">
				<div class="post-title">
				<a href="<?php the_permalink() ?>" rel="bookmark"></a><?php edit_post_link('<span class="col-text">'.__('Edit').'</span>'); ?>
				</div>
				<?php the_content(__('(<span class="col-text">'.__('More...').'</span>)')); ?>
				
				<div class="post-info">
				<img src="<?php bloginfo('template_directory'); ?>/images/user-icon.gif" alt="" class="post-info-icon" /><?php the_author(); ?><img src="<?php bloginfo('template_directory'); ?>/images/category-icon.gif" alt="" class="post-info-icon" /><b><?php the_category(', '); ?></b>
				<br/>
				<?php the_tags('<img src="./wp-content/themes/geeky-iron/images/tag.png" alt="'.__('Tags').'" />', ', ', ''); ?>
				</div>
			</div>
		</div>	
		<br clear="all" />
		<?php comments_template();?>
		<?php endwhile; else: ?>

		<?php _e('Sorry, no posts matched your criteria.'); ?>

		<?php endif; ?>
		<br clear="all" />
		<div class="pagination">
		<?php previous_posts_link(__('&laquo; Previous Page')) ?>
		</div>
		<div class="pagination">
		<?php next_posts_link(__('Next Page &raquo;')) ?>
		</div>
	</div>
<?php get_footer(); ?>