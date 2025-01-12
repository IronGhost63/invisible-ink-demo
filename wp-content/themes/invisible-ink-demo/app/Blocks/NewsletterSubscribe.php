<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class NewsletterSubscribe extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Newsletter Subscribe';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Newsletter Subscribe';

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
        'title' => 'Subscribe to our newsletter',
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Newsletter Subscribe block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'title' => $this->title(),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('newsletter_subscribe');

        $fields
            ->addText('title');

        return $fields->build();
    }

    /**
     * Retrieve the items.
     *
     * @return array
     */
    public function title()
    {
        return get_field('title') ?: $this->example['title'];
    }

    /**
     * Assets enqueued when rendering the block.
     */
    public function assets(array $block): void
    {
        //
    }
}
