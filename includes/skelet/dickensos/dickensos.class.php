<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * AdonCreatives Class
 * A helper class for general options pages and routing
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
 class AdonCreatives{

		function __construct(){
			if(is_admin()){
			 	//add_action( 'admin_header', array("AdonCreatives","load_header") );
			 	add_action( 'admin_footer', array("AdonCreatives","load_footer") );

			}
		}

		public static function load_header(){
				wp_enqueue_style( 'dickensos', plugin_dir_url(__FILE__ )."assets/css/dickensos.css" );
				wp_enqueue_script( 'dickensos', plugin_dir_url(__FILE__ )."assets/js/dickensos.js"  , array(), '1.0.0', true );
		} 

		public static function load_footer(){
				wp_enqueue_style( 'dickensos', plugin_dir_url(__FILE__ )."assets/css/dickensos.css" );
				wp_enqueue_script( 'dickensos', plugin_dir_url(__FILE__ )."assets/js/dickensos.js"  , array(), '1.0.0', true );
		} 		

 		public static function route($page = ''){
 			   if($page == "dickensos-help"){
 			   		 include_once wp_normalize_path(plugin_dir_path(__FILE__ ) .'/template/help.php');
 			   }else if($page == "dickensos-product"){
 			   		 include_once wp_normalize_path(plugin_dir_path(__FILE__ ) .'/template/products.php');
 			   }
 		}

 }


?>