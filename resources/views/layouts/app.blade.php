<!doctype html>
<html class="no-js" lang="zxx">

@vite('resources/js/app.js')
@include('layouts.partials.head')

<body>
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
</body>

</html>
