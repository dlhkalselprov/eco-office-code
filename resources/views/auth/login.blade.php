<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eco-Office | Login') }}</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/images/Eco-Office.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendors/auth/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendors/auth/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendors/auth/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendors/auth/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--===============================================================================================-->
</head>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets/images/Eco-Office.png" alt="IMG">
            </div>


            <x-auth-session-status class="mb-4" :status="session('status')" />



            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                    Member Login
                </span>


                @error('email')
                    <div class="alert alert-danger  alert-dismissible fade show" role="alert" id="autoCloseAlert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror



                <!-- Email Address -->
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>


                </div>

                <!-- Password -->

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" id="password" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>

                </div>

                <div class="container-login100-form-btn">
                    <button tyep="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>


                {{-- <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}





                <div class="text-center p-t-12">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            <span class="txt1">
                                Lupa
                            </span> {{ __('Email / Password ?') }}
                        </a>
                    @endif


                    <div class="text-center p-t-136">
                        <a class="d-inline" href="{{ route('register') }}">
                            Buat akun untuk mendaftar
                            <i class="fa fa-long-arrow-right m-l-5 d-inline" aria-hidden="true"></i>
                        </a>
                    </div>


                </div>
            </form>

        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="vendors/auth/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendors/auth/bootstrap/js/popper.js"></script>
<script src="vendors/auth/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendors/auth/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendors/auth/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main_login.js"></script>
<script>
    // Auto close alert after 5 seconds (5000 milliseconds)
    window.setTimeout(function() {
        $("#autoCloseAlert").alert('close');
    }, 5000);
</script>

</body>

</html>
