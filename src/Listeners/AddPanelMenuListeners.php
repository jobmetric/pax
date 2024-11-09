<?php

namespace JobMetric\Pax\Listeners;

use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Pax\Events\PaxBootedEvent;

class AddPanelMenuListeners
{
    /**
     * Handle the event.
     */
    public function handle(PaxBootedEvent $event): void
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
            'position' => 10,
        ]);

        Panelio::addSection('pax', 'sell', [
            'name' => 'pax::base.sections.sell.name',
            'args' => [
                'title' => 'pax::base.sections.sell.title',
                'icon' => '<i class="ki-duotone ki-graph-up fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>',
            ],
            'permission' => 'pax.sell',
            'position' => 20,
        ]);

        Panelio::addSection('pax', 'account', [
            'name' => 'pax::base.sections.account.name',
            'args' => [
                'title' => 'pax::base.sections.account.title',
                'icon' => '<i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'pax.account',
            'position' => 30,
        ]);

        Panelio::addSection('pax', 'system', [
            'name' => 'pax::base.sections.system.name',
            'args' => [
                'title' => 'pax::base.sections.system.title',
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'pax.system',
            'position' => 40,
        ]);

        Panelio::addSection('pax', 'report', [
            'name' => 'pax::base.sections.report.name',
            'args' => [
                'title' => 'pax::base.sections.report.title',
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'pax.report',
            'position' => 50,
        ]);

        // added menu for content section
        Panelio::addMenu('pax', 'content', [
            'type' => 'group',
            'name' => 'pax::base.sections.content.menus.group_product',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('pax', 'content', [
            'type' => 'link',
            'name' => 'pax::base.sections.content.menus.pax_product_category',
            'link' => route('taxonomy.{type}.index', [
                'panel' => 'pax',
                'section' => 'content',
                'type' => 'pax.product_category',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 5,
        ]);

        Panelio::addMenu('pax', 'content', [
            'type' => 'group',
            'name' => 'pax::base.sections.content.menus.group_content',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('pax', 'content', [
            'type' => 'link',
            'name' => 'pax::base.sections.content.menus.pax_blog_category',
            'link' => route('taxonomy.{type}.index', [
                'panel' => 'pax',
                'section' => 'content',
                'type' => 'pax.blog_category',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 105,
        ]);

        Panelio::addMenu('pax', 'content', [
            'type' => 'group',
            'name' => 'pax::base.sections.content.menus.group_menu',
            'permission' => '',
            'position' => 200,
        ]);

        // added group menu for sale section
        Panelio::addMenu('pax', 'sell', [
            'type' => 'group',
            'name' => 'pax::base.sections.sell.menus.group_sell',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('pax', 'sell', [
            'type' => 'group',
            'name' => 'pax::base.sections.sell.menus.group_advertising_and_marketing',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('pax', 'sell', [
            'type' => 'group',
            'name' => 'pax::base.sections.sell.menus.group_financial_management',
            'permission' => '',
            'position' => 200,
        ]);

        // added group menu for account section
        Panelio::addMenu('pax', 'account', [
            'type' => 'group',
            'name' => 'pax::base.sections.account.menus.group_customer',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('pax', 'account', [
            'type' => 'link',
            'name' => 'pax::base.sections.account.menus.pax_group_customer',
            'link' => route('taxonomy.{type}.index', [
                'panel' => 'pax',
                'section' => 'account',
                'type' => 'pax.group_customer',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 105,
        ]);

        // added group menu for system section
        Panelio::addMenu('pax', 'system', [
            'type' => 'group',
            'name' => 'pax::base.sections.system.menus.group_plugins_and_modules',
            'permission' => '',
            'position' => 100,
        ]);
    }
}
