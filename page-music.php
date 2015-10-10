<?php
/*****
Template Name: Music(多乐音乐)
Version: BYMT 2.1.1
Author: 麦葱 http://maicong.me
*****/
?>
<?php get_header(); ?>
<div id="content-wrap">
	<div id="content-main">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<div class="post-content">
				<h2><?php the_title(); ?></h2>
				<hr />
				<?php if(bymt_c('txtad1')): ?>
				<div id="adsense5">
					<div id="adsense-loader5" style="display:none;">
						<?php bymt('txtadcode1'); ?>
					</div>
				</div>
				<?php endif; ?>
				<?php the_content('Read more...'); ?>
				<div style="text-align:center;">
					<iframe width="746" height="524" align="middle" src="http://www.duole.com/application/qihu360" scrolling="no"></iframe>
				</div>
				<hr />
				<?php if(bymt_c('txtad2')): ?>
				<div id="adsense6">
					<div id="adsense-loader6" style="display:none;">
						<?php bymt('txtadcode2'); ?>
					</div>
				</div>
				<?php endif; ?>
                <div class="post-musicshare">
					<div class="post-musiclink">
						<strong>听歌链接：</strong><a href="<?php the_permalink()?>" class="tag-link" title=<?php the_title(); ?>><?php the_permalink()?></a>
					</div>
					<div class="post-share">
						<i class="icon-share"></i> <?php bymt_txt_share(); ?>
					</div>
				</div>
			</div>
			<?php comments_template(); ?>
		</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php if ( !wp_is_mobile() ){ get_sidebar(); } ?>
</div>
<?php get_footer(); ?>
