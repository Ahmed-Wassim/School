<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html-dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 10:50:56 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 5 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Register</title>

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
    register-->
        <section class="height-100vh d-flex align-items-center page-section-ptb login"
            style="background-image: url(images/register-bg.jpg);">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-4 offset-lg-1 col-md-6 login-fancy-bg bg parallax"
                        style="background-image: url(images/register-inner-bg.jpg);">
                        <div class="login-fancy">
                            <h2 class="text-white mb-20">Hello world!</h2>
                            <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose
                                responsive template along with powerful features.</p>
                            <ul class="list-unstyled pos-bot pb-30">
                                <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a>
                                </li>
                                <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 bg-dark">
                        <div class="login-fancy pb-40 clearfix">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <h3 class="mb-30">Signup</h3>
                                <div class="row">
                                    <div class="section-field mb-20 col-sm-6">
                                        <label class="mb-10" for="fname">First name* </label>
                                        <input id="fname" name="fname" class="web form-control" type="text"
                                            placeholder="First name">
                                    </div>
                                    <div class="section-field mb-20 col-sm-6">
                                        <label class="mb-10" for="lname">Last name* </label>
                                        <input id="lname" name="lname" class="web form-control" type="text"
                                            placeholder="Last name">
                                    </div>
                                </div>
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="email">Email* </label>
                                    <input type="email" placeholder="Email*" id="email" class="form-control"
                                        name="email">
                                </div>
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="password">Password* </label>
                                    <input class="Password form-control" id="password" type="password"
                                        placeholder="Password" name="password">
                                </div>
                                <button type="submit" class="button">
                                    <span>Signup</span>
                                    <i class="fa fa-check"></i>
                                </button>
                                <p class="mt-20 mb-0">Don't have an account? <a href="{{ route('login') }}"> Create one
                                        here</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
    register-->
    </div>

    @include('dashboard.layouts.scripts')

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/webmin-bootstrap-4-angular-12-admin-dashboard-template/html-dark/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 10:50:56 GMT -->

</html>
