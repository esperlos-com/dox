<?php

return [

    'app_name' => 'DOX',
    'loading' => 'loading...',
    'profile' => 'profile',
    'setting' => 'setting',
    'logout' => 'logout',

    'alert' => [
        'success' => 'operation done successfully'
    ],
    'search' => 'search...',
    'button' => [
        'yes' => 'yes',
        'no' => 'no',
        'close' => 'close',
        'submit' => 'submit',
        'login' => 'login',
    ],

    'table_header' => [
        'id' => 'identifier',
        'title' => 'title',
        'menu' => 'menu',
        'content' => 'content',
        'created_at' => 'created date',
        'actions' => 'actions',
        'main_text' => 'main text',
        'translated_text' => 'translated text',


    ],


    'login' => [
        'title' => 'manage dox',
        'form' => [
            'title' => 'dox is a step to make the world better',
            'username' => 'email',
            'password'=>'password'
        ]
    ],


    'sidebar' => [
        'head' => 'index',
        'menu_items' => [
            'dashboard' => 'dashboard',
            'initials' => 'initials',
            'languages' => 'languages',
            'versions' => 'versions',
            'translate' => 'translate',
            'documents' => 'documents',
            'menus' => 'menus',
            'media' => 'media',

        ]
    ],

    'dashboard' => [
        'first_box' => [
            'title' => 'dox is awesome',
            'content' => 'by dox, share your document easy ;)'
        ]
    ],
    'document' => [
        'content' => [
            'title' => 'document list',
            'form' => [
                'content' => 'content'
            ]
        ],
        'form' => [
            'title' => 'submit document',
            'content' => 'content',
            'menu' => 'menu',
            'select_menu' => "select menu"
        ],
        'breadcrumbs' => [
            'title' => 'document',
            'subtitle1' => 'document management',
            'subtitle2' => 'document',
        ]
    ],
    'menu' => [
        'content' => [
            'title' => 'menu list',

        ],
        'add_submenu_modal' => [
            'title' => 'add submenu',
            'form' => [
                'title' => 'title',
                'slug' => 'slug (if it is not submenu)'
            ],
        ],
        'add_modal' => [
            'title' => 'add menu',
            'form' => [
                'title' => 'title',
                'slug' => 'slug (if it is not submenu)'
            ],
        ],
        'breadcrumbs' => [
            'title' => 'menu',
            'subtitle1' => 'menu management',
            'subtitle2' => 'menu',
        ]
    ],
    'language' => [
        'content' => [
            'title' => 'language list',
            'dialog_add' => 'add language',
        ],
        'form' => [
            'title' => 'title',
            'id' => 'identifier',
        ],
        'breadcrumbs' => [
            'title' => 'languages',
            'subtitle1' => 'languages management',
            'subtitle2' => 'languages',
        ]
    ],
    'translate' => [
        'content' => [
            'title' => 'language list',
            'dialog_add' => 'add language',
        ],
        'form' => [
            'translate_text' => 'translate text',
        ],
        'tabs' => [
            'menu' => 'menu',
            'document' => 'document',
        ],
        'breadcrumbs' => [
            'title' => 'translate',
            'subtitle1' => 'translate management',
            'subtitle2' => 'translate',
        ]
    ],
    'version' => [
        'content' => [
            'title' => 'version list',
            'dialog_add' => 'add version',
        ],
        'form' => [
            'title' => 'title',
        ],
        'breadcrumbs' => [
            'title' => 'version',
            'subtitle1' => 'version management',
            'subtitle2' => 'version',
        ]
    ],
    'media' => [
        'content' => [
            'title' => 'media list',
        ],
        'breadcrumbs' => [
            'title' => 'media',
            'subtitle1' => 'media management',
            'subtitle2' => 'media',
        ]
    ]


];
