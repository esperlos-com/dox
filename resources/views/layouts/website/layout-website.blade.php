<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('doxconf.app_name')}}</title>
    @livewireStyles


    <link rel="stylesheet" href={{asset('assets/css/website/app.css')}} type="text/css"/>
    @stack('custom-styles')




<body class="{{\App\Http\Helpers\DocumentHelper::getLanguage() == 'fa'?'direction-rtl':'direction-ltr'}}">



<livewire:website.components.document-home.header/>

{{$slot}}



@livewireScripts





@stack('custom-scripts')


</body>

</html>
