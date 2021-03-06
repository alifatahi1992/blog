<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>App Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

    @if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{$flash}}
    </div>
    @endif

<div class="container">

    <div class="row">

    @yield('content')

        @include('layouts.sidebar')
    </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts.footer')


<!-- Bootstrap core JavaScript

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
