<?php
if (!is_page()) { ?>
	<div id="sidebar"class="widget-area side-widget-area"role="complementary">
	<?php if ( is_active_sidebar( 'the_sidebar' ) ) : ?>
		<div class="sidebar-widgets">
			<?php dynamic_sidebar( 'the_sidebar' ); ?>
		</div>
		<?php endif; ?>
		</div>
<?php }
?>