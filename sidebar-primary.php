<?php
if (!is_active_sidebar('sidebar-primary')) {
    return;
}
?>
<aside id="main-sidebar" class="sidebar-area">
	<div class="sidebar-inner">
		<?php dynamic_sidebar('sidebar-primary'); ?>
	</div>
</aside>