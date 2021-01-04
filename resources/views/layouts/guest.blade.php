<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>UBold - Responsive Admin Dashboard & Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

</head>

<body>

    <!--Navbar Start-->
    @component('components.navbar')

    @endcomponent
    <!-- Navbar End -->

    <main>
        {{ $slot }}
    </main>

    <!-- footer start -->
    @component('components.footer')

    @endcomponent
    <!-- footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- javascript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
