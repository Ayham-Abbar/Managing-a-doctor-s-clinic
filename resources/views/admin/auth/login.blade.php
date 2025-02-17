@include('partials.mainhead')
</head>

<body class="app sidebar-mini ltr login-img">
    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- PAGE -->
        <div class="page">

            <!-- CONTAINER OPEN -->
            <div class="text-center">
                <a href="index.html"><img src="{{ asset('assets/images/brand/desktop-dark.png') }}"
                        class="header-brand-img" alt="Logo"></a>
            </div>

            <div class="container-lg">
                <div class="row justify-content-center mt-4 mx-0">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none">
                            <div class="card-body p-sm-6">
                                <div class="text-center mb-4">
                                    <h4 class="mb-1">Sign In Admin</h4>
                                    <p>Sign in to your account to continue.</p>
                                </div>

                                <!-- LOGIN FORM -->
                                <form action="{{ route('admin.login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control ms-0" type="email" name="email"
                                            placeholder="Enter your Email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Password<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="password" class="form-control" name="password" id="input-password"
                                            placeholder="Password" required>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="flexCheckDefault">
                                            <label class="form-check-label tx-15" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="forgot-password.html" class="tx-primary ms-1 tx-13">Forgot
                                                Password?</a>
                                        </div>
                                    </div>

                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                                <!-- END LOGIN FORM -->

                                <div class="text-center">
                                    <p class="mb-0 tx-14">Don't have an account yet?
                                        <a href="register.html" class="tx-primary ms-1 text-decoration-underline">Sign
                                            Up</a>
                                    </p>
                                </div>

                                <p class="text-center mt-3 mb-2">Signin with</p>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-list">
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0"
                                            type="button">
                                            <span class="btn-inner--icon"><i class="fa fa-facebook-f"></i></span>
                                        </button>
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0"
                                            type="button">
                                            <span class="btn-inner--icon"><i class="fa fa-google"></i></span>
                                        </button>
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0"
                                            type="button">
                                            <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                                        </button>
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0"
                                            type="button">
                                            <span class="btn-inner--icon"><i class="fa fa-linkedin"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
        <!-- End PAGE -->

    </div>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
