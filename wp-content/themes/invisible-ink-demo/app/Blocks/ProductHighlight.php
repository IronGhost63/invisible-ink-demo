<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class ProductHighlight extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Product Highlight';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Homepage Product Highlight';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'design';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = ['page'];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The ancestor block type allow list.
     *
     * @var array
     */
    public $ancestor = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => true,
        'mode' => true,
        'multiple' => false,
        'jsx' => false,
        'color' => [
            'background' => false,
            'text' => false,
            'gradient' => false,
        ],
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = ['light', 'dark'];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'title' => 'Lorem ipsum dolor sit amet',
        'products' => [],
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Product Highlight block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array{
        return [
            'title' => get_field('title') ?: $this->example['title'],
            'products' => $this->products(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('product_highlight');

        $fields
            ->addText('title')
            ->addRelationship('product', [
                'post_type' => ['product'],
                'filters' => ['search'],
                'return_format' => 'object',
            ]);

        return $fields->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function products(){
        $products = array_map(function( $item ) {
            return [
                'title' => $item->post_title,
                'brand' => get_field( 'brand', $item->ID ),
                'price' => get_field( 'price', $item->ID ),
                'url' => get_permalink( $item->ID ),
                'thumbnail' => get_the_post_thumbnail_url( $item->ID, 'large' ),
            ];
        }, get_field('product') ?: []);

        if ( count( $products ) <= 4 ) {
            $products = array_merge($products, $products);
        }

        return $products;
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
