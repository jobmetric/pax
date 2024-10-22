<?php

namespace JobMetric\Pax;

use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\AssetFolderNotFoundException;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Panelio\RouteRegistry;
use JobMetric\Pax\Providers\EventServiceProvider;

class PaxServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     * @throws ViewFolderNotFoundException
     * @throws AssetFolderNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('pax')
            ->hasAsset()
            ->hasConfig()
            ->hasTranslation()
            ->hasView()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Pax', Pax::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterRegisterPackage(): void
    {
        RouteRegistry::addPanel($this->package);
    }

    public function afterBootPackage(): void
    {
        Panelio::addPanel('pax', [
            'name' => 'pax::base.panel_name',
            'namespace' => 'JobMetric\Pax\Http\Controllers',
            'args' => [
                'description' => 'pax::base.description',
                'icon' => '<i class="ki-duotone ki-abstract-4 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'pax',
            'position' => 50,
        ]);

        Panelio::addSection('pax', 'content', [
            'name' => 'pax::base.sections.content.name',
            'args' => [
                'title' => 'pax::base.sections.content.title',
                'icon' => '<i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'pax.content',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'sell', [
            'name' => 'pax::base.sections.sell.name',
            'args' => [
                'title' => 'pax::base.sections.sell.title',
                'icon' => '<i class="ki-duotone ki-graph-up fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>',
            ],
            'permission' => 'pax.sell',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'account', [
            'name' => 'pax::base.sections.account.name',
            'args' => [
                'title' => 'pax::base.sections.account.title',
                'icon' => '<i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'pax.account',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'system', [
            'name' => 'pax::base.sections.system.name',
            'args' => [
                'title' => 'pax::base.sections.system.title',
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'pax.system',
            'position' => 0,
        ]);

        Panelio::addSection('pax', 'report', [
            'name' => 'pax::base.sections.report.name',
            'args' => [
                'title' => 'pax::base.sections.report.title',
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'pax.report',
            'position' => 0,
        ]);
    }
}
