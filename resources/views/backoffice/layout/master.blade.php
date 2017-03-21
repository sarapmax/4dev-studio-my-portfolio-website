<!DOCTYPE html>
<html>

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="{{  asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{  asset('favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{  asset('favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{  asset('favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{  asset('favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>4dev | Studio Backoffice</title>

    <link href="{{ asset('inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/devicon/devicon.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/devicon/devicon-colors.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">

    <!-- Include your favorite highlight.js stylesheet -->
    <link href="{{ asset('bower_components/highlight/styles/monokai-sublime.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
    


</head>

<body>

@yield('master-content')

<!-- Mainly scripts -->
<script src="{{ asset('inspinia/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('inspinia/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspinia/js/inspinia.js') }}"></script>
<script src="{{ asset('inspinia/js/plugins/pace/pace.min.js') }}"></script>

<script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>

<script src="{{ asset('bower_components/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

@yield('js')


</body>

</html>
