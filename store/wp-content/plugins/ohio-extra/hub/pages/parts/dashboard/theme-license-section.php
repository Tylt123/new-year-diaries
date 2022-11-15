<h2 class="clb-headline"><?php _e( 'Theme License', 'ohio-extra' ); ?></h2>

<?php if ( get_option( 'ohio_license_code', false ) ): ?>

	<div class="clb-group">
		<div class="clb-group-headline">
			<h3><?php _e( 'Theme Overview', 'ohio-extra' ); ?></h3>
			<a href="#remove" class="btn btn-flat" id="ohio-remove-theme-license"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-dotted" viewBox="0 0 16 16">
  <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
</svg><?php _e( 'Detach License', 'ohio-extra' ); ?></a>
		</div>

		<div class="clb-group-details">
			<?php _e( 'You have successfully registered the theme, all theme updates and premium bundled plugins can be installed.', 'ohio-extra' ); ?>
		</div>

		<table class="clb-group-content clb-group-table table-col-2">
			<tbody>
				<tr>
					<td><?php _e( 'License', 'ohio-extra' ); ?></a>:</td>
					<td>
						<label class="active"><mark class="yes"><?php _e( 'Activated', 'ohio-extra' ); ?></mark></label>&nbsp; 
						<?php echo get_option( 'ohio_license_type', 'Regular License' ); ?>
						<a class="tips" target="_blank" href="https://themeforest.net/licenses/terms/regular"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a>
					</td>
				</tr>
				<tr>
					<td><?php _e( 'License key', 'ohio-extra' ); ?></a>:</td>
					<td><b><?php echo get_option( 'ohio_license_code', '-' ); ?></b></td>
				</tr>
				<tr>
					<td><?php _e( 'Registration date', 'ohio-extra' ); ?>:</td>
					<td><?php echo get_option( 'ohio_license_sold_at', '-' ); ?></td>
				</tr>
				<tr>
					<td><?php _e( 'Registered domain', 'ohio-extra' ); ?></a>:</td>
					<td><a href="<?php echo '//' . $_SERVER['HTTP_HOST']; ?>"><?php echo $_SERVER['HTTP_HOST']; ?>/</a> <a class="tips" target="_blank" href="https://themeforest.net/licenses/terms/regular"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a></td>
				</tr>
				<tr>
					<td><?php _e( 'Theme directory', 'ohio-extra' ); ?></a>:</td>
					<td><?php echo '..' . get_raw_theme_root( get_stylesheet() ) . '/' . get_stylesheet(); ?></td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Group 2cl -->
	<div class="clb-group">
		<div class="clb-group-headline">
			<h3><?php _e( 'Theme Support', 'ohio-extra' ); ?></h3>
			<div>
				<a class="tips" target="_blank" href="https://help.market.envato.com/hc/en-us/articles/207886473-Extending-and-Renewing-Item-Support"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a>
				<a target="_blank" href="https://themeforest.net/downloads" class="btn btn-flat"><?php _e( 'Upgrade Support', 'ohio-extra' ); ?></a>
			</div>
		</div>
		<div class="clb-group-details">
			<?php _e( 'Many support queries and technical questions will already be answered on our', 'ohio-extra' ); ?> <a target="_blank" href="https://docs.clbthemes.com/ohio/"><?php _e( 'documentation website', 'ohio-extra' ); ?></a>.
		</div>
		<table class="clb-group-content clb-group-table table-col-2">
			<tbody>
				<tr>
					<td><?php _e( 'Support status', 'ohio-extra' ); ?></td>
					<td>
						<?php
							$support_timestamp = get_option( 'ohio_license_support_until' );
							if ( !empty( $support_timestamp ) && is_numeric( $support_timestamp ) ):
								$diff_timestamp = $support_timestamp - time();
								if ($diff_timestamp > 0) {
									echo '<label class="active"><mark class="yes">Supported</mark></label>';
									$days = ceil( $diff_timestamp / 60 / 60 / 24 );
									echo '&nbsp; ' . $days . ' days left';
								} else {
									echo '<label class="inactive"><mark class="no">Unsupported</mark></label>';
								}
							endif;
						?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

<?php else: ?>

	<div class="clb-group">
		<div class="clb-group-headline">
			<h3><?php _e( 'Activation', 'ohio-extra' ); ?></h3>
		</div>
		<div class="clb-group-details">
			<?php _e( 'Activate your theme by connecting with Envato to receive updates upon their availability.', 'ohio-extra' ); ?>
		</div>
		<div class="clb-group-content">
			<div class="clb-steps">
				<div class="clb-steps-item">
					<div class="step-number">1</div>
					<p><?php _e( 'Hint the Activate License button below', 'ohio-extra' ); ?>:</p>
				</div>
				<div class="clb-steps-item">
					<div class="step-number">2</div>
					<p><?php _e( 'Login with your', 'ohio-extra' ); ?><br> <a target="_blank" href="#"><?php _e( 'Envato Account', 'ohio-extra' ); ?></a></p>
				</div>
				<div class="clb-steps-item">
					<div class="step-number">3</div>
					<p><?php _e( 'Choose the valid', 'ohio-extra' ); ?><br> <a target="_blank" href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-"><?php _e( 'Purchase Code', 'ohio-extra' ); ?></a></p>
				</div>
				<div class="clb-steps-item">
					<div class="step-number">4</div>
					<p><?php _e( 'That is it, you are all set!', 'ohio-extra' ); ?><br> <?php _e( 'Product is activated.', 'ohio-extra' ); ?></p>
				</div>
			</div>
			<a href="#" class="btn btn-large btn-activate" id="ohio-activate-theme-license"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M15.2849 0.120735C14.7711 -0.1293 12.9731 -0.00428241 10.9182 0.620805C7.32212 3.12115 4.23976 6.62164 3.9829 12.3724C3.9829 12.4975 3.59761 12.3724 3.46918 12.3724C2.57016 10.4972 2.18486 8.49691 2.95545 5.74652C3.21231 5.49649 2.69859 5.24645 2.57016 5.24645C2.44172 5.49649 1.67114 6.24659 1.15741 7.12171C-1.28279 11.2473 0.25839 16.623 4.62506 18.8734C8.99173 21.2487 14.3858 19.7485 16.826 15.4979C19.5231 10.6222 16.9545 0.995857 15.2849 0.120735Z" fill="white"/>
			</svg>&nbsp;<span><?php _e( 'Activate', 'ohio-extra' ); ?></span></a>
		</div>
	</div>

<?php endif; ?>
