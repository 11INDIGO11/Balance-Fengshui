<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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

    /* Customize container */
    @media (min-width: 768px) {
        .container {
            max-width: 1280px;
        }
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

    /* Responsive: Portrait tablets and up */
    @media  screen and (min-width: 768px) {
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
</style>
<div class="wrapper" style="background-color: #ffffff;height: 900px; ">
    <div class="container">
        <h1 style="font-family: 'FC Lamoon';font-size: 100px; color: #95999c;">Register</h1>
        <div class="col-lg-12 well" style="background: #484848;">
            <div class="row">
                <form method="POST" action="<?php echo e(route('partner-register')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="col-sm-12">
                        <div class="picture-container">
                            <div class="picture">
                                <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                                <input type="file" id="wizard-picture" class="">
                            </div>
                            <h6 class="" style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">Choose Picture</h6>

                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group"><!----name---->
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">ชื่อ</label>
                                <input id="name"  type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
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


                            <div class="col-sm-6 form-group">
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">นามสกุล</label>
                                <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">ที่อยู่</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group"><!----Email---->
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">อีเมล์</label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
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
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">พาสเวิร์ด</label>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
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
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">ยืนยันพาสเวิร์ด</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div><!----conpass---->
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">เบอร์ติดต่อ</label>
                                <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">ชื่อบริษัท</label>
                                <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: #ffffff; font-family: 'FC Lamoon'; font-size: 26px;">ประสบการณ์</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>5</option>
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input style="width: 100%; color: #ffffff;" type="file" class="custom-file-input" id="input-ru" multiple>

                        </div>

                        <button class="btn" style="background-color: #F9C414; color: black; float: right;" type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/partner-register.blade.php ENDPATH**/ ?>