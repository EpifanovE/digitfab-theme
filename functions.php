<?php

add_action('after_setup_theme', function () {
    load_theme_textdomain(
        'digitfab-theme',
        get_template_directory() . '/languages'
    );
});

require_once "inc/assets.php";
require_once "inc/theme-support.php";

