<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <title>CSCI 680 - Web Application Frameworks</title>
</head>
<body>
<div>
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <strong class="navbar-brand default" style="color: white !important;">Laravel Demo</strong>
            </div>
            <div class="navbar-collapse nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="@if ($page=="home") active @endif">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="@if ($page=="content") active @endif">
                        <a href="{{ route('content') }}">Content</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (session('user') == null)
                    <li>
                        <a href="{{ route('login') }}">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Sign in
                        </a>
                    </li>
                    @else
                    <li>
                        <p class="navbar-text">{{ session('user') }}</p>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
<div th:fragment="bottom">
    <div class="container text-center">
        <hr/>
        <a href="//spring.io" target="_blank">Developed with PHP Laravel Framework</a> &nbsp; &copy; 2018 CSCI 680 - Dr. Raimund K. Ege - NIU - CS
    </div>
</div>

</body>
</html>