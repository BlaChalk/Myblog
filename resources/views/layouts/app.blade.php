<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.head')
</head>

<body>
    @include('layouts.preloader')

    <div class="wrapper">
        @include('layouts.header')
        @yield('hero')
        @yield('page-title')
        @yield('content')
        @include('layouts.footer')
    </div>

    @include('layouts.js')
</body>

</html>
