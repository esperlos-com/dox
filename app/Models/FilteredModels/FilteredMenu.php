<?php


namespace App\Models\FilteredModels;




use App\Models\Menu;
use App\Models\MenuTl;
use App\Models\Setting;

class FilteredMenu
{

    public static function titleMenu()
    {

        $data = Menu::where('pid',null);



        return $data;
    }

}
