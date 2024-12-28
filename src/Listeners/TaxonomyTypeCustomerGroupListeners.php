<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Media\ServiceType\MediaBuilder;
use JobMetric\Metadata\ServiceType\MetadataBuilder;
use JobMetric\Pax\Events\PaxBootEvent;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\ServiceType\TranslationBuilder;
use Throwable;

class TaxonomyTypeCustomerGroupListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(PaxBootEvent $event): void
    {
        // customer_group
        TaxonomyType::define('pax.customer_group')
            ->label('pax::base.taxonomy_type.customer_group.label')
            ->description('pax::base.taxonomy_type.customer_group.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('pax::base.taxonomy_type.customer_group.translation.description.label')
                        ->info('pax::base.taxonomy_type.customer_group.translation.description.info')
                        ->placeholder('pax::base.taxonomy_type.customer_group.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });
    }
}
