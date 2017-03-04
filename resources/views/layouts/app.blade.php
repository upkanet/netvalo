<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- Styles -->
    @section('css')
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
    @show
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
@include('inc.analyticstracking')
@section('content')
@show

<div id="footer">
    @section('footer')
    <p class="text-center">{{ date('Y') }} &copy; NetValo @if(App::environment('local')) - Dev @endif - Une Remarque / Une Suggestion : <span id="email-contact-us"></span></p>
    <script>
      var parts = ["con", "valo", "tact", "net", "&#46;", "&#64;", "fr"];
      var email = parts[0] + parts[2] + parts[5] + parts[3] + parts[1] + parts[4] + parts[6];
      document.getElementById("email-contact-us").innerHTML = '<a href="mailto:' + email +'" style="btn bt-default btn-sm">' + email + '</a>';
    </script>
    @show
</div>

<!-- Javascripts -->
@section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Bootstrap 3.3.2 -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- Form Validator -->
    <script src="https://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
@show

<!-- Modals -->
@section('modals')
@show
</body>
</html>