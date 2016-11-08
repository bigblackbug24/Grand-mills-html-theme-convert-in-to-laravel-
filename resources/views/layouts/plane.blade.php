<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <title>Grand Mills</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">

        <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset("assets/css/font-awesome.css")}}" />
        <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}">

    </head>
    <body>
        @yield('body')
        <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
        <script src="{{asset("js/jquery-1.10.2.min.js")}}"></script>
        <script src="{{asset("js/bootstrap.js")}}"></script>
    </body>
</html>