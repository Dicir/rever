<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

/**
	* Enqueues scripts and styles.
	*
	* @since Rever Juntos 1.0
	*
	* @param string $handle Script name
	* @param string $src Script url
	* @param array $deps (optional) Array of script names on which this script depends
	* @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	* @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>

	function theme_name_scripts() {
		wp_enqueue_script( '$handle', '$src', array( 'jquery' ), false, false);
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
*/

// Funções de enqueue vão aqui.
function rever_scripts() {
	// Identificador para o script bootstrap.min
	wp_enqueue_style( 'bootstrap', get_template_directory_uri()."_css/bootstrap.min.css");
	//Menu
	wp_enqueue_style('menu', get_template_directory_uri()."_css/menu.css");
	// Identificador para o script modernizr
	wp_enqueue_script( 'modernizr', get_template_directory_uri()."_js/modernizr.js");
	// Script prefixFree
	wp_enqueue_script( 'prefix', get_template_directory_uri()."_js/prefixfree.min.js");
	//Javascript do Bootstrap
	wp_enqueue_script( 'bootstrapJS' , get_template_directory_uri(). "_js/bootstrap.min.js", array( 'jquery' ), true);
	//Add script Menu
	wp_enqueue_script( 'menu', get_template_directory_uri()."_js/menu.js", array( 'jquery' ), '1.0', true );
	}
add_action( 'wp_enqueue_scripts', 'rever_script' );

?>