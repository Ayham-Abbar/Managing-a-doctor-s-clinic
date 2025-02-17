<!-- include mainhead.html"-->
@include('partials.mainhead')

</head>

<body class="app sidebar-mini">

    <!-- include switcher.html"-->
    @include('partials.switcher')
    <!-- include loader.html"-->
    @include('partials.loader')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- include header.html"-->
            @include('partials.header')
            <!-- include sidebar.html"-->
            @include('partials.sidebar')


            <!--app-content open-->
            <div class="main-content app-content mt-0">

                <!-- PAGE-HEADER -->
                <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                    <h1 class="page-title">Dashboard</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">@yield('title')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                @yield('content')
            </div>
            <!--app-content close-->

        </div>


        <!-- include headersearch_modal.html"-->
        @include('partials.headersearch_modal')
        <!-- include footer.html"-->
        @include('partials.footer')


    </div>

    <!-- include commonjs.html"-->
    @include('partials.commonjs')

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- Checkbox selectall JS -->
    <script src="{{ asset('assets/js/checkbox-selectall.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('assets/js/index1.js') }}"></script>

    <!-- include custom_switcherjs.html"-->
    @include('partials.custom_switcherjs')
    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>


</html>