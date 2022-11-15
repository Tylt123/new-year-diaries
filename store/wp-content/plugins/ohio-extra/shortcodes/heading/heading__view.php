<?php

/**
* WPBakery Page Builder Ohio Heading shortcode view
*/

?>
<div class="ohio-widget heading<?php echo esc_attr( $wrapper_classes ); ?>" id="<?php echo esc_attr( $wrapper_id ); ?>" <?php echo esc_attr( $animation_attrs ); ?>>
	
	<?php if ( $divider_alignment == 'before_title' ) : ?>
		<div class="divider"></div>
	<?php endif; ?>

	<?php if ( $subtitle_type_layout == 'top_subtitle' ) : ?>
		<div class="subtitle">
			<?php echo $subtitle; ?>
		</div>

		<?php if ( $divider_alignment == 'middle' ) : ?>
			<div class="divider"></div>
		<?php endif; ?>

	<?php endif; ?>

	<<?php echo $heading_type; ?> class="title">
		<?php echo $title; ?>
	</<?php echo $heading_type; ?>>

	<?php if ( $subtitle_type_layout == 'bottom_subtitle' ) : ?>

		<?php if ( $divider_alignment == 'middle' ) : ?>
			<div class="divider"></div>
		<?php endif; ?>

		<div class="subtitle">
			<?php echo $subtitle; ?>
		</div>
	<?php endif; ?>

	<?php if ( $divider_alignment == 'after_title' ) : ?>
		<div class="divider"></div>
	<?php endif; ?>
	
</div>