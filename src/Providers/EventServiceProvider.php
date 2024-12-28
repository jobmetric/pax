<?php

namespace JobMetric\Pax\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        \JobMetric\Pax\Events\PaxBootEvent::class => [
            \JobMetric\Pax\Listeners\AddSettingTypeListeners::class,
            \JobMetric\Pax\Listeners\TaxonomyTypeCurrencyTypeListeners::class,
            \JobMetric\Pax\Listeners\TaxonomyTypeCurrencyTagListeners::class,
            \JobMetric\Pax\Listeners\TaxonomyTypeBlogCategoryListeners::class,
            \JobMetric\Pax\Listeners\TaxonomyTypeCustomerGroupListeners::class,
        ],
        \JobMetric\Pax\Events\PaxBootedEvent::class => [
            \JobMetric\Pax\Listeners\AddPanelMenuListeners::class,
        ],
    ];
}
