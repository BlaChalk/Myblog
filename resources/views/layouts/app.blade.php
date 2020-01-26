<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts.head', ['page'=>(isset($page))? $page : NULL])
</head>

<body>
    @include('layouts.preloader')

    <div class="wrapper">

        @include('layouts.header', ['page'=>(isset($page))? $page : NULL])

        @yield('hero')

        @yield('page-title')

        @yield('content')

        @include('layouts.footer')

    </div>

    @include('layouts.js')

    @yield('script')
</body>

</html>
