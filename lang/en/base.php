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

    "panel_name" => "Exchange (Pax)",

    "description" => "A secure and intuitive currency exchange platform designed to facilitate seamless transactions and promote peace of mind in financial exchanges.",

    "sections" => [
        "content" => [
            "name" => "Content",
            "title" => "Content Management",
            "menus" => [
                "group_product" => "Product and Service",
                "pax_product_category" => "Currency Categories",
                "group_content" => "Content",
                "pax_blog_category" => "Blog Categories",
                "group_menu" => "Menu and List",
                "pax_menu_manager" => "Menu Management",
            ],
        ],
        "sell" => [
            "name" => "Sell",
            "title" => "Sell Management",
            "menus" => [
                "group_sell" => "Sell",
                "group_advertising_and_marketing" => "Advertising and Marketing",
                "group_financial_management" => "Financial Management",
            ],
        ],
        "account" => [
            "name" => "Accounts",
            "title" => "Account Management",
            "menus" => [
                "group_customer" => "Customers",
                "pax_group_customer" => "Customer Groups",
            ],
        ],
        "system" => [
            "name" => "System",
            "title" => "System Management",
            "menus" => [
                "group_plugins_and_modules" => "Plugins and Modules",
            ],
        ],
        "report" => [
            "name" => "Reports",
            "title" => "Management Reports",
        ],
    ],

    "dashboard" => [
        "title" => "Exchange Dashboard (Pax)"
    ],

    "taxonomy_type" => [
        "pax_product_category" => [
            "label" => "Currency Categories",
            "description" => "Description of currency categories",
            "translation" => [
                "name" => [
                    "label" => "Name",
                    "info" => "Name of currency categories",
                    "placeholder" => "Enter the name of currency categories",
                ],
                "description" => [
                    "label" => "Description",
                    "info" => "Description of currency categories",
                    "placeholder" => "Enter the description of currency categories",
                ],
            ],
            "metadata" => [
                "column_number" => [
                    "label" => "Column Number",
                    "info" => "Number of columns for currency categories",
                    "placeholder" => "Number of columns for currency categories",
                ],
            ],
        ],
        "pax_blog_category" => [
            "label" => "Blog Categories",
            "description" => "Description of blog categories",
            "translation" => [
                "name" => [
                    "label" => "Name",
                    "info" => "Name of blog categories",
                    "placeholder" => "Enter the name of blog categories",
                ],
                "description" => [
                    "label" => "Description",
                    "info" => "Description of blog categories",
                    "placeholder" => "Enter the description of blog categories",
                ],
            ],
            "metadata" => [
                "column_number" => [
                    "label" => "Column Number",
                    "info" => "Number of columns for blog categories",
                    "placeholder" => "Number of columns for blog categories",
                ],
            ],
        ],
        "pax_group_customer" => [
            "label" => "Customer Groups",
            "description" => "Description of customer groups",
            "translation" => [
                "name" => [
                    "label" => "Name",
                    "info" => "Name of customer groups",
                    "placeholder" => "Enter the name of customer groups",
                ],
                "description" => [
                    "label" => "Description",
                    "info" => "Description of customer groups",
                    "placeholder" => "Enter the description of customer groups",
                ],
            ],
        ],
        "pax_menu" => [
            "label" => "Menu Management",
            "description" => "Description of menu management",
            "translation" => [
                "name" => [
                    "label" => "Name",
                    "info" => "Name of menu",
                    "placeholder" => "Enter the name of menu",
                ],
                "description" => [
                    "label" => "Description",
                    "info" => "Description of menu",
                    "placeholder" => "Enter the description of menu",
                ],
            ],
        ],
    ],

];
