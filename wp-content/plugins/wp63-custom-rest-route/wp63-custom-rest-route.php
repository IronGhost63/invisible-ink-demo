<?php
/**
 * Plugin Name:     WP63 Custom REST Routes
 * Plugin URI:      https://wp63.dev
 * Description:     Custom REST Endpoints
 * Author:          Jay <me@jirayu.in.th>
 * Author URI:      https://jirayu.in.th
 * Text Domain:     wp63-custom-rest-route
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Mfs_Custom_Rest_Route
 */

// Your code starts here.

require __DIR__ . '/vendor/autoload.php';

use WP63\Wp63CustomRestRoute\Routes\SubmitContact;

add_action( 'rest_api_init', function() {
    ( new SubmitContact )->register();
}, 20);

register_activation_hook( __FILE__, function() {
    flush_rewrite_rules();
});
