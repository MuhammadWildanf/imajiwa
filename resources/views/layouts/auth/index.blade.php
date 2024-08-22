@include('layouts.auth.includes.head')

<body style="background-color: #2e3033;">

    <div class="my-5 pt-sm-5">
        <div class="container my-5" style="max-width: 800px;">
            @yield('content')
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    @include('layouts.auth.includes.plugin')

</body>

</html>
