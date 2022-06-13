<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('images/logo.png') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
    @yield('content')

</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.btn-refresh').click(function(){
        $.ajax({
           type: 'GET',
           url: '{{url('/refresh_captcha') }}',
           success: function(data){
               $('.captcha span').html(data);
           }
        });
    });

</script>
</body>

</html>
