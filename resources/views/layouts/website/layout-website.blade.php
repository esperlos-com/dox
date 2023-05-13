<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('doxconf.app_name')}}</title>
    @livewireStyles

    <link rel="stylesheet" href="{{asset('assets/css/website/const/fontawesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendors/bundle.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2-bootstrap-5-theme.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/website/app.css')}}" type="text/css">


    @stack('custom-styles')




<body class="{{app()->getLocale() == 'fa'?'direction-rtl':'direction-ltr'}}">


<livewire:website.components.document-home.header/>

{{$slot}}



@livewireScripts




<script src="{{asset('assets/vendors/bundle.js')}}"></script>
<script src="{{asset('assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/website/app.js')}}"></script>

@stack('custom-scripts')


</body>

</html>
