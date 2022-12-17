<?php


namespace App\Http\Helpers;


use BenSampo\Enum\Enum;
use Illuminate\Support\Facades\Session;

class Show
{

    const ALERT_SUCCESS = 'success';
    const ALERT_WARNING = 'warning';
    const ALERT_ERROR = 'error';
    const ALERT_ERROR_CUSTOM = 'error-custom';
    const ALERT_SUCCESS_CUSTOM = 'success-custom';
    const ALERT_ROUTED_SUCCESS_CUSTOM = 'routed-success-custom';
    const LOGIN_ERROR = 'login-error';
    const PAGINATE_COUNT = 10;

    public static function alert($type, $message = '', $route = null)
    {

        if ($type == 'success')
            Session::flash('alert', 'عملیات با موفقیت انجام شد');
        if ($type == 'error')
            Session::flash('alert', 'عملیات با خطا مواجه شد');
        if ($type == 'login-error')
            Session::flash('login-error', 'نام کاربری یا رمز عبور اشتباه است');
        if ($type == 'error-custom')
            Session::flash('error-custom', $message);
        if ($type == 'success-custom')
            Session::flash('success-custom', $message);
        if ($type == 'routed-success-custom')
            Session::flash('routed-success-custom', [$message, $route]);

    }


    public static function popupAlert($type, $context, $message)
    {
        $context->dispatchBrowserEvent('pop-alert', ['type' => $type, 'message' => $message],);


    }

}
