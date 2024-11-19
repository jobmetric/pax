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
                "pax_product_category" => "دسته‌بندی ارزها",
                "group_content" => "محتوا",
                "pax_blog_category" => "دسته‌بندی بلاگ",
                "group_menu" => "منو و لیست",
                "pax_menu_manager" => "مدیریت منوها",
            ],
        ],
        "sell" => [
            "name" => "فروش",
            "title" => "مدیریت فروش",
            "menus" => [
                "group_sell" => "فروش",
                "group_advertising_and_marketing" => "تبلیغات و بازاریابی",
                "group_financial_management" => "مدیریت مالی",
            ],
        ],
        "account" => [
            "name" => "حساب های کاربری",
            "title" => "حساب های کاربری",
            "menus" => [
                "group_customer" => "مشتری‌ها",
                "pax_group_customer" => "گروه مشتریان",
            ],
        ],
        "system" => [
            "name" => "مدیریت",
            "title" => "مدیریت سیستم",
            "menus" => [
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
        "pax_product_category" => [
            "label" => "دسته‌بندی ارزها",
            "description" => "توضیحات دسته‌بندی ارزها",
            "translation" => [
                "name" => [
                    "label" => "نام",
                    "info" => "نام دسته‌بندی ارزها",
                    "placeholder" => "نام دسته‌بندی ارزها را وارد کنید",
                ],
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
        "pax_blog_category" => [
            "label" => "دسته‌بندی بلاگ",
            "description" => "توضیحات دسته‌بندی بلاگ",
            "translation" => [
                "name" => [
                    "label" => "نام",
                    "info" => "نام دسته‌بندی بلاگ",
                    "placeholder" => "نام دسته‌بندی بلاگ را وارد کنید",
                ],
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
        "pax_group_customer" => [
            "label" => "گروه مشتریان",
            "description" => "توضیحات گروه مشتریان",
            "translation" => [
                "name" => [
                    "label" => "نام",
                    "info" => "نام گروه مشتریان",
                    "placeholder" => "نام گروه مشتریان را وارد کنید",
                ],
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات گروه مشتریان",
                    "placeholder" => "توضیحات گروه مشتریان را وارد کنید",
                ],
            ],
        ],
        "pax_menu" => [
            "label" => "مدیریت منوها",
            "description" => "توضیحات مدیریت منوها",
            "translation" => [
                "name" => [
                    "label" => "نام",
                    "info" => "نام منو",
                    "placeholder" => "نام منو را وارد کنید",
                ],
                "description" => [
                    "label" => "توضیحات",
                    "info" => "توضیحات منو",
                    "placeholder" => "توضیحات منو را وارد کنید",
                ],
            ],
        ],
    ],

];
