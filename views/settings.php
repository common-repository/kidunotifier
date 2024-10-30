<div class="wrap">
    <h2><?php echo $this->plugin->displayName; ?> &raquo; <?php esc_html_e( 'Settings', 'insert-headers-and-footers' ); ?></h2>

    <?php
    if ( isset( $this->message ) ) {
        ?>
        <div class="updated fade"><p><?php echo $this->message; ?></p></div>
        <?php
    }
    if ( isset( $this->errorMessage ) ) {
        ?>
        <div class="error fade"><p><?php echo $this->errorMessage; ?></p></div>
        <?php
    }
    ?>

    <div id="poststuff">
    	<div id="post-body" class="metabox-holder columns">
    		<!-- Content -->
    		<div id="post-body-content">
				<div id="normal-sortables" class="meta-box-sortables ui-sortable">
	                <div class="postbox">
	                    <h3 class="hndle"><?php esc_html_e( 'Pixel Key Settings', 'insert-headers-and-footers' ); ?></h3>

	                    <div class="inside">
		                    <form action="options-general.php?page=<?php echo $this->plugin->name; ?>" method="post">
		                    	<p>
		                    		<label for="pixel_key"><strong><?php esc_html_e( 'Pixel API Key', 'insert-headers-and-footers' ); ?></strong></label>
		                    		<input type="text" name="pixel_key" id="pixel_key" class="widefat"  style="font-family:Courier New;margin-top: .5rem;" placeholder="Paste your API key here" value="<?php echo $this->settings['pixel_key']; ?>" />
									<p style="background-color: #fffcde;color: rgba(0,0,0,.5);padding: .5rem;border-radius: 5px;">https://kidunotifier.com/pixel/<strong style="color: rgb(0,0,0);">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</strong></p>
		                    		<?php echo 'Please add your pixel key from <a href="https://kidunotifier.com/login" target="_blank">KiduNotifier</a> to track information.'; ?>
		                    	</p>
		                    	<?php wp_nonce_field( $this->plugin->name, $this->plugin->name . '_nonce' ); ?>
		                    	<p>
									<input name="submit" type="submit" name="Submit" class="button button-primary" value="<?php esc_html_e( 'Save My Key', 'insert-headers-and-footers' ); ?>" />
								</p>
						    </form>
	                    </div>

						<hr/>
						<div class="inside">
							<?php echo "<p class='copyright'>Copyright © ".date("Y")." <strong><a href='https://kidunotifier.com/' target='_blank'>KiduNotifier</a></strong>. All rights reserved. Made with ❤ by <a href='//its.net.in/' target='_blank' title='ITS – Info Twist Solutions is an India’s leading Web, Graphics, UI-UX Designing and Web Hosting Company in Cochin, Kerala, India.'><strong>ITS</strong></a></p>"; ?>
						</div>
	                </div>
	                <!-- /postbox -->
				</div>
				<!-- /normal-sortables -->
    		</div>
    		<!-- /post-body-content -->
    		<!-- /postbox-container -->
    	</div>
	</div>
</div>