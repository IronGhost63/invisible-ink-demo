<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MainMenu extends Composer {
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.main-menu'
    ];

    public function with() {
        $theme_locations = get_nav_menu_locations();
        $menu_obj = get_term( $theme_locations['primary_navigation'], 'nav_menu' );
        $menu = wp_get_nav_menu_items( $menu_obj->term_id );

        $menu_items = array_map( fn( $item ) => [
            'title' => $item->title,
            'url' => $item->url,
            'active' => ((Int) $item->object_id === (Int) get_queried_object_id()),
        ], $menu);

        return [
            'menu' => $menu_items,
            'site_name' => get_bloginfo('name', 'display'),
            'site_url' => get_home_url(),
        ];
    }
}
