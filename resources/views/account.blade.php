<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition login-page">
    
    @yield('content')
   
<script src="js/all.js"></script>

</body>
</html>