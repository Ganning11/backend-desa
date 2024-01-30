<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet') }}" type="text/css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>

<body>
    <div class="login-page">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row main-content text-center align-self-center">
                <div class="col-md-4 text-center company__info">
                    <span class="company__logo">
                        <h2><span class="fa fa-android"></span></h2>
                    </span>
                    <h4 class="company_title">Your Company Logo</h4>
                </div>
                <div class="col-md-8 col-12 col-sm-12 login_form ">
                    <div class="container-fluid">
                        <div class="row">
                            <h2>Log In</h2>
                        </div>
                        <div class="row" id="dataLogin">
                            <form control="" class="form-group" id="loginForm" action="">
                                <div class="row">
                                    <input type="text" name="emailLogin" id="username" class="form__input"
                                        name="emailLogin" placeholder="Username">
                                </div>
                                <div class="row">
                                    <!-- <span class="fa fa-lock"></span> -->
                                    <input type="password" name="passwordLogin" id="password" class="form__input"
                                        name="passwordLogin" placeholder="Password">
                                </div>
                                {{-- <div class="row">
                                    <input type="checkbox" name="remember_me" id="remember_me" class="">
                                    <label for="remember_me">Remember Me!</label>
                                </div> --}}
                                <div class="row">
                                    <button type="submit" class="btn btn-outline-success" id="submit">Sign
                                        in</button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="row">
                            <p>Don't have an account? <a href="#">Register Here</a></p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>
</body>
<script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('JS/login.js') }}"></script>
<script src="{{ url('assets/js/sweetallert2.js') }}"></script>

</html>
