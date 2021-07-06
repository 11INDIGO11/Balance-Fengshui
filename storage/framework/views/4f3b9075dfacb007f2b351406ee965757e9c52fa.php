<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    /* Everything but the jumbotron gets side spacing for mobile first views */
    .header,
    .marketing,
    .footer {
        padding-right: 15px;
        padding-left: 15px;
    }

    /* Custom page header */
    .header {
        border-bottom: 1px solid #e5e5e5;
    }
    /* Make the masthead heading the same height as the navigation */
    .header h3 {
        padding-bottom: 19px;
        margin-top: 0;
        margin-bottom: 0;
        line-height: 40px;
    }

    /* Custom page footer */
    .footer {
        padding-top: 19px;
        color: #777;
        border-top: 1px solid #e5e5e5;
    }
    .container-narrow > hr {
        margin: 30px 0;
    }

    /* Main marketing message and sign up button */
    .jumbotron {
        text-align: center;
        border-bottom: 1px solid #e5e5e5;
    }
    .jumbotron .btn {
        padding: 14px 24px;
        font-size: 21px;
    }

    /* Supporting marketing content */
    .marketing {
        margin: 40px 0;
    }
    .marketing p + h4 {
        margin-top: 28px;
    }

    /* Customize container */
    @media (min-width: 200px) {
        .container {
            max-width: 1280px;
        }
        .col-lg-12 .well{
            height: 20vw;
        }
        .registerText{
            font-family: 'Prompt';font-size: 7vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
        }
        .btn.login_btn {
            margin: auto;
            display: block;

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
            font-size: 4vw;
            font-weight: 300;

        }

        .btn.login_btn:hover {
            background-color: #edb806;
            color: #ffffff;
            box-shadow: none;
        }
    }
    /* Responsive: Portrait tablets and up */
    @media  screen and (min-width: 768px) {
        .registerText{
            font-family: 'Prompt';font-size: 2vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
        }
        /* Remove the padding we set earlier */
        .header,
        .marketing,
        .footer {
            padding-right: 0;
            padding-left: 0;
        }
        /* Space out the masthead */
        .header {
            margin-bottom: 30px;
        }
        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
            border-bottom: 0;
        }
        .container {
            max-width: 1280px;
        }
        .col-lg-12 .well{
            height: 20vw;
        }
        .registerText{
            font-family: 'Prompt';font-size: 4vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
        }
        .btn.login_btn {
            margin: auto;
            display: block;

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
            font-size: 2vw;
            font-weight: 300;

        }

        .btn.login_btn:hover {
            background-color: #edb806;
            color: #ffffff;
            box-shadow: none;
        }
    }
    @media  screen and (min-width: 1024px) {
        .registerText{
            font-family: 'Prompt';font-size: 2vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
        }
        .btn.login_btn {
            margin: auto;
            display: block;

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
    .picture-container{
        position: relative;
        cursor: pointer;
        text-align: center;
    }
    .picture{
        width: 106px;
        height: 106px;
        background-color: #999999;
        border: 4px solid #CCCCCC;
        color: #FFFFFF;
        border-radius: 50%;
        margin: 0px auto;
        overflow: hidden;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
    }
    .picture:hover{
        border-color: #2ca8ff;
    }
    .content.ct-wizard-green .picture:hover{
        border-color: #05ae0e;
    }
    .content.ct-wizard-blue .picture:hover{
        border-color: #3472f7;
    }
    .content.ct-wizard-orange .picture:hover{
        border-color: #ff9500;
    }
    .content.ct-wizard-red .picture:hover{
        border-color: #ff3b30;
    }
    .picture input[type="file"] {
        cursor: pointer;
        display: block;
        height: 100%;
        left: 0;
        opacity: 0 !important;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .picture-src{
        width: 100%;

    }
    input[type="name"],
    input[type="password"],
    input[type="location"],
    input[type="email"],
    input[type="phonenumber"],
    input[type="contract"],
    input[type="number"],
    select[name="workType"],
    select[name="partnerType"]
    {
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
    .user_card {
        width: 100%;
        height: 850px;
        margin: auto;
        margin-top: 40px;
        box-shadow: 0px 0px 50px 10px rgba(0, 0, 0, 0.09);
        background-color: transparent;
        border-radius: 10px;
        border-top: 5px solid #F9C414;

    }

</style>
<div class="wrapper">
    <div class="container">
        <div style="width: 5px; height: 35px;background-color: #F9C414; margin-top:20px; float: left;"></div>
        &nbsp<label class="registerText">สมัครสมาชิกพาร์ทเนอร์</label>
    </div>
    <div class="container">
        <div class="user_card" >
            <div class="rol">
                <form method="POST" action="<?php echo e(route('partner.register.submit')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="col-sm-12">
                        <div class="picture-container">
                            <div class="picture">
                                <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                                <input style="font-family: 'Prompt'; font-weight: 300;" type="file" id="wizard-picture" class="">
                            </div>
                            <h6 class="" style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">เปลี่ยนภาพโปรไฟล์</h6>

                        </div>

                            <div class="form-group"><!----name---->
                                <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">ชื่อบริษัท</label>
                                <input id="partner_name" style="font-family: 'Prompt'; font-weight: 300;"  type="name" class="form-control <?php $__errorArgs = ['partner_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="partner_name" value="<?php echo e(old('partner_name')); ?>" required autocomplete="partner_name" autofocus>

                                <?php $__errorArgs = ['partner_name'];
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

                            </div><!----name---->


                        <div class="form-group">
                            <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">ที่อยู่</label>
                            <input style="font-family: 'Prompt'; font-weight: 300;" id="location" type="location"  name="location" placeholder="Enter Address Here.." class="form-control <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('location')); ?>" required autocomplete="location" autofocus>
                            <?php $__errorArgs = ['location'];
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


                        <div class="row">
                            <div class="col-sm-4 form-group"><!----Email---->
                                <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">อีเมล์</label>
                                <input style="font-family: 'Prompt'; font-weight: 300;" id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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
                            </div><!----Email---->

                            <div class="col-sm-4 form-group"><!----pass---->
                                <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">พาสเวิร์ด</label>
                                <input style="font-family: 'Prompt'; font-weight: 300;" id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

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
                            </div><!----pass---->


                            <div class="col-sm-4 form-group"><!----conpass---->
                                <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">ยืนยันพาสเวิร์ด</label>
                                <input style="font-family: 'Prompt'; font-weight: 300;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div><!----conpass---->
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">เบอร์ติดต่อ</label>
                                <input style="font-family: 'Prompt'; font-weight: 300;" id="partner_phonenumber" type="phonenumber" name="partner_phonenumber" placeholder="09-123-45678" class="form-control" value="<?php echo e(old('partner_phonenumber')); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">เว็บไซต์ หรือ เพจ</label>
                                <input style="font-family: 'Prompt'; font-weight: 300;" id="contract" type="contract" name="contract" placeholder="www.xxx.com/facbook" class="form-control" value="<?php echo e(old('contract')); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">ประสบการณ์</label>
                            <input style="font-family: 'Prompt'; font-weight: 300;" type="number" id="experience"  name="experience" class="form-control" value="<?php echo e(old('experience')); ?>">
                        </div>
                        <div class="form-group">
                            <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">สายงาน</label>

                                <select style="font-family: 'Prompt'; font-weight: 300;" class="form-control" name="partnerType" id="partnerType">
                                    <option>ช่างเดี่ยว</option>
                                    <option>บริษัทรับหมา</option>
                                    <option>ซินแส</option>

                                </select>
                        </div>
                        <div class="form-group">
                            <label style="color: #878787; font-family: 'Prompt'; font-weight: 300; font-size: 20px;">ลักษณะงาน</label>
                            <select style="font-family: 'Prompt'; font-weight: 300;" class="form-control" name="workType" id="workType">
                                <option>ภายนอก</option>
                                <option>ภายใน</option>
                                <option>ทั้งภายนอกและภายใน</option>
                            </select>
                            <button type="submit" class="btn login_btn form-control"><?php echo e(__('สมัครสมาชิก')); ?></button>
                        </div>




                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/auth/partner-register.blade.php ENDPATH**/ ?>