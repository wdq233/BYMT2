<?php 
/*****
Version: BYMT 2.1.1
Author: 麦葱 http://maicong.me
*****/
?>
<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('侧边栏一(全局)') ) : ?>
	<?php endif; ?>
	<?php if ( is_singular() ): ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('侧边栏二(内页)') ) : ?>
	<?php endif; ?>
	<?php else: ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('侧边栏三(非内页)') ) : ?>
	<?php endif; ?>
	<?php endif; ?>
</div>
