<?php 

/*
    @package splitlandingpage

    Index Template
*/
get_header();
?>
<div class="container">
    <div class="split left" style="background: url(<?php echo get_theme_mod('left_screen', get_template_directory_uri() . '/img/artistic-brush.jpg'); ?>) center center no-repeat; background-size: cover";>
        <h1><?php echo get_theme_mod('left_screen_header', 'The Designer'); ?></h1>
        <a href="<?php echo get_theme_mod('left_screen_button_url', 'http://www.yoururl.com'); ?>" class="button" onclick = "void(0)"><?php echo get_theme_mod('left_screen_button_text', 'Read More'); ?></a>
    </div>
    <div class="split right" style="background: url(<?php echo get_theme_mod('right_screen', get_template_directory_uri() . '/img/programmer.jpg'); ?>) center center no-repeat; background-size: cover";>
        <h1><?php echo get_theme_mod('right_screen_header', 'The Programmer'); ?></h1>
        <a href="<?php echo get_theme_mod('right_screen_button_url'. 'http://www.yoururl.com'); ?>" class="button" onclick = "void(0)"><?php echo get_theme_mod('right_screen_button_text', 'Read More'); ?></a>
    </div>
</div>

<?php get_footer(); ?>