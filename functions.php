<?php



//import customizer theme class 
include_once('template/customizer.php');
new TheMinimalist_Customizer();


// string traduction with polylang plugin
function register_strings()
{
    pll_register_string('content_title', 'Acueil');
    pll_register_string('message_sensibilisation', 'Sensibilisations');
    pll_register_string('contactez', 'Pour nous contactez');
    pll_register_string('contact', 'Contact');
    pll_register_string('annonces', 'Annonces');
    pll_register_string('messages_sensibilisation', 'Messages de sensibilisation');

    pll_register_string('services_en_ligne', 'Services en ligne');

    pll_register_string('apropos', 'Apropos');
    pll_register_string('newsletters', 'Newsletters');
    pll_register_string('stay', 'Stay update with our latest');
    pll_register_string('instagram', 'Instagram');
    pll_register_string('follow us', 'Follow us');

    pll_register_string('design', 'DESIGNED BY');
    pll_register_string('reseau', 'Notre Réseau de sites web');

    pll_register_string('tel', 'tel');
    pll_register_string('fax', 'fax');
    pll_register_string('email', 'email');


}
add_action('init', 'register_strings');


// fuction to add style file  css to the theme
function wp_dcwcommerce_theme_scripts(){
        //includin file styles -fontawesome
        wp_enqueue_style( "fontawesome", get_stylesheet_directory_uri()."/vendor/css/all.min.css");
        
        //includin file styles -aos librery
        //wp_enqueue_style( "aos", get_stylesheet_directory_uri()."/vendor/css/aos.css");

        
        //load the father theme style with the hook "wp_enqueue_scripts"
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        
        //includin file styles -style.css
        wp_enqueue_style( "custom-style", get_stylesheet_uri());
          
        

        //includin bootstrap file
        wp_enqueue_script("scriptjs",get_stylesheet_directory_uri()."/asset/js/script.js",array(),"1.0",true);
        
    }
    add_action("wp_enqueue_scripts","wp_dcwcommerce_theme_scripts");


//adding widget area
function wpdcwcommerce_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Widget Area_num_vert',
        'id'            => 'custom-footer-widget_num_vert',
        'before_widget' => '<div class="panneau-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => 'Widget Area_facturation',
        'id'            => 'custom-footer-widget_facturation',
        'before_widget' => '<div class="panneau-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => 'Widget Area_commerce_ext',
        'id'            => 'custom-footer-widget_commerce_ext',
        'before_widget' => '<div class="panneau-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => 'Widget Area_indice',
        'id'            => 'custom-footer-widget_indice',
        'before_widget' => '<div class="panneau-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title">',
        'after_title'   => '</div>',
    ) );

//-------------------------widget services------------------------
    
//-----------------sidebare widget-------------------------
    
    //-----------------slider widget-------------------------
    
    //-----------------languages widget-------------------------
        register_sidebar( array(
        'name'          => 'widget_languages',
        'id'            => 'widget_languages',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    //-----------------news widget-------------------------
    register_sidebar(array(
        'name'          => 'widget_news',
        'id'            => 'widget_news',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
    
}

add_action( 'widgets_init', 'wpdcwcommerce_widgets_init' );
