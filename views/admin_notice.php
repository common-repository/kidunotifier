<?php
/**
 * Get the current time and set it as an option when the plugin is activated.
 *
 * @return null
 */
function kidu_set_activation_date() {
	$now = strtotime( "now" );
	add_option( 'myplugin_activation_date', $now );
}
register_activation_hook( __FILE__, 'kidu_set_activation_date' );

/**
 * Check date on admin initiation and add to admin notice if it was over 10 days ago.
 *
 * @return null
 */
function kidu_check_installation_date() {
	// Added Lines Start
	$nobug = "";
	$nobug = get_option('kidu_no_bug');

	if (!$nobug) {
	// Added Lines End
		$install_date = get_option( 'myplugin_activation_date' );
		$past_date    = strtotime( '+7 days' );

		if ( $past_date >= $install_date ) {
			add_action( 'admin_notices', 'kidu_display_admin_notice' );
		}
	// Added Lines Start
	}
	// Added Lines End
}
add_action( 'admin_init', 'kidu_check_installation_date' );

/**
 * Display Admin Notice, asking for a review
 *
 * @return null
 */
function kidu_display_admin_notice() {
	// Review URL - Change to the URL of your plugin on WordPress.org
	$reviewurl = 'https://wordpress.org/support/plugin/kidunotifier/reviews/#new-post';
	$nobugurl = get_admin_url() . '?kidunotifier=1';

	echo '<div class="updated"><p>';
	printf( __( "<span class='dashicons dashicons-format-quote'></span> Hey Admin, I noticed you've been using KiduNitifier plugin for more than a week – that’s awesome! Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation. <br /><br /> <a href='%s' target='_blank' class='button button-primary'>Leave A Review</a> <a href='%s' style='margin:auto 5px auto 5px; color:#555d66;'>Leave Me Alone</a>" ), $reviewurl, $nobugurl );
	echo "</p></div>";
}

/**
 * Set the plugin to no longer bug users if user asks not to be.
 *
 * @return null
 */
function kidu_set_no_bug() {
	$nobug = "";
	if ( isset( $_GET['kidunotifier'] ) ) {
		$nobug = esc_attr( $_GET['kidunotifier'] );
	}

	if ( 1 == $nobug ) {
		add_option( 'kidu_no_bug', TRUE );
	}
} add_action( 'admin_init', 'kidu_set_no_bug', 5 );
?>