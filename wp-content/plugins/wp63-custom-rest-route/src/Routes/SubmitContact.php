<?php
namespace WP63\Wp63CustomRestRoute\Routes;

use WP63\Wp63CustomRestRoute\Route;
use WP63\Wp63CustomRestRoute\Methods\Post;

class SubmitContact extends Route implements Post {
    public function __construct() {
        $this->namespace = 'wp63';
        $this->version = 'v1';
        $this->route = '/submit-contact';
    }

    public function Post( $request ) {

    }
}
