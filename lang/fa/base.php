<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Pax Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during Pax for
    | various messages that we need to display to the user.
    |
    */

    "panel_name" => "صرافی (Pax)",

    "description" => "یک پلت فرم مبادله ارز ایمن و شهودی که برای تسهیل تراکنش های یکپارچه و ایجاد آرامش در مبادلات مالی طراحی شده است.",

    "sections" => [
        "content" => [
            "name" => "محتوا",
            "title" => "مدیریت محتوا",
            "menus" => [
                "group_product" => "محصول و خدمت",
                "currencies" => "لیست ارزها",
                "currency_type" => "دسته‌بندی‌های ارزی",
                "currency_tag" => "تگ‌های ارزی",
                "group_content" => "محتوا",
                "blog_post" => "پست بلاگ",
                "blog_category" => "دسته‌بندی بلاگ",
            ],
        ],
        "sell" => [
            "name" => "فروش",
            "title" => "مدیریت فروش",
            "menus" => [
                "group_sell" => "فروش",
                "orders" => "سفارشات",
                "invoices" => "فاکتورها",
                "group_advertising_and_marketing" => "تبلیغات و بازاریابی",
                "advertising" => "تبلیغات",
                "campaigns" => "کمپین‌ها",
                "group_financial_management" => "مدیریت مالی",
            ],
        ],
        "account" => [
            "name" => "حساب های کاربری",
            "title" => "حساب های کاربری",
            "menus" => [
                "group_customer" => "مشتری",
                "customers" => "مشتری‌ها",
                "customer_group" => "گروه‌های مشتریان",
            ],
        ],
        "system" => [
            "name" => "مدیریت",
            "title" => "مدیریت سیستم",
            "menus" => [
                "configuration" => "تنظیمات",
                "group_plugins_and_modules" => "افزونه‌ها و ماژول‌ها",
            ],
        ],
        "report" => [
            "name" => "گزارشات",
            "title" => "گزارشات مدیریتی",
        ],
    ],

    "dashboard" => [
        "title" => "داشبورد صرافی (Pax)"
    ],

    "taxonomy_type" => [
        "currency_type" => [
            "label" => "دسته‌بندی ارزها",
            "description" => "توضیحات دسته‌بندی ارزها",
            "translation" => [
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات دسته‌بندی ارزها",
                    "placeholder" => "توضیحات دسته‌بندی ارزها را وارد کنید",
                ],
            ],
            "metadata" => [
                "column_number" => [
                    "label" => "تعداد ستون",
                    "info" => "تعداد ستون دسته‌بندی محصولات",
                    "placeholder" => "تعداد ستون دسته‌بندی محص",
                ],
            ],
        ],
        "currency_tag" => [
            "label" => "تگ‌های ارز",
            "description" => "توضیحات تگ‌های ارز",
        ],
        "blog_category" => [
            "label" => "دسته‌بندی بلاگ",
            "description" => "توضیحات دسته‌بندی بلاگ",
            "translation" => [
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات دسته‌بندی بلاگ",
                    "placeholder" => "توضیحات دسته‌بندی بلاگ را وارد کنید",
                ],
            ],
            "metadata" => [
                "column_number" => [
                    "label" => "تعداد ستون",
                    "info" => "تعداد ستون دسته‌بندی محصولات",
                    "placeholder" => "تعداد ستون دسته‌بندی محصولات",
                ],
            ],
        ],
        "customer_group" => [
            "label" => "گروه مشتریان",
            "description" => "مدیریت گروه‌های مشتریان در صرافی",
            "translation" => [
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات گروه مشتریان",
                    "placeholder" => "توضیحات گروه مشتریان را وارد کنید",
                ],
            ],
        ],
    ],

    "setting_type" => [
        "pax_config" => [
            "label" => "تنظیمات صرافی",
            "description" => "تنظیمات صرافی",
            "tab" => [
                "general" => [
                    "label" => "عمومی",
                    "group_currency_label" => "تنظیمات ارزها",
                    "product_limit" => "تعداد آیتم ها در هر صفحه",
                    "comment" => "اجازه ثبت نظر",
                    "min_gift_cart" => "حداقل کارت هدیه",
                    "max_gift_cart" => "حداکثر کارت هدیه",
                ],
            ],
        ],
    ],

];
