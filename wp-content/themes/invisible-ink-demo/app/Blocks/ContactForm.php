<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class ContactForm extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Contact Form';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Contact Form';

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
        'title' => 'Send us a message',
    ];

    /**
     * The block template.
     *
     * @var array
     */
    public $template = [
        'core/heading' => ['placeholder' => 'Hello World'],
        'core/paragraph' => ['placeholder' => 'Welcome to the Contact Form block.'],
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'title' => get_field('title') ?: $this->example['title'],
            'contact_form_id' => trim( get_field('contact_form_id') ),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array {
        global $wpdb;

        $sql = 'SELECT id, title FROM '. $wpdb->prefix  .'fluentform_forms LIMIT 0,1000';
        $results = $wpdb->get_results($sql, ARRAY_A);
        $choices = [];

        foreach( $results as $row ) {
            $choices[' '.$row['id']] = $row['title'];
        }

        $fields = Builder::make('contact_form');

        $fields
            ->addText('title')
            ->addSelect('contact_form_id', [
                'ui' => 1,
                'label' => 'Choose Contact Form',
                'choices' => $choices,
            ]);

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
