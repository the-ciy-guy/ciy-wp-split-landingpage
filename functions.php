<?php 

/*
    @package splitlandingpage

    Functions Template
*/

// Enqueue Files
function load_scripts($hook){
    wp_enqueue_style('splitlandingpage_style', get_template_directory_uri() . '/css/splitlandingpage.style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('splitlandingpage_js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Add split screen customizer
function split_screen_customize_register($wp_customize){
    $wp_customize->add_section('split_screen', array(
        'title'         => __('Split Screen', 'splitlandingpage'),
        'description'   => sprintf(__('Setup your split screen landingpage')),
        'priority'      => 220
    ));

    $wp_customize->add_setting('left_screen', array(
        'default'   => get_template_directory_uri() . '/img/artistic-brush.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'left_screen', array(
        'label'     => __('Left Picture', 'splitlandingpage'),
        'section'   => 'split_screen',
        'settings'  => 'left_screen',
        'priority'  => 1
    )));

    $wp_customize->add_setting('left_screen_header', array(
        'default'   => _x('The Designer', 'splitlandingpage'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('left_screen_header', array(
        'label'     => __('Header for the left side', 'splitlandingpage'),
        'section'   => 'split_screen',
        'priority'  => 2
    ));

    $wp_customize->add_setting('left_screen_button_text', array(
        'default'   => _x('Read More', 'splitlandingpage'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('left_screen_button_text', array(
        'label'     => __('Left Screen Button Text', 'splitlandingpage'),
        'section'   => 'split_screen',
        'priority'  => 3
    ));

    $wp_customize->add_setting('left_screen_button_url', array(
        'default'   => _x('http://www.yoururl.com', 'splitlandingpage'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('left_screen_button_url', array(
        'label'     => __('Left Screen Button URL', 'splitlandingpage'),
        'section'   => 'split_screen',
        'priority'  => 4
    ));

    // Right Side
    $wp_customize->add_setting('right_screen', array(
        'default'   => get_template_directory_uri() . '/img/programmer.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'right_screen', array(
        'label'     => __('Right Picture', 'splitlandingpage'),
        'section'   => 'split_screen',
        'settings'  => 'right_screen',
        'priority'  => 5
    )));

    $wp_customize->add_setting('right_screen_header', array(
        'default'   => _x('The Programmer', 'splitlandingpage'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('right_screen_header', array(
        'label'     => __('Header for the right side', 'splitlandingpage'),
        'section'   => 'split_screen',
        'priority'  => 6
    ));

    $wp_customize->add_setting('right_screen_button_text', array(
        'default'   => _x('Read More', 'splitlandingpage'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('right_screen_button_text', array(
        'label'     => __('Right Screen Button Text', 'splitlandingpage'),
        'section'   => 'split_screen',
        'priority'  => 7
    ));

    $wp_customize->add_setting('right_screen_button_url', array(
        'default'   => _x('http://www.yoururl.com', 'splitlandingpage'),
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('right_screen_button_url', array(
        'label'     => __('Right Screen Button URL', 'splitlandingpage'),
        'section'   => 'split_screen',
        'priority'  => 8
    ));
}
add_action('customize_register', 'split_screen_customize_register');