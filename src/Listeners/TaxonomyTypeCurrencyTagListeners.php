<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Pax\Events\PaxBootEvent;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use Throwable;

class TaxonomyTypeCurrencyTagListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(PaxBootEvent $event): void
    {
        // currency_tag
        TaxonomyType::define('pax.currency_tag')
            ->label('pax::base.taxonomy_type.currency_tag.label')
            ->description('pax::base.taxonomy_type.currency_tag.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->seoTranslation()
            ->url()
            ->baseMedia();
    }
}
