<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;
use function \Roots\asset;

class HomeSlider extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Home Slider';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Homepage Slider';

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
    public $styles = ['light'];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'slides' => [
            [
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'tagline' => 'Maxime doloremque pariatur',
                'link' => [
                    'url' => '#',
                    'title' => 'Read more',
                    'target' => '_blank',
                ],
                'background' => 'images/demo/slide1.jpg',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'tagline' => 'Maxime doloremque pariatur',
                'link' => [
                    'url' => '#',
                    'title' => 'Read more',
                    'target' => '_blank',
                ],
                'background' => 'images/demo/slide2.jpg',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'tagline' => 'Maxime doloremque pariatur',
                'link' => [
                    'url' => '#',
                    'title' => 'Read more',
                    'target' => '_blank',
                ],
                'background' => 'images/demo/slide3.jpg',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'tagline' => 'Maxime doloremque pariatur',
                'link' => [
                    'url' => '#',
                    'title' => 'Read more',
                    'target' => '_blank',
                ],
                'background' => 'images/demo/slide4.jpg',
            ],
        ],
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Home Slider block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array {
        $example = $this->example;
        $example['slides'] = array_map( fn( $item ) => [
            'title' => $item['title'],
            'tagline' => $item['tagline'],
            'link' => $item['link'],
            'background' => asset($item['background']),
        ], $example['slides']);

        return [
            'slides' => get_field('slides') ?: $example['slides'],
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('home_slider');

        $fields
            ->addRepeater('slides')
                ->addText('title')
                ->addText('tagline')
                ->addLink('link')
                ->addImage('background', [
                    'return_format' => 'url',
                ])
            ->endRepeater();

        return $fields->build();
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
