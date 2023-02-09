<?php

// Register Custom Navigation Walker
function register_navwalker()
{
    require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


//agregar al head y footer el css y js correspondiente
function yeti_agregar_css_js()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '1.1', true);

    // JS Personalizados
    wp_enqueue_script('widgets', get_template_directory_uri() . '/js/widgets.js', array('bootstrapjs'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'yeti_agregar_css_js');


function yeti_setup()
{
    //agregar imagenes destacadas
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    add_theme_support( 'title-tag' );
}


add_action('after_setup_theme', 'yeti_setup');

//Agregar Sidebar
function yeti_widgets()
{
    register_sidebar(
        array(
            'id'            => 'widgets-derecha',
            'name'          => __('Widget Derecha'),
            'description'   => __('Aquí puedes poner tus widgets que se situaran comodamente a la derecha del contenido'),
            'before_widget' => '<div class="card-body my-5 sidebar-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4> <hr>',
        )
    );
}
add_action('widgets_init', 'yeti_widgets');

// Registrar Menus
function yeti_register_my_menus()
{
    register_nav_menus(
        array(
            'menu-navegacion' => __('Menú Navegación'),
        )
    );
}
add_action('init', 'yeti_register_my_menus');
