<?php declare(strict_types=1);


// register css, js and remove default scripts
class ScriptFunctionality {

	public function __construct(){
		add_action('wp_enqueue_scripts', array($this, 'register_wp_styles'));
		add_action('wp_enqueue_scripts', array($this, 'register_wp_scripts'));
		add_action('wp_enqueue_scripts', array($this, 'remove_scripts'));
	}

	public function register_wp_styles(){
		wp_enqueue_style("bootstrapCSS", "https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css");
		wp_enqueue_style("googleFontLora", "https://fonts.googleapis.com/css?family=Lora");
		wp_enqueue_style("mainCSS", get_template_directory_uri() . "/style.css");
	}

	public function register_wp_scripts(){
		wp_enqueue_script('jquery', '', '', '', TRUE);
		wp_enqueue_script("mainJS", get_template_directory_uri() . "/assets/js/main.js", '', '', TRUE);
		wp_enqueue_script("bootstrapJS", "https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js", '', '', TRUE);
	}

	public function remove_scripts(){
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
	  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	  remove_action( 'wp_print_styles', 'print_emoji_styles' );
	  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	}

}

$scripts_register = new ScriptFunctionality;

function insert_data_into_database(){
	if (isset($_POST['action']) && $_POST['action'] == "insert_into_db") {
		$name = $_POST["name"];
		$email = $_POST["email_address"];
		$select = $_POST["select_learning"];
		$timestamp = date("Y-m-d h:i:sa");

		global $wpdb;
		$wpdb->insert("wp_landing_page_email", array('name' => $name, 'email' => $email, 'timestamp' => $timestamp, 'interest' => $select));

		echo "Correct";
		die();
	}
}

add_action( 'wp_ajax_insert_into_db', 'insert_data_into_database' );
add_action( 'wp_ajax_nopriv_insert_into_db', 'insert_data_into_database' );
