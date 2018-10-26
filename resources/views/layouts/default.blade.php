<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'simple') - FrostmourneBlog let's do it！</title>
    <link rel="stylesheet" href="/public/css/app.css">
    <style>
        .navbar-nav{
            flex-direction: row-reverse;
            transform: translateY(50%);
        }
        .navbar-nav li{
            margin: 0 20px;
        }
    </style>
</head>
<body>
    @include("layouts._header")
    <div class="container">
        @yield('content')
    </div>
    @include("layouts._footer")
</body>
</html>