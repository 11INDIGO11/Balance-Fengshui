<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Balance-Fengshui</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('dist/js/jquery-2.1.0.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('dist/js/jquery-ui-1.10.1.custom.min.js')); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
        .swal2-title{
            font-family: 'Prompt';
        }
        .swal2-content{
            font-family: 'Prompt';
            font-weight: 300;
        }
        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }

        ul {
            margin: 0;
            padding: 0;
        }
        .header__light {
            color: #F9C414;
        }

        li {
            list-style: none;
        }



        .user-wrapper, .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }

        .user-wrapper {
            height: 600px;
        }

        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background: #eeeeee;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 64px;
            border-radius: 64px;
        }
        .header__el {
            padding: 0 25px;
            display: inline-block;
            font-family: "Prompt";
            font-weight: 300;
            color: #ffffff;
        }
        .header__link {
            color: #FFFFFF;
            font-size: 14px;
            float: right;
        }
        .header__link:hover {
            text-decoration: none;
            color: #F9C414;
        }
        /*.header__el {*/
        /*    display: block;*/
        /*    padding: 10px 20px;*/
        /*    border-top: 1px solid #ededed;*/
        /*}*/

        .media-body p {
            margin: 6px 0;
        }

        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }

        .messages .message {
            margin-bottom: 15px;
        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received {
            background: #ffffff;
        }

        .sent {
            background: #3bebff;
            float: right;
            text-align: right;
        }

        .message p {
            margin: 5px 0;
        }

        .date {
            color: #777777;
            font-size: 12px;
        }

        .active {
            background: #eeeeee;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }
        .header__menu {
            float: right;
        }
        .header__menu {
            display: inline-block;
            vertical-align: middle;
        }
        .header__menu {
            width: 100%;
        }
        .navbar{
            height: 6rem;
        }


        @media  screen and (min-width: 320px) {
            .detailMobile{
                display: block;
            }
            .detailDesktop{
                display: none;
            }
            .topicText{
                font-family: 'Prompt';font-size: 7vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
            }
            .hideBox1{
                display: none;
                width: 100%;
            }
            .hideBox2{
                display: block;
            }
            .hideBox3{
                display: none;
            }
            .elementVale{
                text-align: center;font-family: 'Prompt';font-size: 5vw;
            }
            .img-thumbnail{
                width: 100%;
            }
            .col-2.desktop{
                display: none;
            }
            .col-10.desktop{
                display: none;
            }
            .col-12.mobile{
                display: block;
            }
            .btn{
                margin: auto;
                display: block;
                margin-bottom: 1vw;
                font-family: Prompt;
                background-color: #F9C414;
                border-radius: 500px;
                height:42px;
                color: #252525;
                box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                -o-transition: all 0.4s;
                font-size: 4vw;

            }

            .btn:hover {
                background-color: #edb806;
                color: #252525;
                box-shadow: none;
            }
        }
        @media  screen and (min-width: 768px) {
            .detailMobile{
                display: none;
            }
            .detailDesktop{
                display: block;
            }
            .hideBox1{
                display: none;
                width: 100%;
            }
            .hideBox2{
                display: none;
            }
            .hideBox3{
                display: block;
            }
            .topicText{
                font-family: 'Prompt';font-size: 3vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
            }
            .elementVale{
                text-align: center;font-family: 'Prompt';font-size: 5vw;
            }
            .img-thumbnail{
                width: 90%;
            }
            .col-2.desktop{
                display: block;
            }
            .col-10.desktop{
                display: block;
            }
            .col-12.mobile{
                display: none;
            }
            .btn{
                margin: auto;
                display: block;
                margin-bottom: 1vw;
                font-family: Prompt;
                background-color: #F9C414;
                border-radius: 500px;
                height:42px;
                color: #252525;
                box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                -o-transition: all 0.4s;
                font-size: 2vw;

            }

            .btn:hover {
                background-color: #edb806;
                color: #252525;
                box-shadow: none;
            }
        }
        @media  screen and (min-width: 1025px) {
            .detailMobile{
                display: none;
            }
            .detailDesktop{
                display: block;
            }
            .hideBox1{
                display: block;
                width: 100%;
            }
            .hideBox2{
                display: none;
            }
            .hideBox3{
                display: none;
            }
            .topicText{
                font-family: 'Prompt';font-size: 2vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
            }
            .elementVale{
                text-align: center;font-family: 'Prompt';font-size: 2vw;
            }
            .img-thumbnail{
                width: 50%;
            }
            .col-4.desktop{
                display: block;
            }
            .col-8.desktop{
                display: block;
            }
            .col-12.mobile{
                display: none;
            }
            .btn{
                margin: auto;
                display: block;
                margin-bottom: 1vw;
                font-family: Prompt;
                background-color: #F9C414;
                border-radius: 500px;
                height:42px;
                color: #252525;
                box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                -o-transition: all 0.4s;
                font-size: 1vw;

            }

            .btn:hover {
                background-color: #edb806;
                color: #252525;
                box-shadow: none;
            }
        }
        .nav{
            width: 100%;
        }

    </style>
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #000000;">
            <div class="container">




                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: white;">
                    <img src="https://sv1.picz.in.th/images/2021/02/27/oVBeRV.png" width="50" height="50" class="d-inline-block align-top"style="margin-top: -10px;">&nbsp
                    Balance-fengshui<span class="header__light">.com</span>
                </a>








                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon" style="background-color: #F9C414; border-radius: 2px;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="btn" style="background-color: rgb(249, 196, 20);" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown" style="z-index: 999;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white; position: relative; padding-left: 50px;">
                                    <img src="/uploads/avatar/<?php echo e(Auth::user()->avatar); ?>" style="width: 32px; height: 32px; position: absolute; top: 4px; left: 10px; border-radius: 50%;">
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="float: right;">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('/userprofile')); ?>"><i class="fa fa-btn fa-sign-out"></i>User Profile</a>
                                    <a class="dropdown-item" style="font-family: Prompt; font-weight: 300;" href="<?php echo e(url('/partnerprofile')); ?>"><i class="fa fa-btn fa-sign-out"></i>Partner Profile</a>
                                    <a class="dropdown-item" style="font-family: Prompt; font-weight: 300;" href="/chat" class="dropdown-item">พูดคุย</a>
                                    <a class="dropdown-item" style="font-family: Prompt; font-weight: 300;" href="/partner_contact" class="dropdown-item">ติดต่อช่าง</a>
                                    <a class="dropdown-item" style="font-family: Prompt; font-weight: 300;" href="/home" class="dropdown-item">คำนวณวันเกิด</a>
                                    <a class="dropdown-item" style="font-family: Prompt; font-weight: 300;" href="/partials" class="dropdown-item">กระทู้ ถาม/ตอบ</a>
                                    <a class="dropdown-item" style="font-family: Prompt; font-weight: 300;" href="/partner/login" class="dropdown-item">สมัครเป็นพาร์ตเนอร์กับเรา </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>

                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <?php echo $__env->yieldContent('scripts'); ?>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('498e8c2dc8fbd66e0f88', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>

    <script>
        var receiver_id = '';
        var my_id = "<?php echo e(Auth::id()); ?>";
        $(document).ready(function () {
            // ajax setup form csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('49f3ba8c9d3adab2613e', {
                cluster: 'ap2',
                forceTLS: true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function (data) {
                // alert(JSON.stringify(data));
                if (my_id == data.from) {
                    $('#' + data.to).click();
                } else if (my_id == data.to) {
                    if (receiver_id == data.from) {
                        // if receiver is selected, reload the selected user ...
                        $('#' + data.from).click();
                    } else {
                        // if receiver is not seleted, add notification for that user
                        var pending = parseInt($('#' + data.from).find('.pending').html());

                        if (pending) {
                            $('#' + data.from).find('.pending').html(pending + 1);
                        } else {
                            $('#' + data.from).append('<span class="pending">1</span>');
                        }
                    }
                }
            });

            $('.user').click(function () {
                $('.user').removeClass('active');
                $(this).addClass('active');
                $(this).find('.pending').remove();

                receiver_id = $(this).attr('id');
                $.ajax({
                    type: "get",
                    url: "message/" + receiver_id, // need to create this route
                    data: "",
                    cache: false,
                    success: function (data) {
                        $('#messages').html(data);
                        scrollToBottomFunc();
                    }
                });
            });

            $(document).on('keyup', '.input-text input', function (e) {
                var message = $(this).val();

                // check if enter key is pressed and message is not null also receiver is selected
                if (e.keyCode == 13 && message != '' && receiver_id != '') {
                    $(this).val(''); // while pressed enter text box will be empty

                    var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                    $.ajax({
                        type: "post",
                        url: "message", // need to create this post route
                        data: datastr,
                        cache: false,
                        success: function (data) {

                        },
                        error: function (jqXHR, status, err) {
                        },
                        complete: function () {
                            scrollToBottomFunc();
                        }
                    })
                }
            });
        });

        // make a function to scroll down auto
        function scrollToBottomFunc() {
            $('.message-wrapper').animate({
                scrollTop: $('.message-wrapper').get(0).scrollHeight
            }, 50);
        }
    </script>
    <script>
        Pusher.log = function (msg) {
//                console.log(msg);
        };
        var pusher = new Pusher("<?php echo e(env("PUSHER_KEY")); ?>")
        var channel = pusher.subscribe('test-channel');
        channel.bind('test-event', function (data) {
//                console.log(data);
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>