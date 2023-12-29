<!DOCTYPE html>
<html lang="en">

{{-- Heed --}}
@include('front.partials.heed')
{{-- End Heed --}}

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <div class="container-xxl position-relative p-0">
            {{-- Navbar --}}
            @include('front.partials.navbar')
            {{-- End Navbar --}}

            {{-- Hero --}}
            @yield('header-content')
            {{-- End Hero --}}
        </div>

        @yield('content')


        <!-- Footer Start -->
        @include('front.partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('front.partials.scripts')
</body>

</html>