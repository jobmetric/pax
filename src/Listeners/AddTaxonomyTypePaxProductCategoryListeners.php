<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypePaxProductCategoryListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'pax.product_category',
            'args' => [
                'label' => 'pax::base.taxonomy_type.pax_product_category.label',
                'description' => 'pax::base.taxonomy_type.pax_product_category.description',
                'hierarchical' => true,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'pax::base.taxonomy_type.pax_product_category.translation.name.label',
                            'info' => 'pax::base.taxonomy_type.pax_product_category.translation.name.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_product_category.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'pax::base.taxonomy_type.pax_product_category.translation.description.label',
                            'info' => 'pax::base.taxonomy_type.pax_product_category.translation.description.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_product_category.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                    'seo' => true,
                ],
                'has_url' => true,
                'has_base_media' => true,
                'media' => [
                    'gallery' => [
                        'media_collection' => 'public',
                        'multiple' => true,
                        'mime_types' => [
                            'image'
                        ],
                        'size' => [
                            'default' => [
                                'w' => 500,
                                'h' => 500
                            ],
                            'thumb' => [
                                'w' => 100,
                                'h' => 100
                            ]
                        ]
                    ]
                ],
            ],
        ]);
    }
}
