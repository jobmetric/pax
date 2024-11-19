<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypeGroupCustomerListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'pax.group_customer',
            'args' => [
                'label' => 'pax::base.taxonomy_type.pax_group_customer.label',
                'description' => 'pax::base.taxonomy_type.pax_group_customer.description',
                'hierarchical' => true,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'pax::base.taxonomy_type.pax_group_customer.translation.name.label',
                            'info' => 'pax::base.taxonomy_type.pax_group_customer.translation.name.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_group_customer.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'pax::base.taxonomy_type.pax_group_customer.translation.description.label',
                            'info' => 'pax::base.taxonomy_type.pax_group_customer.translation.description.info',
                            'placeholder' => 'pax::base.taxonomy_type.pax_group_customer.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                ],
                'has_base_media' => true,
            ],
        ]);
    }
}
