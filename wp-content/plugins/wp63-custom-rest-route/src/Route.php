<?php
namespace WP63\Wp63CustomRestRoute;

abstract class Route {
    protected $namespace;
    protected $version;
    protected $route;

    public function register() {
        $methods = ['Get', 'Post'];

        foreach ( $methods as $method ) {
            if ( method_exists( $this, $method )) {
                $args = [
                    'methods' => $method,
                    'callback' => [$this, $method],
                ];

                if ( method_exists( $this, 'Permission' ) ) {
                    $args['permission_callback'] = [$this, 'Permission'];
                } else {
                    $args['permission_callback'] = '__return_true';
                }

                register_rest_route( $this->namespace . "/" . $this->version, $this->route, $args );
            }
        }
    }
}
