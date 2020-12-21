<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{getenv('APP_NAME')}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/mainPage.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{getenv('APP_NAME')}}
        </div>
        <div class="links">
            <a href="{{getenv('FORUMS_LINK')}}">Forums</a>
            <a href="/user/login">User area</a>
            @if(getenv('SHOW_ADMIN') === "true")
                <a href="/admin/login">Admin area</a>
            @endif
        </div>
    </div>
</div>
</body>
</html>
