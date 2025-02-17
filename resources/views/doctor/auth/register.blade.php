@include('partials.mainhead')
</head>
<body class="app sidebar-mini ltr login-img">
    
    <div class="">
        <div class="page">
            <div class="container-lg">
                <div class="row mt-4 justify-content-center mx-0">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none">
                            <div class="card-body p-sm-6">
                                <div class="text-center mb-4">
                                    <h4 class="mb-1">Sign Up Doctor</h4>
                                    <p>Sign up to your account to continue.</p>
                                </div>
    
                                <!-- ✅ إضافة نموذج التسجيل -->
                                <form method="POST" action="{{ route('doctor.register') }}">
                                    @csrf <!-- ✅ إضافة حماية ضد CSRF -->
                                    
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Full Name<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Full Name" required>
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control" type="email" name="email" placeholder="Enter your Email" required>
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Create a Password<span class="text-danger ms-1">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="signup-password" placeholder="Create a Password" required>
                                            <button class="btn btn-light" type="button" onclick="togglePassword('signup-password')">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Confirm Password<span class="text-danger ms-1">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password_confirmation" id="signup-confirmpassword" placeholder="Confirm your Password" required>
                                            <button class="btn btn-light" type="button" onclick="togglePassword('signup-confirmpassword')">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
    
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="flexCheckChecked">
                                        <label class="form-check-label tx-15" for="flexCheckChecked">
                                            Remember me
                                        </label>
                                    </div>
    
                                    <!-- ✅ زر إرسال البيانات -->
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary">Create an Account</button>
                                    </div>
                                </form>
    
                                <div class="text-center">
                                    <p class="mb-0 tx-14">Already have an account?
                                        <a href="{{ route('doctor.login') }}" class="tx-primary ms-1 text-decoration-underline">Login</a>
                                    </p>
                                </div>
    
                                <p class="text-center mt-3 mb-2">Signup with</p>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-list">
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <i class="fa fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <i class="fa fa-google"></i>
                                        </button>
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                        <button class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 d-none"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ✅ سكريبت لإظهار/إخفاء كلمة المرور -->
    <script>
    function togglePassword(fieldId) {
        let field = document.getElementById(fieldId);
        field.type = field.type === "password" ? "text" : "password";
    }
    </script>
    
     <!-- Custom-Switcher JS -->
     <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
 
     <!-- Bootstrap JS -->
     <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     
     <!-- Show Password JS -->
     <script src="{{ asset('assets/js/show-password.js') }}"></script>
 
 </body>