<?php
/**
 * Plugin Name: My Custom Plugin
 * Description: A test plugin for WPVIP Composer setup
 * Version: 0.1.0
 * Author: Jason Hubsch
 */

add_action('init', function () {
    error_log('My Custom Plugin loaded!');
});