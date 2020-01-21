@include('includes.front_header')
@include('includes.front_nav')

<!-- Page Content -->
@include('includes.flash_messages')

    @yield('content')

    <hr>
@include('includes.front_footer')
