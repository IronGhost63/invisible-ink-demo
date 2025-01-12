<?php
namespace WP63\Wp63CustomRestRoute\Routes;

use WP63\Wp63CustomRestRoute\Route;
use WP63\Wp63CustomRestRoute\Methods\Post;
use \WP_REST_Response;

class SubmitContact extends Route implements Post {
    public function __construct() {
        $this->namespace = 'wp63';
        $this->version = 'v1';
        $this->route = '/submit-contact';
    }

    public function Post( $request ) {
        $payload = [
            'fullName' => $request['salutation'] . $request['firstname'] . ' ' . $request['lastname'],
            'phone' => '(' . $request['country-code'] . ') ' . $request['phone'],
            'email' => $request['email'],
            'country' => $request['country'],
            'boutique' => $request['branch'] . ' in ' . $request['branch-country'],
            'message' => $request['message'],
            'agreed_to_policy' => $request['agreement'],
        ];

        $admin_email = get_option('admin_email');
        $subject = 'Contact form submission';
        $message = print_r( $payload, true );

        $send_email = wp_mail( $admin_email, $subject, $message);

        if ( $send_email ) {
            return new WP_REST_Response([
                'message' => 'email sent',
            ], 200);
        } else {
            return new WP_REST_Response([
                'message' => 'erro occurred while sending email',
            ], 500);
        }
    }
}
