<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>@yield('title')</title>
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        input,
        .bootstrap-select.btn-group button {
            background-color: #f3f4f6 !important;
            height: 44px !important;
            box-shadow: none !important;
        }
    </style>

</head>

<body>

    <div id="wrapper" class="flex flex-col justify-between h-screen">

        <!-- header-->
        <div class="bg-white py-4 shadow dark:bg-gray-800">
            <div class="max-w-6xl mx-auto">


                <div class="flex items-center lg:justify-between justify-around">

                    <a href="index.html">
                        <img src="{{asset('assets/images/logo.png')}}" alt="" class="w-32">
                    </a>

                    <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                        <a href="form-login.html" class="py-3 px-4">Login</a>
                        <a href="form-register.html"
                            class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                    </div>

                </div>


            </div>
        </div>

        <!-- Content-->
        
        @yield('content')

        <!-- Footer -->
        <div class="lg:mb-5 py-3 uk-link-reset">
            <div
                class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                <div class="flex space-x-2 text-gray-700 uppercase">
                    <a href="#"> About</a>
                    <a href="#"> Help</a>
                    <a href="#"> Terms</a>
                    <a href="#"> Privacy</a>
                </div>
                <p class="capitalize"> © copyright 2021 by Courseplus</p>
            </div>
        </div>

    </div>



    <!-- Javascript
================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/uikit.js')}}"></script>
    <script src="{{asset('assets/js/tippy.all.min.js')}}"></script>
    <script src="{{asset('assets/js/simplebar.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js')}}"></script>

</body>

</html>