<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Form\FormBuilder;
use JobMetric\Form\Group\GroupBuilder;
use JobMetric\Form\Tab\TabBuilder;
use JobMetric\Pax\Events\PaxBootEvent;
use JobMetric\Setting\Facades\SettingType;
use Throwable;

class AddSettingTypeListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(PaxBootEvent $event): void
    {
        SettingType::define('pax_config')
            ->label('pax::base.setting_type.pax_config.label')
            ->description('pax::base.setting_type.pax_config.description')
            ->form(function (FormBuilder $formBuilder) {
                $formBuilder
                    ->tab(function (TabBuilder $tabBuilder) {
                        $tabBuilder
                            ->id('general')
                            ->label('pax::base.setting_type.pax_config.tab.general.label')
                            ->selected()
                            ->group(function (GroupBuilder $groupBuilder) {
                                $groupBuilder
                                    ->label('pax::base.setting_type.pax_config.tab.general.group_currency_label')
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('pax::base.setting_type.pax_config.tab.general.product_limit')
                                            ->validation('required|integer')
                                            ->name('pax_config_product_limit', 'product_limit');
                                    })
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('pax::base.setting_type.pax_config.tab.general.comment')
                                            ->name('pax_config_comment', 'comment');
                                    });
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('pax::base.setting_type.pax_config.tab.general.min_gift_cart')
                                    ->name('pax_config_min_gift_cart', 'min_gift_cart');
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('pax::base.setting_type.pax_config.tab.general.max_gift_cart')
                                    ->name('pax_config_max_gift_cart', 'max_gift_cart');
                            });
                    });
            });
    }
}
