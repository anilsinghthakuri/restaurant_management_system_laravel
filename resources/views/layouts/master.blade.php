<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Billing System</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="/css/categories.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="{{asset('font/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('nepali_date/nepali-date-picker.min.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">


    {{-- @livewireStyles --}}

</head>

<body>
    <section class="add__categories">
     @include('layouts.partials.nav')
        <div class="container">


                    @yield('components')

        </div>

    </section>


    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('nepali_date/script.js')}}"></script>
    <script src="{{asset('nepali_date/nepali-date-picker.min.js')}}"></script>

    <script src="/js/script.js"></script>

    {{-- @livewireScripts --}}

    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
