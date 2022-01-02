<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'mini-blog') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="h-screen text-gray-800">
    <div id="app" class="h-full ">
        <router-view></router-view>
    </div>
</body>
</html>
