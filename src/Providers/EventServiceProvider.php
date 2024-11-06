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
        \JobMetric\Pax\Events\PaxBootedEvent::class => [
            \JobMetric\Pax\Listeners\AddPanelMenuListeners::class,
        ],

        \JobMetric\Category\Events\CategoryTypeEvent::class => [
            \JobMetric\Pax\Listeners\AddCategoryTypePaxProductCategoryListeners::class,
            \JobMetric\Pax\Listeners\AddCategoryTypeBlogCategoryListeners::class,
            \JobMetric\Pax\Listeners\AddCategoryTypeGroupCustomerListeners::class,
        ],
    ];
}
