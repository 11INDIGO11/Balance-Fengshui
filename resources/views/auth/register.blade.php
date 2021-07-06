<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }
    a {
        text-decoration: none;
    }
    body {

    }
    .container {
        width: 100%;
        height: auto;
        position: absolute;
    }
    .register-form {
        width: 350px;
        height: 600px;
        margin: auto;
        margin-top: 86px;
        box-shadow: 0px 0px 50px 10px rgba(0, 0, 0, 0.09);
        background-color: transparent;
        border-radius: 10px;
        border-top: 5px solid #F9C414;
    }
    .register-logo {
        width: 100%;
        height: 143px;
        text-align: center;
    }
    .register-logo img {
        margin-top: 25px;
    }
    .register-form h1 {
        text-transform: uppercase;
        font-size: 36px;
        font-weight: bold;
        color: rgba(0, 0, 0, 0.5);
        text-align: center;
    }
    p.addressP {
        font-size: 13px;
        color: #e5e5e5;
        margin-top: 11px;
        margin-bottom: 19px;
        text-align: center;
    }
    input[type="text"],
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
        font-family: "Prompt Light";
    }
    input::placeholder {
        font-size: 14px;
        color: #cbcbcb;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.25);
    }


    .loginP {
        margin-top: 17px;
        text-align: center;
        font-size: 12px;
        font-weight: 500;
        color: #d4d4d4;
        font-family: "Prompt Light";
    }
    .loginP span {
        color: #a399fd;
        font-weight: bold;
        cursor: pointer;
    }
    .loginP span:hover {
        color: #8377ff;
    }
    h1{
        font-family: "Prompt Light";

    }
    @media only screen and (min-width: 200px) {
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }
        a {
            text-decoration: none;
        }
        body {

        }
        .container {
            width: 100%;
            height: auto;
            position: absolute;
        }
        .register-form {
            width: 85vw;
            height: 600px;
            margin: auto;
            margin-top: 86px;
            box-shadow: 0px 0px 50px 10px rgba(0, 0, 0, 0.09);
            background-color: transparent;
            border-radius: 10px;
            border-top: 5px solid #F9C414;
        }
        .register-logo {
            width: 100%;
            height: 143px;
            text-align: center;
        }
        .register-logo img {
            margin-top: 25px;
        }
        .register-form h1 {
            text-transform: uppercase;
            font-size: 36px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        p.addressP {
            font-size: 13px;
            color: #e5e5e5;
            margin-top: 11px;
            margin-bottom: 19px;
            text-align: center;
        }
        .btn.login_btn {
            margin: auto;
            display: block;
            width: 67vw;
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
            font-size: 14px;
            font-weight: 300;

        }

        .btn.login_btn:hover {
            background-color: #edb806;
            color: #ffffff;
            box-shadow: none;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 67vw;
            display: block;
            border-radius: 20px;
            background: #efefef;
            border: none;
            outline: none;
            padding: 5px 20px;
            margin: auto;
            margin-bottom: 12px;
            font-family: "Prompt Light";
        }
        input::placeholder {
            font-size: 14px;
            color: #cbcbcb;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.25);
        }

        .loginP {
            margin-top: 37px;
            text-align: center;
            font-size: 12px;
            font-weight: 500;
            color: #d4d4d4;
            font-family: "Prompt Light";
        }
        .loginP span {
            color: #a399fd;
            font-weight: bold;
            cursor: pointer;
        }
        .loginP span:hover {
            color: #8377ff;
        }
    }
    @media only screen and (min-width: 500px) {

    }
    @media only screen and (min-width: 1025px) {
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }
        a {
            text-decoration: none;
        }
        body {

        }
        .container {
            width: 100%;
            height: auto;
            position: absolute;
        }
        .register-form {
            width: 25vw;
            height: 600px;
            margin: auto;
            margin-top: 86px;
            box-shadow: 0px 0px 50px 10px rgba(0, 0, 0, 0.09);
            background-color: transparent;
            border-radius: 10px;
            border-top: 5px solid #F9C414;
        }
        .register-logo {
            width: 100%;
            height: 143px;
            text-align: center;
        }
        .register-logo img {
            margin-top: 25px;
        }
        .register-form h1 {
            text-transform: uppercase;
            font-size: 36px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        p.addressP {
            font-size: 13px;
            color: #e5e5e5;
            margin-top: 11px;
            margin-bottom: 19px;
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 17vw;
            display: block;
            border-radius: 20px;
            background: #efefef;
            border: none;
            outline: none;
            padding: 5px 20px;
            margin: auto;
            margin-bottom: 12px;
            font-family: "Prompt Light";
        }
        input::placeholder {
            font-size: 14px;
            color: #cbcbcb;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.25);
        }

        .loginP {
            margin-top: 17px;
            text-align: center;
            font-size: 12px;
            font-weight: 500;
            color: #d4d4d4;
            font-family: "Prompt Light";
        }
        .loginP span {
            color: #a399fd;
            font-weight: bold;
            cursor: pointer;
        }
        .loginP span:hover {
            color: #8377ff;
        }
        .btn.login_btn {
            margin: auto;
            display: block;
            width: 17vw;
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
            font-size: 1vw;
            font-weight: 300;

        }

        .btn.login_btn:hover {
            background-color: #edb806;
            color: #ffffff;
            box-shadow: none;
        }
    }



</style>
<div class="wrapper" style="background-color: #ffffff;height: 900px; ">
    <div class="container">
        <div class="register-form">
            <figure class="register-logo">
                <img src="https://sv1.picz.in.th/images/2021/02/27/oVBeRV.png" alt="Logo" style="width: 110px; height: 110px;">
            </figure>
            <h1 style="font-family: 'Prompt'; font-weight: 300;">สมัครสมาชิก</h1>
            <p class="addressP" style="font-family: 'Prompt'; font-weight: 300;">www.balance-fengshui.com</p>
            <form method="POST" action="{{route('register')}}">
                @csrf
                <input style="font-family: 'Prompt'; font-weight: 300;" id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="name" autofocus placeholder="ชื่อ" >
                    @error('user_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror

                <input style="font-family: 'Prompt'; font-weight: 300;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="อีเมล์">
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                <input style="font-family: 'Prompt'; font-weight: 300;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="พาสเวิร์ด">
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                <input style="font-family: 'Prompt'; font-weight: 300;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="ยืนยันพาสเวิร์ด">


                <button type="submit" class="btn login_btn" >สมัครสมาชิก</button>
            </form>
        </div>
    </div>
</div>
