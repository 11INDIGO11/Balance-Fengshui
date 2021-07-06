<?php $__env->startSection('scripts'); ?>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>




















<style>
    body {
        font-family: "Open Sans", sans-serif;
        background-color: #f1f9fc;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        -ms-box-sizing: content-box;
        -o-box-sizing: content-box;
        box-sizing: content-box;
        padding: 0;
        margin: 0;
    }

    .pCard_card {
        width: 400px;
        height: 615px;
        margin: 50px auto;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        -o-border-radius: 30px;
        border-radius: 30px;
        background-color: #f6fcfe;
        -webkit-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
        -moz-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
        -ms-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
        -o-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
        box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
        position: relative;
        overflow: hidden;
    }

    /****************
    Back
    ****************/

    .pCard_card .pCard_back {
        text-align: center;
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        margin-top: -139px;
        font-weight: 600;
        z-index: 1;
    }
    .pCard_card .pCard_back a {
        text-decoration: none;
    }

    /****************
    UP
    ****************/

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    .pCard_on .pCard_up {
        height: 100px;
        box-shadow: 0 0 30px #cfd8dc;
    }

    .pCard_card .pCard_up .pCard_text {
        position: absolute;
        top: 319px;
        left: 0;
        right: 0;
        color: #f1f7f9;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -ms-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
    }

    .pCard_on .pCard_up .pCard_text {
        top: 20px;
    }

    .pCard_card .pCard_up .pCard_text h2 {
        margin: 0;
        font-size: 25px;
        font-weight: 600;
    }

    .pCard_card .pCard_up .pCard_text p {
        margin: 0;
        font-size: 16px;
        color: #e3f1f5;
    }

    .pCard_card .pCard_up .pCard_add {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        border-radius: 50%;
        background-color: #ed145b;
        -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
        -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
        -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
        -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
        box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
        position: absolute;
        top: 392px;
        left: 0;
        right: 0;
        margin: auto;
        width: 88px;
        height: 88px;
        cursor: pointer;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -ms-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
    }

    .pCard_on .pCard_up .pCard_add {
        -webkit-transform: rotate(360deg) scale(0.5);
        -moz-transform: rotate(360deg) scale(0.5);
        -ms-transform: rotate(360deg) scale(0.5);
        -o-transform: rotate(360deg) scale(0.5);
        transform: rotate(360deg) scale(0.5);
        top: 470px;
    }

    /****************
    Down
    ****************/

    .pCard_card .pCard_down {
        background-color: #fff;
        position: absolute;
        bottom: 0px;
        width: 100%;
        height: 178px;
        z-index: 2;
        -webkit-border-bottom-left-radius: 30px;
        -moz-border-bottom-left-radius: 30px;
        -ms-border-bottom-left-radius: 30px;
        -o-border-bottom-left-radius: 30px;
        border-bottom-left-radius: 30px;
        -webkit-border-bottom-right-radius: 30px;
        -moz-border-bottom-right-radius: 30px;
        -ms-border-bottom-right-radius: 30px;
        -o-border-bottom-right-radius: 30px;
        border-bottom-right-radius: 30px;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -ms-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
    }

    .pCard_on .pCard_down {
        height: 100px;
        -webkit-box-shadow: 0 0 30px #cfd8dc;
        -moz-box-shadow: 0 0 30px #cfd8dc;
        -ms-box-shadow: 0 0 30px #cfd8dc;
        -o-box-shadow: 0 0 30px #cfd8dc;
        box-shadow: 0 0 30px #cfd8dc;
    }

    .pCard_card .pCard_down div {
        width: 33.333%;
        float: left;
        text-align: center;
        margin-top: 50px;
        font-size: 18px;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -ms-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
    }

    .pCard_on .pCard_down div {
        margin-top: 10px;
    }

    .pCard_card .pCard_down div p:first-of-type {
        color: #68818c;
        margin-bottom: 5px;
    }

    .pCard_card .pCard_down div p:last-of-type {
        color: #334750;
        font-weight: 700;
        margin-top: 0;
    }
    .pCard_card .pCard_back a i {
        margin: 10px;
        padding: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        border-radius: 15px;
        -webkit-transition: 0.3s ease-in-out;
        -moz-transition: 0.3s ease-in-out;
        -ms-transition: 0.3s ease-in-out;
        -o-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
    }

    .pCard_card .pCard_back a i:hover {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

    .pCard_card .pCard_back a:nth-of-type(1) i {
        color: #3b5998;
        border: 2px solid #3b5998;
    }

    .pCard_card .pCard_back a:nth-of-type(2) i {
        color: #0077b5;
        border: 2px solid #0077b5;
    }

    .pCard_card .pCard_back a:nth-of-type(3) i {
        color: #1769ff;
        border: 2px solid #1769ff;
    }

    .pCard_card .pCard_back a:nth-of-type(4) i {
        color: #000000;
        border: 2px solid #000000;
    }

    .pCard_card .pCard_back a:nth-of-type(5) i {
        color: #eb5e95;
        border: 2px solid #eb5e95;
    }

    .pCard_card .pCard_back a:nth-of-type(6) i {
        color: #3f729b;
        border: 2px solid #3f729b;
    }

    .pCard_card .pCard_up .pCard_add i {
        color: white;
        font-size: 38px;
        line-height: 88px;

    }
</style>

<div class="container">

</div>
<div class="pCard_card">
    <div class="pCard_up">
        <img src="/uploads/avatar/<?php echo e($user->avatar); ?>" style="width: 100%;height: 100%;">
        <div class="pCard_text">
            <h2 style="margin-left: 10px;"><?php echo e($user->name); ?></h2>
            <p style="margin-left: 10px;"><?php echo e($user->email); ?></p>
        </div>
    </div>
    <div class="pCard_down">

        <form enctype="multipart/form-data" action="/userprofile" method="POST">
            <?php echo csrf_field(); ?>
            <label style="margin-left: 10px; margin-top: 30px; font-family: 'Prompt'; font-weight: 300;">เปลี่ยนรูปภาพ</label>
            <input type="file" name="avatar" style="margin-left: 10px; font-family: 'Prompt'; font-weight: 300; font-size: 15px; float: left;">
            <button type="submit" class="btn btn-warning" style="float: right; margin-right: 10px;">Submit</button>
        </form>
</div>
    <script>
$(function () {
  "use strict";
  $(".pCard_add").click(function () {
    $(".pCard_card").toggleClass("pCard_on");
    $(".pCard_add i").toggleClass("fa-minus");
  });
});

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/userProfile.blade.php ENDPATH**/ ?>