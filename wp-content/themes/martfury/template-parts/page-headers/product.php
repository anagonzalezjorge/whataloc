<?php
if ( ! intval( martfury_get_option( 'product_breadcrumb' ) ) ) {
	return;
}
?>

<div class="page-header page-header-catalog">
    <div class="page-breadcrumbs">
        <div class="container">
			<?php martfury_get_breadcrumbs(); ?>
        </div>
    </div>
</div>