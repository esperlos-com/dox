<?php


namespace App\Http\Helpers;


use App\Models\Document;
use App\Models\Language;
use App\Models\Setting;
use App\Models\User;
use App\Models\Version;
use Illuminate\Support\Facades\Http;
use function PHPUnit\Framework\isEmpty;

class DocumentHelper
{

    public static function getVersion(){


        if(session()->has('version')){
            return session()->get('version');
        }

        $lastVersion = Version::latest()->first()->id;
        session()->put('version',$lastVersion);
        return $lastVersion;

    }

    public static function getLanguage(){


        if(session()->has('language')){
            return session()->get('language');
        }

        $defaultLanguage = Setting::find(1)->default_language_id;
        session()->put('language',$defaultLanguage);
        return $defaultLanguage;

    }


    public static function menuHasChild($menuId){

        $menuIdsInThisVersion = Document::where('version_id',self::getVersion())->pluck('menu_id')->toArray();

        $submenu = \App\Models\Menu::where('pid',$menuId)->whereIn('id',$menuIdsInThisVersion)->first();

        return isset($submenu);
    }





}
