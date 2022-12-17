<?php


namespace App\Http\Helpers;


use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;

class DateTimeHelper
{

    public static function jalaliToGre($date, $separator = '-')
    {


        if (strlen($date) > 5) {


            $check = null;
            if (is_string($date))
                $check = $date != null;
            else
                $check = $date != null && $date->year != -1;

            if ($check) {


                if (strpos($date, $separator) !== false) {
                    $sep = explode($separator, $date);

                    $greDate = Verta::getGregorian($sep[0], $sep[1], $sep[2]);

                    return implode("-", $greDate);
                }

                if (strpos($date, $separator) !== false) {
                    $sep = explode($separator, $date);

                    $greDate = Verta::getGregorian($sep[0], $sep[1], $sep[2]);

                    return implode("-", $greDate);
                }
            }


        }

        return "";

    }


    public static function greToJalali($date, $divider = "-", $showTime = false): string
    {


        if (!str_contains($date, '0000-00-00')) {


            $check = null;
            if (is_string($date))
                $check = $date != null;
            else
                $check = $date != null && $date->year != -1;

            if ($check) {

                $sep0 = explode(' ', $date);
                $sep = explode('-', $sep0[0]);


                $greDate = Verta::getJalali($sep[0], $sep[1], $sep[2]);

                if ($showTime)
                    return implode($divider, $greDate) . " ساعت: " . $sep0[1];
                else
                    return implode($divider, $greDate);
            }
        }
        return "-";

    }


    public static function greToJalaliYear($date): string
    {


        if ($date != null && $date->year != -1) {
            $sep0 = explode(' ', $date);
            $sep = explode('-', $sep0[0]);


            $jalaliDate = Verta::getJalali($sep[0], $sep[1], $sep[2]);

            return $jalaliDate[0];

        }

        return "-";

    }

    public static function greYearToJalaliYear($year)
    {


        if ($year != null) {

            $jalaliDate = Verta::getJalali($year, 01, 01);

            return $jalaliDate[0] + 1;

        }

        return "-";

    }

    public static function jalaliYearGreToYear($year)
    {


        if ($year != null) {

            $gerDate = Verta::getGregorian($year, 01, 01);

            return $gerDate[0];

        }

        return "-";

    }


    public static function thisJalaliYear()
    {

        return DateTimeHelper::greToJalaliYear(Carbon::now());

    }

}
