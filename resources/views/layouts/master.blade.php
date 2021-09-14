<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Billing System</title>
    @include('layouts.partials.__style')
    {{-- @livewireStyles --}}

</head>

<body>
    <section class="add__categories">
        @include('layouts.partials.nav')
        <div class="container">
            @yield('components')
        </div>
    </section>
    @include('layouts.partials.__script')

</body>

</html>
