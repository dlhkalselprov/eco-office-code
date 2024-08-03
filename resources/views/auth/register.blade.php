<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Eco-office | Form Pendaftaran') }}</title>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style_register.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->

    <style>
        .password-container {
            position: relative;
            width: 100%;
        }

        .password-container .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<div class="main-w3layouts wrapper">
    <h2>Form Pendaftaran</h2>
    <h2>Perkantoran Rendah Karbon dan Berketahanan Iklim</h2>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <input class="text" type="text" name="nama_instansi" value="{{ old('nama_instansi') }}"
                    placeholder="Nama Instansi/SKPD" />
                @error('nama_instansi')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror

                {{-- <input class="text2" type="text" name="penanggung_jawab" value="{{ old('penanggung_jawab') }}"
                    placeholder="Nama Penanggung Jawab SKPD (Kepala)" >
                @error('penanggung_jawab')
                    <h1 class="text-error" style="color:red">  {{ $message }}</h1>
                @enderror --}}

                <input class="text2" type="text" inputmode="numeric" name="no_pic" value="{{ old('no_pic') }}"
                    placeholder="No Telp Narahubung SKPD (PIC)">
                @error('no_pic')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror

                <input class="text2" type="text" name="nama_pic" placeholder="Nama Narahubung (PIC)"
                    value="{{ old('nama_pic') }}">
                @error('nama_pic')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror

                <input class="text2" type="text" name="jabatan_pic" placeholder="Jabatan Narahubung"
                    value="{{ old('jabatan_pic') }}">
                @error('jabatan_pic')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror

                <input class="text email" type="email" name="email" placeholder="Email SKPD"
                    value="{{ old('email') }}">
                @error('email')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror
                <div class="password-container">
                    <input class="text2" id="password" type="password" name="password" placeholder="Password">
                    <i class="fa fa-eye eye-icon" id="togglePassword"></i>
                </div>
                @error('password')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror

                <input class="text w3lpass" type="password" name="password_confirmation"
                    placeholder="Konfirmasi Password">
                @error('password_confirmation')
                    <h1 class="text-error" style="color:red"> {{ $message }}</h1>
                @enderror


                <input type="submit" value="DAFTAR">

            </form>
            <h1>Sudah Punya Akun ? <a href="{{ route('login') }}"> Login Sekarang!</a></h1>

        </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
        <h1>© 2024 Dinas Lingkungan Hidup Prov. Kalsel | Design by <a href="https://colorlib.com/"
                target="_blank">Colorlib</a></h1>
    </div>
    <!-- //copyright -->
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- //main -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    });
</script>
</body>

</html>
