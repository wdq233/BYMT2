<?php
/*****
Template Name: Links(友情链接)
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
				<?php the_content('Read more...'); ?>
				<div class="Mylinks">
					<ul>
						<?php wp_list_bookmarks('orderby=id&category_orderby=id&title_before=<h3>&title_after=</h3>'); ?>
					</ul>
				</div>
			</div>
		<?php comments_template(); ?>
        </div>
		<?php endwhile; endif; ?>
	</div>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(document).ready(function($){
			$(".Mylinks ul ul li a").each(function(e){
				$(this).prepend("<img src=http://g.etfv.co/"+this.href.replace(/^(http:\/\/[^\/]+).*$/, '$1').replace( '$1', 'http://$1' )+" onerror=javascript:this.src='<?php echo TPLDIR . '/images/link-default.png'; ?>'>");
			});
		});
	/* ]]> */
	</script>
	<?php if ( !wp_is_mobile() ){ get_sidebar(); } ?>
</div>
<?php get_footer(); ?>
