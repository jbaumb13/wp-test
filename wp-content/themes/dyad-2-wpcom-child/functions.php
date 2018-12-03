<?php
/**
 * dyad 2 child functions and definitions
 *
 * @package Dyad
 */

 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
 function my_theme_enqueue_styles() {
     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

 }

 /**
  * Register our sidebars and widgetized areas.
  *
  */
 function arphabet_widgets_init() {

 	register_sidebar( array(
 		'name'          => 'Home Intro Paragraph',
 		'id'            => 'home_intro',
 		'before_widget' => '<div>',
 		'after_widget'  => '</div>',
 		'before_title'  => '<h2>',
 		'after_title'   => '</h2>',
 	) );

  register_sidebar( array(
    'name'          => 'Home Mission',
    'id'            => 'home_mission',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h2>',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => 'Goal Pillar Food',
    'id'            => 'goal-pillar--food',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'name'          => 'Goal Pillar Climate',
    'id'            => 'goal-pillar--climate',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'name'          => 'Goal Pillar Fresh Water',
    'id'            => 'goal-pillar--fresh-water',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'name'          => 'Goal Pillar Wildlife',
    'id'            => 'goal-pillar--wildlife',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'name'          => 'Goal Pillar Forests',
    'id'            => 'goal-pillar--forests',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h3>',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'name'          => 'Goal Pillar Oceans',
    'id'            => 'goal-pillar--oceans',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title'   => '<h3>',
    'after_title'   => '</h3>',
  ));

 }
 add_action( 'widgets_init', 'arphabet_widgets_init' );



 /**
  * Register our customize colors.
  *
  */


 function jl_customize_register( $wp_customize ) {

 //Color customizer
   $colors = array();
   $colors[] = array(
     'slug'=>'content_text_color',
     'default' => '#333',
     'label' => __('Content Text Color', 'Ari')
   );
   $colors[] = array(
     'slug'=>'content_link_color',
     'default' => '#88C34B',
     'label' => __('Content Link Color', 'Ari')
   );
   foreach( $colors as $color ) {
     // SETTINGS
     $wp_customize->add_setting(
       $color['slug'], array(
         'default' => $color['default'],
         'type' => 'option',
         'capability' =>
         'edit_theme_options'
       )
     );
     // CONTROLS
     $wp_customize->add_control(
       new WP_Customize_Color_Control(
         $wp_customize,
         $color['slug'],
         array('label' => $color['label'],
         'section' => 'colors',
         'settings' => $color['slug'])
       )
     );
   }



 }
 add_action( 'customize_register', 'jl_customize_register' );
