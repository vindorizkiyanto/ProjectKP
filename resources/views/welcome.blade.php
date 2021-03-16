<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>U-Link</title>
    <link rel="icon" href="/img/logolipi.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            background-color: #fff;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        @media(max-width:640px) {
            #hero-2-3 {
                height: fit-content
            }
        }

        .box-shadow-2-3:hover {
            --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .lipi {
            margin-bottom: 10%;
            width: 65%;
            height: 50%;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
                <!-- Left Column -->
                <div class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <div class="lipi mb-4"><img src="/img/lipi.jpg" alt=""></div>
                    <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight " style="color: #000; line-height: 1.2;">The best way<br> to organize your link for online meeting
                    </h1>
                    <div class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2  sm:space-x-3 space-x-0">
                        <button class=" inline-flex font-semibold text-white  text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-2-3" style="background: #524EEE; font-family: 'Poppins', sans-serif;">Try it free</button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
                    <svg id="hero-2-3" width="602" height="397" viewBox="0 0 602 397" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="602" height="397" fill="url(#pattern0-header-2-3)" />
                        <defs>
                            <pattern id="pattern0-header-2-3" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0-header-2-3" transform="translate(-0.126358 -0.203125) scale(0.000786164 0.00119358)" />
                            </pattern>
                            <image id="image0-header-2-3" width="1600" height="1200" xlink:href="img/pic.png" />
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
</body>

</html>