<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet"/>
        @yield("styles")
    </head>
    <body>
        <?php $links = [
            ["path" => "/", "text" => "Home"], 
            ["path" => "/Gallery", "text" => "Gallery"],
            ["path" => "#Contact", "text" => "Contact Me"]
        ];
        ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="flex flex-col w-screen min-h-screen">
            <x-navbar :links="$links"/>
            @yield('content')
        </div>
        @yield('js')
        <script src="" async defer>
        </script>
    </body>
</html>