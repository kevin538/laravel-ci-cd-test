
<!DOCTYPE html>

<html lang="en" class="light-style     customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"
    data-framework="laravel" data-template="blank-menu-theme-default-light">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>AU-PANVAC</title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <link rel="icon" type="image/x-icon" href="{{ asset('css/assets/logo.png') }}" />
    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/fontawesome5cae.css?id=89157e39c524ff7f679d3aebf872b7b9') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/flag-icons5883.css?id=403b97c176f3cdf56a3cbf09107ee240') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/css/rtl/coref43c.css?id=f1cefeba0c68d327230d2f6538f276fa') }}"
        class="{{ asset('template-customizer-core-css') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/css/rtl/theme-default56b8.css?id=cc3d4ef91c8c858754d8ed20c78a3a3c') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('demo/assets/css/democb2e.css?id=24b55ca26d6f2bafc5a21ff5a4bcdfb3') }}" />


    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead3881.css?id=8fc311b79b2aeabf94b343b6337656cf') }}" />

    <!-- Vendor Styles -->
    <!-- Vendor -->
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Page Styles -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/pages/page-auth.css') }}">
    <script src="{{ asset('demo/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/template-customizer.js') }}"></script>

    <script src="{{ asset('demo/assets/js/config.js') }}"></script>


</head>

<body>
    <!-- Layout Content -->

    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center" style="margin-bottom:0.5em !important">

                            <img width="70px" style="padding-left:" src="{{ asset('css/assets/logo.png') }}"
                                alt=""> <br>
                        </div>
                        <h3 class="mb-4" style="padding-left:100px; color:#25c199 ; margin-bottom:0.5em !important"> <b>AU-PANVAC</b> </h3>

                        <!-- /Logo -->
                        <h4 class="mb-4" style="color:#25c199 ; margin-left: 35px!important">Vaccine Management System</h4>

                        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3" style="border-color:#25c199 ! important">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email"style="border-color:#25c199 ! important"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter your email or username" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge" >
                                    <input id="password" type="password" style="border-color:#25c199 ! important "
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $('.form-password-toggle .input-group-text').click(function() {
                                        var passwordInput = $('#password');
                                        var passwordIcon = $(this).find('i');
                            
                                        if (passwordInput.attr('type') === 'password') {
                                            passwordInput.attr('type', 'text');
                                            passwordIcon.removeClass('bx-hide').addClass('bx-show');
                                        } else {
                                            passwordInput.attr('type', 'password');
                                            passwordIcon.removeClass('bx-show').addClass('bx-hide');
                                        }
                                    });
                                });
                            </script>
                          
                          
                            

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember-me">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button
                                    style="background-color: #25c199!important; border-color:#25c199 ! important;  color:white"
                                    class="btn btn-primary d-grid w-100" type="submit">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
    <!--/ Content -->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('demo/assets/vendor/libs/jquery/jquery8853.js?id=08d304be7f95879ae643fabf15fb255a') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/popper/popper5751.js?id=70485ad9be8ba3e426172708feb35181') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/bootstrape305.js?id=3cb2c653a33d885b40641d15713e3994') }}"></script>
    <script
        src="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/libs/hammer/hammera90c.js?id=5c0a4017d0ce861e87a50c0c1401eb81') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/i18n/i18nbcd7.js?id=74a027f4696264ade8796f88b3d49c14') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/js/menuf635.js?id=03d9787739b295480194ce0a121ae550') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('demo/assets/js/maincf4d.js?id=e0aeed34a47c1efb009b120245cce82e') }}"></script>


    <script src="{{ asset('demo/assets/js/pages-auth.js') }}"></script>
    <!-- END: Page JS-->

</body>


</html>
