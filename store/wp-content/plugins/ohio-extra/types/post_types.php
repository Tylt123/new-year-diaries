<?php

	/**
	* Visual Composer Ohio Post category type
	*/
	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'ohio_post_types', 'ohio_post_types_settings_field', plugins_url( 'post_types.js' , __FILE__ ) );
	}
	
	function ohio_post_types_settings_field( $settings, $value ) {
		$exploded_value = explode(',', $value);
		$categories = get_terms( array(
			'taxonomy' => 'category',
			'hide_empty' => false,
		) );

		ob_start();

?>
		<div class="ohio_extra_post_types_block">
			<input type="hidden" name="<?php echo esc_attr( $settings['param_name'] ); ?>" class="wpb_vc_param_value" value="<?php echo esc_attr( $value ); ?>">
			<select multiple="multiple">
				<?php
					foreach ( $categories as $key => $category ) {
						echo '<option value="' . $category->slug . '"';
						if ( in_array( $category->slug, $exploded_value ) || in_array( $category->term_id, $exploded_value ) ) {
							echo ' selected="selected"';
						}
						echo '>' . $category->name . '</option>';
					}
				?>
			</select>
		</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}