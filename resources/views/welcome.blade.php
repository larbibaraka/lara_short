<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="larbibaraka">
    <title>Url Shortener | @yield('title')</title>
    <!-- Bootstrap -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-inverse mynav" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Shortini</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#aboutus">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))

                        @if (Auth::check())
                            <li><a href="{{ url('/home') }}">Dashboard</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 url ">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="http:\\ ......">
                        <span class="input-group-btn">
                        <button class="btn btn-default url-enter" type="button">Shortini</button>
                      </span>
                    </div><!-- /input-group -->
                </form>

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
</header>

<div class="top10">
    <div class="container">
        <h2 class="text-center text-uppercase">top 10 urls</h2>
        <table class="table table-responsive ">
            <thead>
            <tr>
                <th class="text-center">By</th>
                <th class="text-center">Url</th>
                <th class="text-center">Viewd</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>Larbi Baraka</td>
                <td>https:\\www.some.go</td>
                <td>256</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/app.js"></script>
</body>
</html>