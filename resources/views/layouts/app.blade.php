<!doctype html>
<html class="no-js" lang="zxx">

@vite('resources/js/app.js')
@include('layouts.partials.head')

<body>
    @include('layouts.partials.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.partials.footer')
</body>


</html>

<!-- JS here -->
<script src="/assets/js/vendor/jquery.js"></script>
<script src="/assets/js/vendor/waypoints.js"></script>
<script src="/assets/js/bootstrap-bundle.js"></script>
<script src="/assets/js/meanmenu.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/magnific-popup.js"></script>
<script src="/assets/js/parallax.js"></script>
<script src="/assets/js/backtotop.js"></script>
<script src="/assets/js/nice-select.js"></script>
<script src="/assets/js/counterup.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/isotope-pkgd.js"></script>
<script src="/assets/js/imagesloaded-pkgd.js"></script>
<script src="/assets/js/ajax-form.js"></script>
<script src="/assets/js/main.js"></script>
