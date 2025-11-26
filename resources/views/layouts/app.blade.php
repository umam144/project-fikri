<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @stack('styles')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- MODERN & COLORED CSS -->
    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            background: #f0f2f5;
            color: #2b2b2b;
        }

        /* NAVBAR */
        nav {
            background: linear-gradient(135deg, #4f46e5, #6366f1);
            padding: 15px 25px;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* CONTENT CONTAINER */
        .container-fluid {
            padding: 25px 30px;
        }

        /* CARD-LIKE CONTENT */
        .content-wrapper {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        /* ALERTS */
        .alert {
            padding: 14px 20px;
            border-radius: 8px;
            margin: 15px 0;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background-color: #d9fbe5;
            color: #0f6f44;
            border-left: 5px solid #1ac667;
        }

        .alert-danger {
            background-color: #ffe1e1;
            color: #a11616;
            border-left: 5px solid #ff3b3b;
        }

        /* GENERAL */
        .row {
            margin: 0;
        }

        .col {
            padding: 0;
        }

        /* Full height */
        .vh-100 {
            height: 100vh;
        }
    </style>
</head>

<body class="vh-100 overflow-hidden">

    @include('layouts.nav')

    @session('status')
        <div class="alert alert-success">
            ✔ {{ status('success') }}
        </div>
    @endsession

    @session('error')
        <div class="alert alert-danger">
            ⚠ {{ status('error') }}
        </div>
    @endsession

    <div class="container-fluid h-100 overflow-x-scroll">
        <div class="row">
            <div class="col">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>

</html>
