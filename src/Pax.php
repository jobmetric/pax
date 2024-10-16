<?php

namespace JobMetric\Pax;

use Illuminate\Contracts\Foundation\Application;

class Pax
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Pax instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
