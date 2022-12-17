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
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css">
    @if(app()->getLocale() != 'fa')
        <link rel="stylesheet" href="{{asset('assets/css/style-ltr.css')}}" type="text/css">
    @endif


</head>


<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
    <span>در حال بارگذاری ...</span>
</div>
<!-- end::page loader -->


<livewire:panel.globals.header/>

<livewire:panel.globals.side-bar/>


<main class="main-content">

    <div class="container-fluid">

    {{$slot}}


    </div>

</main>






@livewireScripts

<script src="{{asset('assets/vendors/bundle.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/alerts.js')}}"></script>
@stack('custom-scripts')

</body>

</html>
