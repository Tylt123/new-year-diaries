<?php
/**
 * Ohio WordPress Theme
 *
 * Theme header template
 *
 * @author Colabrio
 * @link   https://ohio.clbthemes.com
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get theme options
$wrapper_boxed = OhioOptions::get( 'page_use_boxed_wrapper', false );
$show_search = OhioOptions::get( 'page_header_search_visibility', true ) && !OhioSettings::is_coming_soon_page();
$show_header = OhioOptions::get( 'page_header_visibility', true ) && !OhioSettings::page_is( 'for_builder' ) && !OhioSettings::is_coming_soon_page();
$show_cursor = OhioOptions::get_global( 'page_custom_cursor', false );
$show_header_subheader = OhioSettings::subheader_is_displayed();
$header_layout = OhioOptions::get( 'page_header_menu_style', 'style1' );
$header_spacer = OhioOptions::get( 'page_header_add_cap', true );
$mobile_menu = OhioOptions::get_global( 'page_mobile_menu_initial_resolution' );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

	<?php
		// Start bufferization to compute all dynamic CSS styles to show it before <body>
		// OhioBuffer::start_content_bufferization();

		wp_head();
	?>
</head>
<body <?php body_class(); ?>>
	<?php
		if ( function_exists( 'elementor_theme_do_location' ) ) {
			$elementor_header = elementor_theme_do_location( 'header' );
			$show_header = $show_header && ! $elementor_header;
		}
	?>
	<div id="page" class="site">

		<?php get_template_part( 'parts/elements/preloader' ); ?>
		<?php get_template_part( 'parts/headers/elements-bar' ); ?>

		<?php if ( $show_cursor ): ?>

			<div class="circle-cursor circle-cursor-outer"></div>
			<div class="circle-cursor circle-cursor-inner">
				<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.06055 0H20.0605V18H17.0605V5.12155L2.12132 20.0608L0 17.9395L14.9395 3H2.06055V0Z"/>
				</svg>
			</div>

		<?php endif; ?>

		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'ohio' ); ?></a>

		<?php if ( $wrapper_boxed ): ?>

		<div class="boxed-container">

		<?php endif; ?>

		<?php if ( !OhioHelper::is_optimized_flow( 'header' ) ): ?>

			<?php get_template_part( 'parts/headers/subheader' ); ?>

			<?php
				$header_cap_class = '';

				if ( $header_layout == 'style3' ) {
					$header_cap_class .= ' header-2';
				}
				if ( $show_header_subheader ) {
					$header_cap_class .= ' subheader_included';
				}
				if ( $show_header ) {
					switch ( $header_layout ) {
						case 'style1' :
							get_template_part( 'parts/headers/header', 'style-1' );
							break;
						case 'style2' :
							get_template_part( 'parts/headers/header', 'style-2' );
							break;
						case 'style3' :
							get_template_part( 'parts/headers/header', 'style-3' );
							break;
						case 'style4' :
							get_template_part( 'parts/headers/header', 'style-4' );
							break;
						case 'style5' :
							get_template_part( 'parts/headers/header', 'style-5' );
							break;
						case 'style6' :
							get_template_part( 'parts/headers/header', 'style-6' );
							break;
						case 'style7' :
							get_template_part( 'parts/headers/header', 'style-7' );
							break;
						default :
							get_template_part( 'parts/headers/header', 'style-1' );
							break;
					}
				}
			?>

			<?php 
				if ( $show_search ) {
					get_template_part( 'parts/elements/search_form' );
				}
			?>

		<?php endif; ?>

		<?php if ( isset( $header_layout ) && $header_layout == 'style6' ): ?>

		<div class="content-right">

		<?php endif; ?>

		<div id="content" class="site-content" data-mobile-menu-resolution="<?php echo esc_attr( isset( $mobile_menu ) ? $mobile_menu : '' ); ?>">

			<?php if ( isset( $show_header ) && $header_spacer && $show_header ): ?>

			<div class="header-cap<?php echo esc_attr( $header_cap_class ); ?>"></div>

			<?php endif; ?>