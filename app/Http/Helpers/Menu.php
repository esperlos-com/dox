<?php


namespace App\Http\Helpers;


use Illuminate\Support\Facades\URL;

class Menu
{


    public static function menuItems()
    {

        $menuItems = [
            ['title' => 'panel/global.sidebar.menu_items.dashboard', 'route' => 'dashboard', 'submenuItems' => []
            ],
            ['title' => 'panel/global.sidebar.menu_items.initials', 'route' => '',
                'submenuItems' =>
                    [
                        ['title' => 'panel/global.sidebar.menu_items.languages', 'route' => 'language-management', 'name' => 'language-management',],
                        ['title' => 'panel/global.sidebar.menu_items.versions', 'route' => 'version-management', 'name' => 'version-management',],
                        ['title' => 'panel/global.sidebar.menu_items.translate', 'route' => 'translate-management', 'name' => 'translate-management',],

                    ]
            ],
            ['title' => 'panel/global.sidebar.menu_items.documents', 'route' => '',
                'submenuItems' =>
                    [
                        ['title' => 'panel/global.sidebar.menu_items.menus', 'route' => 'menu-management', 'name' => 'menu-management',],
                        ['title' => 'panel/global.sidebar.menu_items.documents', 'route' => 'document-management', 'name' => 'document-management',],

                    ]
            ],
            ['title' => 'panel/global.sidebar.menu_items.media', 'route' => '',
                'submenuItems' =>
                    [
                        ['title' => 'panel/global.sidebar.menu_items.media', 'route' => 'media-management', 'name' => 'media-management',],
                    ]
            ],
        ];


        return $menuItems;
    }



}
