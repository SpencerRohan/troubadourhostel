<?php namespace Troubadour;

class Site
{

	public function __construct() 
	{
		$this->add_admin_actions();
		$this->add_actions();

	}

	private function add_admin_actions()
	{
		$actions = array(
      'widgets_init'            => 'register_sidebars',
      'admin_enqueue_scripts'   => 'admin_enqueue_styles',
      'admin_enqueue_scripts'   => 'admin_enqueue_scripts',
      'after_setup_theme'       => 'register_menus',
      'after_setup_theme'				=> 'custom_theme_support',
      'wp_head'									=> 'add_meta_tags'
		);

		foreach ($actions as $action=>$function) 
		{
			add_action( $action , array( $this, $function ));
		}
	}

	private function add_actions()
	{
		$actions = array(
      'wp_head'                 => 'site_enqueue_styles',
      'login_enqueue_scripts'   => 'login_enqueue_styles',
      'wp_enqueue_scripts'      => 'site_enqueue_scripts'
		);

		foreach ($actions as $action=>$function) 
		{
			add_action( $action , array( $this, $function ));
		}
	}

	public function login_enqueue_styles()
	{
		wp_enqueue_style('logo-css', get_template_directory_uri () . '/assets/css/admin_logo.css');
	}

	public function admin_enqueue_styles()
	{
		wp_enqueue_style('logo-css', get_template_directory_uri () . '/assets/css/admin_logo.css');
	}

	public function site_enqueue_styles() 
	{
		wp_enqueue_style('logo-css', get_template_directory_uri () . '/assets/css/admin_logo.css');
		wp_enqueue_style('app-css', get_template_directory_uri () . '/assets/css/app.css');
	}

	public function admin_enqueue_scripts()
	{

	}

	public function site_enqueue_scripts()
	{
		wp_enqueue_script('app-js', get_template_directory_uri () . '/assets/js/app.js', array(), '', true);
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