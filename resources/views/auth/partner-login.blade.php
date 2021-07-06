<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Partner Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    .user_card {
        width: 350px;
        height: 600px;
        margin: auto;
        margin-top: 86px;
        box-shadow: 0px 0px 50px 10px rgba(0, 0, 0, 0.09);
        background-color: transparent;
        border-radius: 10px;
        border-top: 5px solid #F9C414;

    }
    .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #60a3bc;
        padding: 10px;
        text-align: center;
    }
    .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
    }
    .form_container {
        margin-top: 50px;
    }
    .btn.login_btn {
        font-family: Prompt;
        background-color: #F9C414;
        border-radius: 500px;
        color: #ffffff;
        box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
        transition: all 0.4s;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -ms-transition: all 0.4s;
        -o-transition: all 0.4s;
        width: 100%;
        font-weight: 300;
    }

    .btn.login_btn:hover {
        background-color: #edb806;
        color: #ffffff;
        box-shadow: none;
    }
    .login_container {
        padding: 0 2rem;
    }
    .input-group-text {
        background: #F9C414 !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
    }
    .register-logo {
        width: 100%;
        height: 143px;
        text-align: center;
    }
    .register-logo img {
        margin-top: 25px;
    }
    input[type="email"],
    input[type="password"] {
        width: 268px;
        height: 35px;
        display: block;
        border-radius: 20px;
        background: #efefef;
        border: none;
        outline: none;
        padding: 5px 20px;
        margin: auto;
        margin-bottom: 12px;
        font-family: 'Prompt'; font-weight: 300;

    }
</style>
<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <br>
            <figure class="register-logo">
                <img src="https://sv1.picz.in.th/images/2021/02/27/oVBeRV.png" alt="Logo" style="width: 110px; height: 110px; text-align: center;">
            </figure>
            <br>
            <h1 class="form_container" style="text-align: center; font-family: 'Prompt'; font-weight: 300; font-size: 38px; margin-top: -50px; color: #00000080;">เข้าสู่ระบบ</h1>
            <h5 style="color: #878787;text-align: center; font-family: 'Prompt'; font-weight: 300;">สำหรับพาร์ตเนอร์</h5>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="{{route('partner.login.submit')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="อีเมล" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="พาสเวิร์ด" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline" {{ old('remember') ? 'checked' : '' }}>

                            <label class="custom-control-label" for="customControlInline" style="font-family: 'Prompt'; font-weight: 300;">จดจำรหัสผ่าน</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">

                        <button type="submit" name="button" class="btn login_btn" style="font-family: 'Prompt'; font-weight: 300;border-radius: 20px; font-size: 16px; ">{{ __('เข้าสู่ระบบ') }}</button>

{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                {{ __('Forgot Your Password?') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links" style="font-family: 'Prompt'; font-weight: 300;">
{{--                    Don't have an account? <a href="{{ route('register') }}" class="ml-2">Sign Up</a>--}}
                    ต้องการเป็นพาร์ตเนอร์กับเรา <a href="{{ route('partner.register') }}" class="ml-2">สมัครสมาชิก</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="{{ route('password.request') }}" style="font-family: 'Prompt'; font-weight: 300;">ลืมรหัสผ่านใช่หรือไม่?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
