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
        $params = $request->get_params();
        $required = ['salutation', 'firstname', 'lastname', 'email', 'countryCode', 'phone', 'branchCountry', 'branch', 'message', 'agreement'];

        foreach( $required as $field ) {
            if ( empty( $params[$field] ) ) {
                return new WP_REST_Response([
                    'message' => 'missing required field: ' . $field,
                    'params' => $params,
                ], 500);
            }
        }

        $payload = [
            'fullName' => $params['salutation'] . $params['firstname'] . ' ' . $params['lastname'],
            'phone' => '(' . $params['countryCode'] . ') ' . $params['phone'],
            'email' => $params['email'],
            'country' => $params['country'],
            'boutique' => $params['branch'] . ' in ' . $params['branchCountry'],
            'message' => $params['message'],
            'agreed_to_policy' => $params['agreement'],
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
                'message' => 'error occurred while sending email',
            ], 500);
        }
    }
}
