{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 10:50:56 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Login</title>

    @include('dashboard.layouts.styles')

</head>

<body>

    <div class="wrapper">

        <!--=================================
    preloader -->
        <div id="pre-loader">
            <img src="images/pre-loader/loader-01.svg" alt="">
        </div>
        <!--=================================
    preloader -->

        <!--=================================
    login-->
        <section class="height-100vh d-flex align-items-center page-section-ptb login"
            style="background-image: url(images/login-bg.jpg);">
            <div class="container">
                <div class="row justify-content-center g-0 vertical-align">
                    <div class="col-lg-4 col-md-6 login-fancy-bg bg"
                        style="background-image: url(images/login-inner-bg.jpg);">
                        <div class="login-fancy">
                            <h2 class="text-white mb-20">Hello world!</h2>
                            <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose
                                responsive template along with powerful features.</p>
                            <ul class="list-unstyled  pos-bot pb-30">
                                <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a>
                                </li>
                                <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 bg-dark">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="login-fancy pb-40 clearfix">
                                <h3 class="mb-30">Sign In To Admin</h3>
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="name">Email* </label>
                                    <input id="name" class="web form-control" type="text" placeholder="Email"
                                        name="email">
                                </div>
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="Password">Password* </label>
                                    <input id="Password" class="Password form-control" type="password"
                                        placeholder="Password" name="password">
                                </div>
                                <div class="section-field">
                                    <div class="remember-checkbox mb-30">
                                        <input type="checkbox" class="form-control" name="two" id="two" />
                                        <label for="two"> Remember me</label>
                                        <a href="#" class="float-sm-end d-block mt-1 mt-sm-0">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="button">
                                    <span>Log in</span>
                                    <i class="fa fa-check"></i>
                                </button>
                                <p class="mt-20 mb-0">Don't have an account? <a href="{{ route('register') }}"> Create
                                        one
                                        here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
    login-->
    </div>

    @include('dashboard.layouts.scripts')

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 10:50:56 GMT -->

</html>
