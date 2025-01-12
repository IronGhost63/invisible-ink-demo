<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;
use function \Roots\asset;

class ImageWithText extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Image With Text';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Image with Text';

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
        'multiple' => true,
        'jsx' => true,
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
    public $styles = ['light'];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'image' => 'images/demo/service.jpg',
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Consectetur adipisicing elit. Esse ipsa reprehenderit, ad dolor nemo neque, tempora voluptatum omnis inventore laborum velit architecto, placeat amet dicta? Tempora doloribus reprehenderit impedit libero.',
        'link' => [
            'url' => '#',
            'title' => 'Read more',
            'target' => '_blank',
        ],
    ];
    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Image With Text block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'image' => get_field('image') ?: asset($this->example['image']),
            'title' => get_field('title') ?: $this->example['title'],
            'description' => get_field('description') ?: $this->example['description'],
            'link' => get_field('link') ?: $this->example['link'],
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('image_with_text');

        $fields
            ->addImage('image', [
                'return_format' => 'url',
            ])
            ->addText('title')
            ->addTextarea('description')
            ->addLink('link');

        return $fields->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function items()
    {
        return get_field('items') ?: $this->example['items'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
