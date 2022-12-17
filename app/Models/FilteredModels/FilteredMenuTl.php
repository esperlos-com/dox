<?php


namespace App\Models\FilteredModels;




use App\Models\Menu;
use App\Models\MenuTl;
use App\Models\Setting;

class FilteredMenuTl
{

    public static function languageMenu()
    {

        $settings = Setting::find(1);

        $data = MenuTl::where('language_id',$settings->default_language_id);



        return $data;
    }

}
