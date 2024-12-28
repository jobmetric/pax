<?php

namespace JobMetric\Pax;

use Illuminate\Support\Facades\App;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\AssetFolderNotFoundException;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\RouteRegistry;
use JobMetric\Pax\Events\PaxBootedEvent;
use JobMetric\Pax\Events\PaxBootEvent;
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
        event(new PaxBootEvent);

        App::booted(function () {
            event(new PaxBootedEvent);
        });
    }
}
