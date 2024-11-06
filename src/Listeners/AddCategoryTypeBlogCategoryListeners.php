<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Category\Events\CategoryTypeEvent;

class AddCategoryTypeBlogCategoryListeners
{
    /**
     * Handle the event.
     */
    public function handle(CategoryTypeEvent $event): void
    {
        $event->addType([
            'type' => 'pax.blog_category',
            'args' => [
                'label' => 'pax::base.category_type.pax_blog_category.label',
                'description' => 'pax::base.category_type.pax_blog_category.description',
                'hierarchical' => true,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'pax::base.category_type.pax_blog_category.translation.name.label',
                            'info' => 'pax::base.category_type.pax_blog_category.translation.name.info',
                            'placeholder' => 'pax::base.category_type.pax_blog_category.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'pax::base.category_type.pax_blog_category.translation.description.label',
                            'info' => 'pax::base.category_type.pax_blog_category.translation.description.info',
                            'placeholder' => 'pax::base.category_type.pax_blog_category.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                    'seo' => true,
                ],
                'metadata' => [
                    'column_number' => [
                        'type' => 'number',
                        'default' => 1,
                        'label' => 'pax::base.category_type.pax_blog_category.metadata.column_number.label',
                        'info' => 'pax::base.category_type.pax_blog_category.metadata.column_number.info',
                        'placeholder' => 'pax::base.category_type.pax_blog_category.metadata.column_number.placeholder',
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
