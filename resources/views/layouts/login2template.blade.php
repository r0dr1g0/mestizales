<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Login Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('template/images/m.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset ('template/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('template/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('template/assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />
    <link href="{{ asset ('template/assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('template/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('template/assets/css/forms/switches.css') }}">
</head>
<body class="form">

@yield('contenido')

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset ('template/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset ('template/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset ('template/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset ('template/assets/js/authentication/form-2.js') }}"></script>

</body>
</html>
