<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{\App\Http\Helpers\Strings::appName()}}</title>


    @livewireStyles

    <link rel="stylesheet" href="{{asset('assets/vendors/bundle.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/panel/app.css')}}" type="text/css">
    @if(app()->getLocale() != 'fa')
        <link rel="stylesheet" href="{{asset('assets/css/panel/style-ltr.css')}}" type="text/css">
    @endif

</head>
<body class="bg-white h-100-vh p-t-0">

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
    <span>@lang('panel/global.loading')</span>
</div>
<!-- end::page loader -->


{{$slot}}

@livewireScripts

<script src="{{asset('assets/vendors/bundle.js')}}"></script>
<script src="{{asset('assets/js/panel/app.js')}}"></script>
<script src="{{asset('assets/js/panel/alerts.js')}}"></script>


</body>
</html>
