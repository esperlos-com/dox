<?php

return [
    'app_name' => 'داکس',
    'loading' => 'در حال بارگذاری ...',
    'profile' => 'پروفایل',
    'setting' => 'تنظیمات',
    'logout' => 'خروج',

    'alert' => [
        'success' => 'عملیات با موفقیت انجام شد'
    ],
    'search' => 'جستجو...',
    'button' => [
        'yes' => 'بله',
        'no' => 'خیر',
        'close' => 'بستن',
        'submit' => 'ثبت',
        'login' => 'ورود',
    ],

    'table_header' => [
        'id' => 'شناسه',
        'title' => 'عنوان',
        'menu' => 'منو',
        'content' => 'محتوا',
        'created_at' => 'تاریخ ثبت',
        'actions' => 'عملیات',
        'main_text' => 'متن اصلی',
        'translated_text' => 'متن ترجمه',
    ],


    'login' => [
        'title' => 'مدیریت داکس',
        'form' => [
            'title' => 'داکس یک قدم برای بهتر شدن دنیاست',
            'username' => 'ایمیل',
            'password'=>'رمز عبور'
        ]
    ],

    'sidebar' => [
        'head' => 'فهرست',
        'menu_items' => [
            'dashboard' => 'پیشخوان',
            'initials' => 'ورودی ها',
            'languages' => 'زبان ها',
            'versions' => 'نسخه ها',
            'translate' => 'ترجمه',
            'documents' => 'اسناد',
            'menus' => 'فهرست ها',
            'media' => 'رسانه',

        ]
    ],
    'dashboard' => [
        'first_box' => [
            'title' => 'داکس فوق العادست',
            'content' => 'با داکس، اسنادت رو به راحتی به اشتراک بذار ;)'
        ]
    ],
    'document' => [
        'content' => [
            'title' => 'لیست اسناد',
        ],
        'form' => [
            'title'=>'ثبت سند',
            'content' => 'محتوا',
            'menu' => 'منو',
            'select_menu' => "منو را انتخاب کنید"
        ],
        'breadcrumbs' => [
            'title' => 'اسناد',
            'subtitle1' => 'مدیریت اسناد',
            'subtitle2' => 'اسناد',
        ]
    ],
    'menu' => [
        'content' => [
            'title' => 'لیست منوها',

        ],
        'add_submenu_modal' => [
            'title' => 'افزودن زیرمنو',
            'form' => [
                'title' => 'عنوان',
                'slug' => 'شناسه لینک(در صورتی که زیرمنو نباشد)'
            ],
        ],

        'add_modal' => [
            'title' => 'افزودن منو',
            'form' => [
                'title' => 'عنوان',
                'slug' => 'شناسه لینک(در صورتی که زیرمنو نباشد)'
            ],
        ],

        'breadcrumbs' => [
            'title' => 'منو',
            'subtitle1' => 'مدیریت منو ها',
            'subtitle2' => 'منو',
        ]
    ],
    'language' => [
        'content' => [
            'title' => 'لیست زبان ها',
            'dialog_add' => 'افزودن زبان',
        ],
        'form' => [
            'title' => 'عنوان',
            'id' => 'شناسه',
        ],
        'breadcrumbs' => [
            'title' => 'زبان ها',
            'subtitle1' => 'مدیرت زبان ها',
            'subtitle2' => 'زبان ها',
        ]
    ],
    'translate' => [
        'content' => [
            'title' => 'لیست زبان ها',
            'dialog_add' => 'ترجمه منو',
        ],
        'form' => [
            'translate_text' => 'متن ترجمه',

        ],
        'tabs' => [
            'menu' => 'منو',
            'document' => 'سند',
        ],
        'breadcrumbs' => [
            'title' => 'ترجمه',
            'subtitle1' => 'مدیریت ترجمه ها',
            'subtitle2' => 'ترجمه',
        ]
    ],
    'version' => [
        'content' => [
            'title' => 'لیست نسخه ها',
            'dialog_add' => 'افزودن نسخه',
        ],
        'form' => [
            'title' => 'عنوان',
        ],
        'breadcrumbs' => [
            'title' => 'نسخه',
            'subtitle1' => 'مدیریت نسخه ها',
            'subtitle2' => 'نسخه',
        ]
    ],

    'media' => [
        'content' => [
            'title' => 'لیست رسانه',
        ],
        'breadcrumbs' => [
            'title' => 'رسانه',
            'subtitle1' => 'مدریت رسانه',
            'subtitle2' => 'رسانه',
        ]
    ]
];
