<h2 class="clb-headline"><?php _e( 'System Status', 'ohio-extra' ); ?></h2>

<!-- Group 2cl -->
<div class="clb-group">
	<div class="clb-group-headline">
		<h3><?php _e( 'Theme Information', 'ohio-extra' ); ?></h3>
	</div>
	<table class="clb-group-content clb-group-table table-col-2">
		<tbody>
			<tr>
				<td><?php _e( 'Theme version', 'ohio-extra' ); ?>:</td>
				<td id="ohio-version-table-value">
					<?php
						$ohio_theme = wp_get_theme( get_template() );
						$ohio_version = $ohio_theme->get( 'Version' ) ? $ohio_theme->get( 'Version' ) : '2.0.0';
						$last_stable = get_option('ohio_last_available_version', '2.0.0');

						if ( version_compare( $ohio_version, $last_stable ) >= 0 ) {
							echo '<mark class="yes">' . $ohio_version . '</mark>';
						} else {
							echo '<mark class="no">' . $ohio_version . '</mark>';
						}
					?>
						<span class="ohio-new-version-available" style="<?php if ( version_compare( $ohio_version, $last_stable ) >= 0 ) { echo 'display:none'; } ?>">
							- <a href="#"><?php _e( 'New version available', 'ohio-extra' ) ?></a>&nbsp;
							<b id="ohio-version-table-placeholder"><?php echo $last_stable; ?></b>
							<a class="tips" target="_blank" href="https://docs.clbthemes.com/ohio/#updating"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a>
						</span>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Theme license', 'ohio-extra' ); ?>:</td>
				<td>
					<?php
						if ( get_option( 'ohio_license_code', false ) ):
							echo '<label class="active"><mark class="yes">Activated</mark></label>';
						else:
							echo '<label class="inactive"><mark class="no">Not activated</mark></label> <a class="tips" target="_blank" href="http://localhost/ohio/wp-admin/admin.php?page=ohio_hub"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a>';
						endif;
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Theme directory', 'ohio-extra' ); ?>:</td>
				<td><?php echo '..' . get_raw_theme_root( get_stylesheet() ) . '/' . get_stylesheet(); ?></td>
			</tr>
			<tr>
				<td><?php _e( 'Child theme', 'ohio-extra' ); ?>:</td>
				<td>
					<mark class="yes"><?php echo ( get_template_directory() === get_stylesheet_directory() ) ? 'Disabled' : 'Enabled'; ?></mark> 
					<a class="tips" target="_blank" href="https://developer.wordpress.org/themes/advanced-topics/child-themes/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Group 3cl -->
<div class="clb-group">
	<div class="clb-group-headline">
		<h3><?php _e( 'Server Environment', 'ohio-extra' ); ?></h3>
		<a href="https://docs.clbthemes.com/ohio/#requirements" target="_blank" class="btn btn-flat"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg><?php _e( 'Requirements', 'ohio-extra' ); ?></a>
	</div>
	<table class="clb-group-details clb-group-table table-col-3">
		<tbody>
			<tr>
				<td><?php _e( 'Directive', 'ohio-extra' ); ?></td>
				<td><?php _e( 'Required value', 'ohio-extra' ); ?></td>
				<td><?php _e( 'Current value', 'ohio-extra' ); ?></td>
			</tr>
		</tbody>
	</table>
	<table class="clb-group-content clb-group-table table-col-3">
		<tbody>
			<tr>
				<td><?php _e( 'PHP version:', 'ohio-extra' ); ?></td>
				<td>7.0.0</td>
				<td>
					<?php
						if ( explode( ',', phpversion() )[0] >= 7 ) {
							echo '<mark class="yes">' . phpversion() . '</mark>';
						} else {
							echo '<mark class="no">' . phpversion() . '</mark>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'PHP time limit', 'ohio-extra' ); ?> <span><?php _e( '(max_execution_time)', 'ohio-extra' ); ?></span>:</td>
				<td>120</td>
				<td>
					<?php
						if ( ini_get( 'max_execution_time' ) >= 120 ) {
							echo '<mark class="yes">' . ini_get( 'max_execution_time' ) . '</mark>';
						} else {
							echo '<mark class="no">' . ini_get( 'max_execution_time' ) . '</mark>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'PHP memory limit', 'ohio-extra' ); ?> <span><?php _e( '(memory_limit)', 'ohio-extra' ); ?></span>:</td>
				<td>256M</td>
				<td>
					<?php
						if ( intval( ini_get( 'memory_limit' ) ) >= 256 ) {
							echo '<mark class="yes">' . ini_get( 'memory_limit' ) . '</mark>';
						} else {
							echo '<mark class="no">' . ini_get( 'memory_limit' ) . '</mark>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Max upload size', 'ohio-extra' ); ?> <span><?php _e( '(upload_max_filesize)', 'ohio-extra' ); ?></span>:</td>
				<td>16M</td>
				<td>
					<?php
						if ( intval( ini_get( 'upload_max_filesize' ) ) >= 16 ) {
							echo '<mark class="yes">' . ini_get( 'upload_max_filesize' ) . '</mark>';
						} else {
							echo '<mark class="no">' . ini_get( 'upload_max_filesize' ) . '</mark>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'File upload permission', 'ohio-extra' ); ?> <span><?php _e( '(file_uploads)', 'ohio-extra' ); ?></span>:</td>
				<td><?php _e( 'Available', 'ohio-extra' ); ?></td>
				<td>
					<?php
						$file_uploads = is_numeric(ini_get('file_uploads')) ? (ini_get('file_uploads') ? 'On' : 'Off') : ini_get('file_uploads');
						if ( $file_uploads == 'On' ) {
							echo '<mark class="yes">Available</mark>';
						} else {
							echo '<mark class="no">Off</mark>';
						}
					?>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="clb-group-footer">
		<?php _e( 'Contact your hosting provider and ask them to increase the limits to a minimum of the following.', 'ohio-extra' ); ?>
	</div>
</div>

<!-- Group 2cl -->
<div class="clb-group">
	<div class="clb-group-headline">
		<h3><?php _e( 'Security', 'ohio-extra' ); ?></h3>
	</div>

	<table class="clb-group-content clb-group-table table-col-2">
		<tbody>
			<tr>
				<td><?php _e( 'Secure connection', 'ohio-extra' ); ?> <span><?php _e( '(SSL Certificate)', 'ohio-extra' ); ?></span>:</td>
				<td>
					<?php
						if ( is_ssl() ) {
							echo '<mark class="yes">Secured</mark>';
						} else {
							echo '<mark class="no">Not secured</mark>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Hide errors from visitors', 'ohio-extra' ); ?> <span><?php _e( '(WP_DEBUG)', 'ohio-extra' ); ?></span>:</td>
				<td>
					<?php
						if ( defined('WP_DEBUG') && true === WP_DEBUG ) {
							echo '<mark class="no">Errors are displayed</mark>';
						} else {
							echo '<mark class="yes">Hidden</mark>';
						}
					?>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<!-- Group 2cl -->
<div class="clb-group">
	<div class="clb-group-headline">
		<h3><?php _e( 'WordPress Environment', 'ohio-extra' ); ?></h3>
	</div>

	<table class="clb-group-content clb-group-table table-col-2">
		<tbody>
			<tr>
				<td><?php _e( 'WordPress Version:', 'ohio-extra' ); ?></td>
				<td>
					<?php
						if ( !isset( $wp_verion ) && defined( 'ABSPATH' ) && defined( 'WPINC' ) ) {
							include ABSPATH . WPINC . '/version.php';
						}

						$wp_version_exploded = isset( $wp_version ) ? explode( '.', $wp_version ) : [ '1' ];

						if ( !isset( $wp_version ) ) {
							$wp_version = 'Undefined';
						}

						if ( $wp_version_exploded[0] >= 5 ) {
							echo '<mark class="yes">' . $wp_version . '</mark>';
						} else {
							echo '<mark class="no">' . $wp_version . '</mark>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Admin language:', 'ohio-extra' ); ?></td>
				<td>
					<mark class="yes"><?php echo get_locale(); ?></mark>
				</td>
			</tr>
		</tbody>
	</table>
</div>
