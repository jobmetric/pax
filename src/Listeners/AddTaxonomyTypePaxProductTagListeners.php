<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypePaxProductTagListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'pax.product_tag',
            'args' => [
                'label' => 'pax::base.taxonomy_type.pax_product_tag.label',
                'description' => 'pax::base.taxonomy_type.pax_product_tag.description',
                'hierarchical' => false,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'pax::base.taxonomy_type.pax_product_tag.translation.name.label',
                            'info' => 'pax::base.taxonomy_type.pax_product_tag.translation.name.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_product_tag.translation.name.placeholder',
                        ],
                    ],
                    'seo' => true,
                ],
                'has_url' => true,
                'has_base_media' => true,
            ],
        ]);
    }
}
