<?php 
/**
 * Dickensos Support Template page
 * @since 1.0.0
 */
?>

<?php
/*function faq_help_menu(){
add_submenu_page( 'edit.php?post_type=faq', 'We can help', 'Need Help?', 'manage_options', 'dickensos-faq-help', 'tdd_beans_view_settings' );
}
add_action( 'admin_menu', 'faq_help_menu' );

function tdd_beans_view_settings(){

include_once wp_normalize_path(plugin_dir_path(__FILE__ ) .'/template/help.php');

}/*
?>


<header class="pa-header">
	<h1><?php _e( 'How can we help?', SK_TEXTDOMAIN ); ?></h1>
	<p><?php _e( 'Find answers in documentation or contact us through standard or premium support', SK_TEXTDOMAIN ); ?></p>
</header>

<ul class="pa-boxes">
	<li>
		<a href="http://dickensayieko.co/help-center/">
			<i class="sk-icon si-file-text2"></i>
			<h3><?php _e( 'Help Center', SK_TEXTDOMAIN ); ?></h3>
			<p><?php _e( 'Learn how to install, setup, use and customize our products in documentation', SK_TEXTDOMAIN ); ?></p>
		</a>
	</li>
	<li>
		<a href="http://dickensayieko.co/help/">
			<i class="sk-icon si-lifebuoy"></i>
			<h3><?php _e( 'Standard Support', SK_TEXTDOMAIN ); ?></h3>
			<p><?php _e( 'Envato market purchases include six month of complimentary standard support', SK_TEXTDOMAIN ); ?></p>
		</a>
	</li>
	<li>
		<a href="http://dickensayieko.co/help/">
			<i class="sk-icon si-star-empty"></i>
			<h3><?php _e( 'Premium Support', SK_TEXTDOMAIN ); ?></h3>
			<p><?php _e( 'Let us help you with rapid response times and advanced technical support', SK_TEXTDOMAIN ); ?></p>
		</a>
	</li>
</ul>

<h2 class="pa-subheader"><?php _e( 'Looking for more?', SK_TEXTDOMAIN ); ?></h2>
<ul class="pa-boxes pa-wide">
	<li>
		<a href="mailto:customization@dickensayieko.co">
			<i class="sk-icon si-embed2"></i>
			<h3><?php _e( 'Customization', SK_TEXTDOMAIN ); ?></h3>
			<p><?php _e( 'Do you want to customise our product and do not have the time or skills, get in touch', SK_TEXTDOMAIN ); ?></p>
		</a>
	</li>
</ul>

<div class="pa-feedback">
	<h2 class="pa-subheader"><?php _e( 'Let us know what you think', SK_TEXTDOMAIN ); ?></h2>
	<p><?php _e( 'Your feedback helps us build better products and create better experience for you. Please share you your thoughts and ideas.', SK_TEXTDOMAIN ); ?></p>
	<a class="btn-cta" target="_blank" href="http://dickensayieko.co/feedback/"><?php _e( 'Feedback', SK_TEXTDOMAIN ); ?></a>
</div>
