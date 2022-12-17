<?php

namespace App\Http\Helpers;


use Illuminate\Support\Facades\Lang;
use JetBrains\PhpStorm\Pure;

class Strings
{

    public static function appName(){
        return Lang::get('panel/global.app_name');
    }

    public static function successMessage(){
        return Lang::get('alert.success');
    }


}
