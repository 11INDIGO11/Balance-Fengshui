<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Fengshui Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        /*background: #252525 !important;*/
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
        font-family: 'Prompt';
        font-weight: 300;
    }
    @media  only screen and (min-width: 200px) {
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            /*background: #252525 !important;*/
        }
        .user_card {
            width: 95vw;
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
            width: 67vw;
            display: block;
            border-radius: 20px;
            background: #efefef;
            border: none;
            outline: none;
            padding: 5px 20px;
            margin: auto;
            margin-bottom: 12px;
            font-family: 'Prompt';
            font-weight: 300;
        }
    }
    @media  only screen and (min-width: 1025px) {
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            /*background: #252525 !important;*/
        }
        .user_card {
            width: 25vw;
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
            width: 17vw;
            display: block;
            border-radius: 20px;
            background: #efefef;
            border: none;
            outline: none;
            padding: 5px 20px;
            margin: auto;
            margin-bottom: 12px;
            font-family: 'Prompt';
            font-weight: 300;
        }

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
            <h1 class="form_container" style="text-align: center; font-family: 'Prompt'; font-weight: 300; font-size: 38px; margin-top: -50px; color: #00000080">?????????????????????????????????</h1>

            <h5 style="color: #878787;text-align: center; font-family: 'Prompt'; font-weight: 300;">????????????????????????????????????</h5>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>

                        <input type="email" id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="???????????????" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>

                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="???????????????????????????" required autocomplete="current-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                            <label class="custom-control-label" for="customControlInline" style="font-family: 'Prompt'; font-weight: 300; font-size: 16px;">????????????????????????????????????</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">

                        <button type="submit" name="button" class="btn login_btn" ><?php echo e(__('?????????????????????????????????')); ?></button>






                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links" style="font-family: 'Prompt'; font-weight: 300;">

                    ??????????????????????????????????????????????????????????????????????<a href="<?php echo e(route('register')); ?>" class="ml-2">?????????????????????????????????</a>

                </div>
                <div class="d-flex justify-content-center links">
                    <a href="<?php echo e(route('password.request')); ?>" style="font-family: 'Prompt'; font-weight: 300;">????????????????????????????????????????????????????????????????</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/auth/login.blade.php ENDPATH**/ ?>