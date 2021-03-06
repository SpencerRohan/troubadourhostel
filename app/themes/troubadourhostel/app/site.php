<?php namespace Troubadour;

class Site
{

	public function __construct() 
	{
		$this->setup_filters();
		$this->add_actions();
		$this->setup_theme();
	}

	private function setup_theme(){
		load_theme_textdomain( 'troubadourhostel' );
		add_image_size( 'troubadourhostel-featured-image', 2000, 1200, true );
		add_image_size( 'troubadourhostel-thumbnail-avatar', 100, 100, true );

	}
	private function setup_filters(){
		// add_filter( 'script_loader_src', array($this, 'wpse47206_src'));
		// add_filter( 'style_loader_src', array($this, 'wpse47206_src'));

	}


	public function wpse47206_src( $url )
	{
	    // if( is_admin() ) return $url;
	    return str_replace( site_url(), '', $url );
	}

	private function add_actions()
	{
		$actions = array(
			'init'											=> array('site_register_styles', 'add_custom_post_types'),
			'get_svg'										=> array('get_svg'),
      'login_enqueue_scripts'   	=> array('login_enqueue_styles'),
      'wp_enqueue_scripts'      	=> array('site_enqueue_scripts_and_styles'),
      'widgets_init'            	=> array('register_sidebars'),
      'admin_enqueue_scripts'   	=> array('admin_enqueue_styles', 'admin_enqueue_scripts'),
      'after_setup_theme'					=> array('register_menus', 'custom_theme_support'),
      'wp_head'										=> array('add_meta_tags')
		);

		foreach ($actions as $action=>$functions) 
		{
			foreach ($functions as $function)
			{
				add_action( $action , array( $this, $function ));
			}
		}

		// add_action( 'get_custom_post_by_title', array( $this, 'get_custom_post_by_title'), 10, 3 );
	}

	public function site_register_styles()
	{
		wp_register_style('app-css', get_template_directory_uri () . '/assets/css/app.css');

	}

	public function add_custom_post_types()
	{
		register_post_type( 'tr_overview',
	  	array(
	  		'description' 	=> 'Front-Page sections',
	      'labels' 				=> array( 
	      	'name' 					=> __( 'Overviews' ), 
	      	'singular_name' => __( 'Overview' )
	      ),
	    	'has_archive' 	=> false,
	    	'menu_icon' 		=> 'dashicons-exerpt-view',
	    	'menu_position' => 20,
	    	'public' 				=> true,
	    	'supports' 			=> array( 'title', 'editor', 'custom-fields' ),

	    )
	  );
	}

	public function login_enqueue_styles()
	{
		// wp_enqueue_style('logo-css', get_template_directory_uri () . '/assets/css/admin_logo.css');
	}

	public function admin_enqueue_styles()
	{
		// wp_enqueue_style('logo-css', get_template_directory_uri () . '/assets/css/admin_logo.css');
	}

	public function site_enqueue_scripts_and_styles() 
	{
		// wp_enqueue_style('logo-css', get_template_directory_uri () . '/assets/css/admin_logo.css');
		wp_enqueue_style( 'app-css');
		wp_enqueue_script('app-js', get_template_directory_uri () . '/assets/js/app.js', array(), '', true);
	}

	public function admin_enqueue_scripts()
	{

	}

	public function register_menus()
	{
		$navs = array(
			'primary' => 'Primary Menu',
			'footer'  => 'Footer Menu'
		);

		foreach ( $navs as $location=>$description )
		{
			register_nav_menu($location, __( $description , $location ) );
		}
	}

	public function register_sidebars() 
	{
		//--Example--//
		register_sidebar( array(
			'name' 	=> 'This is a template',
			'id' 		=> 'sidebar_name',
			'class' => 'sidebarClass'
		));
	}

	public function custom_theme_support()
	{
		add_theme_support('title-tag');
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		));
	}

	public function get_svg($filename)
	{
		get_template_part('assets/svg/'.$filename);
	}

	public function get_custom_post_by_title($page_title, $post_type='post', $output = OBJECT) {
    global $wpdb;
    $post = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type= %s", $page_title, $post_type));

    return get_post($post, $output);
	}

	public function add_meta_tags()
	{
		?>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta charset="<?php bloginfo( 'charset' ); ?>">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	  <?php
	}
}