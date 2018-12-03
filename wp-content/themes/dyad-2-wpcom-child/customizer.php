<?php
/**
 * dyad 2 child customizer options
 *
 */

add_action( 'customize_register', 'cd_customizer_settings' );

function cd_customizer_settings( $wp_customize ) {
$wp_customize->add_section( ‘cd_colors’, array(
  ’title’ => ‘Colors’,
  ‘priority’ => 30,
) );

$wp_customize->add_setting( 'background_color' , array(
    'default'     => '#43C6E4',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
	'label'        => 'Background Color',
	'section'    => 'cd_colors',
	'settings'   => 'background_color',
) ) );

$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}

add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#43C6E4'); ?>; }
         </style>
    <?php



}
