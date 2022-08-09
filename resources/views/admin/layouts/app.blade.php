
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Kingdon designs admin panel</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FontAwesome JS-->
    <script defer src="../userdashboard/assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../userdashboard/assets/css/portal.css">

</head>

<body class="app">
            <!--Navigation -->
            @include('admin.layouts.navigation')

                <!--body-->


            <!-- Page Content -->
            <div>
                {{ $slot }}
            </div>



    <!-- Javascript -->
    <script src="../userdashboard/assets/plugins/popper.min.js"></script>
    <script src="../userdashboard/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="../userdashboard/assets/js/app.js"></script>

</body>
</html>

