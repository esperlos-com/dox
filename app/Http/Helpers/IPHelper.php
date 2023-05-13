<?php


namespace App\Http\Helpers;


use Illuminate\Support\Facades\App;
use Stevebauman\Location\Facades\Location;

class IPHelper
{
    public static function isIran()
    {


        if (\Request::ip() == "127.0.0.1" || \Request::ip() == null) {
            $ip = "95.216.156.183";
        } else {
            $ip = \Request::ip();
        }

        // ir 5.202.16.59
        // fore 95.216.156.183
        $currentUserInfo = Location::get($ip);
        if ($currentUserInfo)
            if ($currentUserInfo->countryCode == "IR") {
                App::setLocale('fa');
                return true;
            }


        return false;
    }
}
