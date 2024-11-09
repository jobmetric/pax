<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypeBlogCategoryListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'pax.blog_taxonomy',
            'args' => [
                'label' => 'pax::base.taxonomy_type.pax_blog_taxonomy.label',
                'description' => 'pax::base.taxonomy_type.pax_blog_taxonomy.description',
                'hierarchical' => true,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'pax::base.taxonomy_type.pax_blog_taxonomy.translation.name.label',
                            'info' => 'pax::base.taxonomy_type.pax_blog_taxonomy.translation.name.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_blog_taxonomy.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'pax::base.taxonomy_type.pax_blog_taxonomy.translation.description.label',
                            'info' => 'pax::base.taxonomy_type.pax_blog_taxonomy.translation.description.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_blog_taxonomy.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                    'seo' => true,
                ],
                'metadata' => [
                    'column_number' => [
                        'type' => 'number',
                        'default' => 1,
                        'label' => 'pax::base.taxonomy_type.pax_blog_taxonomy.metadata.column_number.label',
                        'info' => 'pax::base.taxonomy_type.pax_blog_taxonomy.metadata.column_number.info',
                        'placeholder' => 'pax::base.taxonomy_type.pax_blog_taxonomy.metadata.column_number.placeholder',
                        'validation' => 'integer|min:1|max:4',
                    ],
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
