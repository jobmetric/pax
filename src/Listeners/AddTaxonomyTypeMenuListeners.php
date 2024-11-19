<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypeMenuListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'pax.menu',
            'args' => [
                'label' => 'pax::base.taxonomy_type.pax_menu.label',
                'description' => 'pax::base.taxonomy_type.pax_menu.description',
                'hierarchical' => false,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'pax::base.taxonomy_type.pax_menu.translation.name.label',
                            'info' => 'pax::base.taxonomy_type.pax_menu.translation.name.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_menu.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'pax::base.taxonomy_type.pax_menu.translation.description.label',
                            'info' => 'pax::base.taxonomy_type.pax_menu.translation.description.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_menu.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                ],
            ],
        ]);
    }
}
