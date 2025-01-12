<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class ProductDetail extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('product_detail');

        $fields
            ->setLocation('post_type', '==', 'product');

        $fields
            ->addText('brand')
            ->addNumber('price');

        return $fields->build();
    }
}
