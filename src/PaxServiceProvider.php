<?php

namespace JobMetric\Pax;

use JobMetric\Pax\Providers\EventServiceProvider;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;

class PaxServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('pax')
            ->hasConfig()
            ->hasTranslation()
            ->hasRoute()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Pax', Pax::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterBootPackage(): void
    {
        Panelio::addPanel('pax', [
            'name' => config('pax.panel_name'),
            'namespace' => 'JobMetric\Pax\Http\Controllers',
            'args' => [
                'description' => trans('pax::base.description'),
                'icon' => 'fas fa-user-shield',
            ],
            'permission' => 'pax',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'content', [
            'name' => trans('pax::base.sections.content.name'),
            'args' => [
                'title' => trans('pax::base.sections.content.title'),
                'icon' => '<i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'pax.content',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'sell', [
            'name' => trans('pax::base.sections.sell.name'),
            'args' => [
                'title' => trans('pax::base.sections.sell.title'),
                'icon' => '<i class="ki-duotone ki-graph-up fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>',
            ],
            'permission' => 'pax.sell',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'account', [
            'name' => trans('pax::base.sections.account.name'),
            'args' => [
                'title' => trans('pax::base.sections.account.title'),
                'icon' => '<i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'pax.account',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'system', [
            'name' => trans('pax::base.sections.system.name'),
            'args' => [
                'title' => trans('pax::base.sections.system.title'),
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'pax.system',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'report', [
            'name' => trans('pax::base.sections.report.name'),
            'args' => [
                'title' => trans('pax::base.sections.report.title'),
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'pax.report',
            'position' => 0,
        ]);
    }
}
