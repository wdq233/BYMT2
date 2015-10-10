<?php
/*****
Template Name: Readerwalls(读者墙)
Version: BYMT 2.1.1
Author: 麦葱 http://maicong.me
*****/
?>
<?php get_header(); ?>
<div id="content-wrap">
	<div id="content-main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<div class="post-content">
				<h2><?php the_title(); ?></h2>
				<?php the_content('Read more...'); ?>
				<?php if(function_exists('bymt_mostactive')) bymt_mostactive('40', '12 MONTH'); ?>
			</div>
		</div>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
	</div>
	<?php if ( !wp_is_mobile() ){ get_sidebar(); } ?>
</div>
<?php get_footer(); ?>
