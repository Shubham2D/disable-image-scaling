<?php
/**
 * Plugin Name: Disable WordPress Image Scaling
 * Description: Prevents WordPress from automatically scaling large images upon upload.
 * Version: 1.0
 * Author: Shubham Sawarkar
 * Author URI: https://github.com/Shubham2D
 * License: MIT
 */

if (!defined('ABSPATH')) exit; // Prevent direct access

// Disable WordPress' automatic image scaling feature
add_filter('big_image_size_threshold', '__return_false');

// Disable additional resized image sizes
add_filter('intermediate_image_sizes_advanced', function($sizes) {
    return [];
});
