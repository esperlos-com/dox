<?php

namespace App\Http\Helpers;


use Illuminate\Support\Facades\URL;

class Generators
{


    public static function addRoute(): string
    {
        return str_replace(request()->root(),'',request()->url()).'/-1';
    }
    public static function urlWithoutParam(): string
    {
        return request()->root().request()->route()->compiled->getStaticPrefix().'/';
    }
}
