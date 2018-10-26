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
        .user-info div{
            margin: 0 auto;
        }
        .user_info{
            text-align: center;
        }
        .nav li a{
            color:#ccc;
        }
        .user-signup-form{
            margin: 0 auto;
        }
        .panel-default{
            border: 2px solid #ccc;
            border-radius: 4%;
        }
        .panel-default .panel-body ,.panel-default .panel-heading{
            width: 75%;
            margin: 0 auto;
        }
        .panel-default .first{
            border-radius: 8% 8% 0 0;
            line-height: 65px;
            height: 65px;
            width: 100%;
            background-color: rgba(103, 89, 123, 0.1);
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