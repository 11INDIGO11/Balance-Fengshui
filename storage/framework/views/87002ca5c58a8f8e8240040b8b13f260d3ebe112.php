<?php $__env->startSection('scripts'); ?>

    <head>
        <link rel="shortcut icon" type="image/x-icon" href="https://sv1.picz.in.th/images/2020/11/07/bjx3lN.png" />
        <script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
        <script src="http://www.chartjs.org/samples/latest/utils.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <style>
            canvas {
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;

            }
            footer {
                background-color: #000000;
                padding: 40px 0;
                width: 100%;
            }

            .footer__title {
                font-size: 18px;
                margin: 0;
                margin-left: 0px;
                margin-left: 10px;
                display: inline-block;
                line-height: 18px;
                vertical-align: middle;
                color: #3a9fff;
            }

            .footer__light {
                color: #fff;
            }

            .footer__social {
                float: right;
            }

            .footer__social-l {
                margin-left: 15px;
                vertical-align: middle;
            }
            li{
                font-family: "Prompt Light";
            }
            small{
                font-family: "Prompt Light";
            }

            @media  screen and (min-width: 320px) {
                .topicText{
                    font-family: 'Prompt';font-size: 6vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
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
                .elementVale{
                    text-align: center;font-family: 'Prompt';font-size: 5vw;
                }

            }
            @media  screen and (min-width: 768px) {
                .topicText{
                    font-family: 'Prompt';font-size: 3vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
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
                .elementVale{
                    text-align: center;font-family: 'Prompt';font-size: 5vw;
                }

            }
            @media  screen and (min-width: 1025px) {
                .topicText{
                    font-family: 'Prompt';font-size: 2vw; margin-top: 15px; font-weight: 500; margin-left: 15px;
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
                .elementVale{
                    text-align: center;font-family: 'Prompt';font-size: 3vw;
                }

            }
        </style>
    </head>
    <form action="<?php echo e(url('/member/'.$member1->id)); ?>" method="post" id="form-delete">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <div class="container" >
            <div class="row">

                <div class="col-12">
                    <button class="btn" onclick="confirm_delete()" type="button" style="font-family: 'Prompt'; border-radius: 500px; font-weight: 300; margin-right: 1%; float: right;">ลบรายการสมาชิกนี้</button>
                </div>
            </div>

        </div>

    </form>

    <div class="container">
        <br>
        <br>
        <div class="container" >
            <div style="width: 5px; height: 35px;background-color: #F9C414; margin-top:20px; float: left;"></div>
            &nbsp<label class="topicText">ข้อมูลวันเกิดและธาตุทั้งห้า</label>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-2 desktop" style="text-align: center;">
                <img class="card-img-top" src="<?php echo e(url('uploads/zodiac/'.$member_detail->id_zodiac.'.png')); ?>" alt="Card image cap" style="background-color: black; border-radius: 20px; width: 100%; ">
            </div>
            <div class="col-10 desktop">
                <div class="card-body" style="width: 30rem; height: 100%; font-family: 'Prompt'; font-weight: 300;font-size: 18px;">
                    <h5 class="card-title" style="float: left;  font-size: 1.5rem">&nbsp; ปี/เดือน/วัน :</h5>

                    <p class="card-text" style=" font-size: 1.5rem">&nbsp<?php echo e(date('d M Y', strtotime($member_detail->year_month_day))); ?></p>
                    <h5 class="card-title" style="float: left;  font-size: 1.5rem">&nbsp; เวลาเกิด :</h5>
                    <p class="card-text" style=" font-size: 1.5rem">&nbsp ช่วง<?php echo e($member_detail->duration); ?> </p>
                    <h5 class="card-title" style="float: left; font-size: 1.5rem">&nbsp; ปีนักษัตร :</h5>
                    <p class="card-text" style=" font-size: 1.5rem">&nbsp<?php echo e($member_detail->zodiac_data); ?></p>
                </div>
            </div>
            <div class="col-12 mobile" style="text-align: center;">
                <img class="card-img-top" src="<?php echo e(url('uploads/zodiac/'.$member_detail->id_zodiac.'.png')); ?>" alt="Card image cap" style="background-color: black; border-radius: 20px; width: 70%;">
            </div>
            <div class="col-12 mobile" style="text-align: center;">
                <div class="card-body" style=" height: 100%; font-family: 'Prompt'; margin-top: 15px; font-weight: 300;font-size: 5vw;">
                    <h5 class="card-title" style="float: left;  font-size: 5.5vw">&nbsp; ปี/เดือน/วัน :</h5>

                    <p class="card-text" style=" font-size: 5.5vw">&nbsp<?php echo e($member_detail->year_month_day); ?></p>
                    <h5 class="card-title" style="float: left;  font-size: 5.5vw">&nbsp; เวลาเกิด :</h5>
                    <p class="card-text" style=" font-size: 5.5vw">&nbsp ช่วง<?php echo e($member_detail->duration); ?> </p>
                    <h5 class="card-title" style="float: left; font-size: 5.5vw">&nbsp; ปีนักษัตร :</h5>
                    <p class="card-text" style=" font-size: 5.5vw">&nbsp<?php echo e($member_detail->zodiac_data); ?></p>
                </div>
            </div>
        </div>
    <br>
    <br>
    <div class="container">
        <div class="row"><br></div>
        <center>
            <div id="container" style="width: 100%;">
                <canvas id="canvas"></canvas>
            </div>
        </center>
    </div>

    <div class="container" alt="Responsive" >

        <table class="table" >
            <thead>
            <tr>

                <td class="elementVale"><?php echo e($member_detail->earth_element); ?></td>
                <td class="elementVale"><?php echo e($member_detail->metal_element); ?></td>
                <td class="elementVale"><?php echo e($member_detail->water_element); ?></td>
                <td class="elementVale"><?php echo e($member_detail->wood_element); ?></td>
                <td class="elementVale"><?php echo e($member_detail->fire_element); ?></td>
            </tr>

            </thead>

            <tbody>
            <br>
            <br>
            <tr alt="Responsive" style="text-align: center;">
                <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtxTf.png" class="img-thumbnail border-0"></th>
                <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtEU8.png" class="img-thumbnail border-0"></th>
                <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtQja.png" class="img-thumbnail border-0"></th>
                <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjt5Bz.png" class="img-thumbnail border-0"></th>
                <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtUvq.png" class="img-thumbnail border-0"></th>
            </tr>

            </tbody>
        </table>
    </div>
    <br>
    <br>

        </div>






        <div class="container" id="topic" >
            <div style="width: 5px; height: 50px;background-color: #F9C414; margin-top:20px; float: left;"></div>
            &nbsp<label class="topicText">ทิศหัวนอนที่เสริมดวงตามปีนักษัตรของคุณ : <?php echo e($member_detail->zodiac_data); ?></label>
        </div>

    <br>
    <div class="container" style="text-align: center; font-family: 'Prompt'; font-weight: 300;font-size: 36px;">
        <a href="/member/<?php echo e($id); ?>?room_id=1"><button type="button" style="border-radius: 500px; border: none;" class="btn-<?php echo e($room_id==1? 'warning':'secondary'); ?> btn-lg">ห้องนอน</button></a>
        <a href="/member/<?php echo e($id); ?>?room_id=2"><button type="button" style="border-radius: 500px; border: none;" class="btn-<?php echo e($room_id==2? 'warning':'secondary'); ?> btn-lg">ห้องนั่งเล่น</button></a>


        <div id="lv_room" hidden><?php echo e($room_type); ?></div>
        <br>
        <br>
    </div>


    <div class="container" id="compassbox">

        <div class="row">
            <div class="col-12"><img src="<?php echo e(url('uploads/'.$member_datas->moodtone_03)); ?>" width="100%;"></div>
        </div>

        <div class="row">
            <div class="col-12"><img src="<?php echo e(url('uploads/compass/'.$compass->compass_pic)); ?>" width="100%;" ></div>
        </div>

    </div>

    <div class="container" id="showLivingroom" hidden>

        <div class="row">
            <div class="col-12"><img src="<?php echo e(url('uploads/'.$member_datas->moodtone_02)); ?>" width="100%;"></div>
        </div>


    </div>



        <div class="container" style="height: 100%; text-align: center;">
        </div>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" style="width: 90%;">
            <h1 style="font-family: 'Prompt'; font-weight: 300; text-align: center;">โทนห้องตัวอย่างที่ส่งเสริมธาตุที่น้อยของคุณ</h1>
            <br>






        </div>


        <div class="container-fluid">
            <div class="row" style="text-align: center;">
                <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_01)); ?>" style=" width: 100%;height: 85%
        ;"></div>
                <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_02)); ?>"  style=" width: 100%; height: 85%;"></div>
                <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_03)); ?>" style=" width: 100%; height: 85%;"></div>
                <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_04)); ?>"  style=" width: 100%; height: 85%;"></div>

                <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_01)); ?>" style=" width: 100%;height: 85%;"></div>
                <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_02)); ?>"  style=" width: 100%; height: 85%;"></div>
                <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_03)); ?>" style=" width: 100%; height: 85%;"></div>
                <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->moodtone_04)); ?>"  style=" width: 100%; height: 85%;"></div>

                <div class="col-12" style="text-align: center; margin-top: 4vw;"><h3 style="font-family: 'Prompt'; font-weight: 300; margin-bottom: 30px;padding-right: 5vw; padding-left: 5vw;">ข้อแนะนำ : <?php echo e($text_recommend->moodtone_text); ?></h3></div>
            </div>
        </div>



        <br>
        <br>


        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="container">
        <h1 style="font-family: 'Prompt'; font-weight: 300; text-align: center;">เฟอร์นิเจอร์ตัวอย่างที่ส่งเสริมธาตุที่น้อยของคุณ</h1>
        <br>
        
        
        
        
        
        
    </div>
    <div class="container-fluid">
        <div class="row" style="text-align: center;">
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_01)); ?>" style=" width: 100%;height: 85%
        ;"></div>
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_02)); ?>"  style=" width: 100%; height: 85%;"></div>
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_03)); ?>" style=" width: 100%; height: 85%;"></div>
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_04)); ?>"  style=" width: 100%; height: 85%;"></div>

            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_01)); ?>" style=" width: 100%;height: 85%;"></div>
            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_02)); ?>"  style=" width: 100%; height: 85%;"></div>
            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_03)); ?>" style=" width: 100%; height: 85%;"></div>
            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->furniture_04)); ?>"  style=" width: 100%; height: 85%;"></div>

            <div class="col-12" style="text-align: center; margin-top: 4vw;"><h3 style="font-family: 'Prompt'; font-weight: 300; margin-bottom: 30px;padding-right: 5vw; padding-left: 5vw;">ข้อแนะนำ : <?php echo e($text_recommend->furniture_text); ?></h3></div>
        </div>
    </div>

    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        <div class="container" style="width: 90%; text-align: center;">
            <h1 style="font-family: 'Prompt'; font-weight: 300; text-align: center;">วัสดุตัวอย่างที่ส่งเสริมธาตุที่น้อยของคุณ</h1>
            <br>






        </div>
    <div class="container-fluid">
        <div class="row" style="text-align: center;">
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_01)); ?>" style=" width: 100%;height: 85%
        ;"></div>
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_02)); ?>"  style=" width: 100%; height: 85%;"></div>
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_03)); ?>" style=" width: 100%; height: 85%;"></div>
            <div class="col-3 detailDesktop" style="padding: 0; height: 22vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_04)); ?>"  style=" width: 100%; height: 85%;"></div>

            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_01)); ?>" style=" width: 100%;height: 85%;"></div>
            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_02)); ?>"  style=" width: 100%; height: 85%;"></div>
            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_03)); ?>" style=" width: 100%; height: 85%;"></div>
            <div class="col-6 detailMobile" style="padding: 0; height: 42vw;"><img class="myImg" src="<?php echo e(url('uploads/'.$member_datas->material_04)); ?>"  style=" width: 100%; height: 85%;"></div>

            <div class="col-12" style="text-align: center; margin-top: 4vw;"><h3 style="font-family: 'Prompt'; font-weight: 300; margin-bottom: 30px;padding-right: 5vw; padding-left: 5vw;">ข้อแนะนำ : <?php echo e($text_recommend->material_text); ?></h3></div>
        </div>
    </div>


        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <footer >
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6" style="background-color: black;">
                    <img class="footer__img" style=" width: 50px;height: 50px;" src="https://sv1.picz.in.th/images/2020/11/07/bjx3lN.png">
                    <h1 class="footer__title" style="color: white; width: 50px;">Balance<span class="footer__light" style="color: #F9C414;">.com</span></h1>
                </div>
                <div class="col-md-10 col-xs-6">
                    <div class="footer__social">
                        <a href="#" class="footer__social-l">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                        </a>
                        <a href="#" class="footer__social-l">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                        </a>

                        <a href="#" class="footer__social-l">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzOC41MzMgNDM4LjUzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzMyA0MzguNTMzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQwOS4xMzMsMTA5LjIwM2MtMTkuNjA4LTMzLjU5Mi00Ni4yMDUtNjAuMTg5LTc5Ljc5OC03OS43OTZDMjk1LjczNiw5LjgwMSwyNTkuMDU4LDAsMjE5LjI3MywwICAgYy0zOS43ODEsMC03Ni40Nyw5LjgwMS0xMTAuMDYzLDI5LjQwN2MtMzMuNTk1LDE5LjYwNC02MC4xOTIsNDYuMjAxLTc5LjgsNzkuNzk2QzkuODAxLDE0Mi44LDAsMTc5LjQ4OSwwLDIxOS4yNjcgICBjMCwzOS43OCw5LjgwNCw3Ni40NjMsMjkuNDA3LDExMC4wNjJjMTkuNjA3LDMzLjU5Miw0Ni4yMDQsNjAuMTg5LDc5Ljc5OSw3OS43OThjMzMuNTk3LDE5LjYwNSw3MC4yODMsMjkuNDA3LDExMC4wNjMsMjkuNDA3ICAgczc2LjQ3LTkuODAyLDExMC4wNjUtMjkuNDA3YzMzLjU5My0xOS42MDIsNjAuMTg5LTQ2LjIwNiw3OS43OTUtNzkuNzk4YzE5LjYwMy0zMy41OTYsMjkuNDAzLTcwLjI4NCwyOS40MDMtMTEwLjA2MiAgIEM0MzguNTMzLDE3OS40ODUsNDI4LjczMiwxNDIuNzk1LDQwOS4xMzMsMTA5LjIwM3ogTTIxOS4yNywzMS45NzdjNDcuMjAxLDAsODguNDEsMTUuNjA3LDEyMy42MjEsNDYuODJsLTMuNTY5LDQuOTkzICAgYy0xLjQyNywyLjAwMi00Ljk5Niw1Ljg1Mi0xMC43MDQsMTEuNTY1Yy01LjcwOSw1LjcwOC0xMS45NDMsMTEuMTM2LTE4LjY5OSwxNi4yNzRjLTYuNzYyLDUuMTQtMTUuOTQsMTAuOTkyLTI3LjU1NSwxNy41NTkgICBjLTExLjYxMSw2LjU2Ny0yMy45ODIsMTIuMzI4LTM3LjExNywxNy4yNzZjLTIxLjg4Ny00MC4zNTUtNDUuMjk2LTc2LjcwOS03MC4yMzEtMTA5LjA2NCAgIEMxOTAuMDU1LDMzLjc4NCwyMDQuODA1LDMxLjk3NywyMTkuMjcsMzEuOTc3eiBNNzIuNTI0LDEwMy4wNmMxOC4yNzEtMjMuMDI2LDQwLjUzNy00MC43Myw2Ni44MDYtNTMuMSAgIGMyMy42MDEsMzEuNDA1LDQ2LjgyLDY3LjM4MSw2OS42NjIsMTA3LjkyMWMtNTcuODYyLDE1LjIyNy0xMTUuNTMyLDIyLjg0MS0xNzMuMDE0LDIyLjgzOCAgIEM0Mi4wNzIsMTUxLjk4LDU0LjI1MywxMjYuMDkxLDcyLjUyNCwxMDMuMDZ6IE00NC41NCwyODYuNzk0Yy04LjM3Ni0yMS40MTItMTIuNTYzLTQzLjkyMy0xMi41NjMtNjcuNTI3ICAgYzAtMi42NjYsMC4wOTgtNC42NjUsMC4yODYtNS45OTZjNjguOTA1LDAsMTMyLjk1NS04Ljg0OCwxOTIuMTQ5LTI2LjU1M2M2LjA5MiwxMS44LDExLjEzNiwyMi4zNjQsMTUuMTMzLDMxLjY5MyAgIGMtMC43NzEsMC4zOC0xLjk5OSwwLjgwNi0zLjcxMywxLjI4M2MtMS43MTksMC40NzYtMi45NTMsMC44MDYtMy43MjEsMC45OTlsLTEwLjU2MSwzLjcxMSAgIGMtNy4yMzYsMi42NjYtMTYuNzA4LDcuMjM1LTI4LjQwOSwxMy43MDNjLTExLjcwNCw2LjQ3OC0yNC4xMjMsMTQuMTgyLTM3LjI1NywyMy4xM2MtMTMuMTM0LDguOTQ5LTI2LjY5NiwyMC43OTctNDAuNjg0LDM1LjU1MyAgIGMtMTMuOTksMTQuNzUtMjUuNzQzLDMwLjU5MS0zNS4yNiw0Ny41M0M2NC43MTMsMzI3LjM4MSw1Mi45MTQsMzA4LjIsNDQuNTQsMjg2Ljc5NHogTTIxOS4yNyw0MDYuNTYgICBjLTQ0LjU0LDAtODQuMzItMTQuMjc3LTExOS4zNDMtNDIuODI1bDQuMjgzLDMuMTQyYzYuNjYxLTE0LjY2LDE2LjQ2Mi0yOC43NDYsMjkuNDA4LTQyLjI1NyAgIGMxMi45NDQtMTMuNTExLDI1LjQxLTI0LjQxMywzNy40MDEtMzIuNjk1YzExLjk5MS04LjI3NCwyNS4wMjgtMTYuMDc3LDM5LjExNS0yMy40MTRjMTQuMDg0LTcuMzIzLDIzLjY5MS0xMS45OTEsMjguODM1LTEzLjk4MyAgIGM1LjE0LTEuOTk4LDkuMjMzLTMuNTcyLDEyLjI3OC00LjcxNmwwLjU2OC0wLjI4N2gwLjU3NWMxOC42NDcsNDguOTE2LDMxLjk3Nyw5Ni4zMTMsMzkuOTY4LDE0Mi4xODQgICBDMjY4Ljc1Niw0MDEuNjExLDI0NC4zOTcsNDA2LjU1NywyMTkuMjcsNDA2LjU2eiBNMzc2Ljg3NiwzMjAuNDc5Yy0xNC4wODYsMjEuNzk2LTMxLjY5NiwzOS44MzQtNTIuODE3LDU0LjEwNCAgIGMtNy44MS00My43NzYtMTkuOTg1LTg4LjQxNS0zNi41NDktMTMzLjkwMmMzNy44NzctNS45MDcsNzYuOC0zLjE0MiwxMTYuNzcxLDguMjc0ICAgQzQwMC4wOTIsMjc0Ljg0MSwzOTAuOTU1LDI5OC42ODcsMzc2Ljg3NiwzMjAuNDc5eiBNNDAzLjcwNiwyMTYuNjk4Yy0xLjkwMy0wLjM3OC00LjI4NS0wLjgxLTcuMTM5LTEuMjgzICAgYy0yLjg1NC0wLjQ3My02LjMzMS0xLjA0Ny0xMC40MjQtMS43MTNjLTQuMDg3LTAuNjY2LTguNjYyLTEuMjgzLTEzLjcwMi0xLjg1NWMtNS4wNDUtMC41NzEtMTAuNDIxLTEuMDkzLTE2LjEzNi0xLjU2OSAgIGMtNS43MDgtMC40NzgtMTEuOC0wLjg1NS0xOC4yNjgtMS4xNDNjLTYuNDc5LTAuMjg0LTEzLjA0Mi0wLjQyOC0xOS43MDUtMC40MjhjLTYuNjU2LDAtMTMuNjU3LDAuMTkzLTIwLjk4MSwwLjU3MSAgIGMtNy4zMjYsMC4zNzUtMTQuNDE0LDEuMDQ5LTIxLjI2NSwxLjk5OWMtMC41NzUtMC45NTMtMS4yODctMi41MjQtMi4xNDMtNC43MTRjLTAuODU1LTIuMTg3LTEuNDc5LTMuODU1LTEuODQ4LTQuOTk3ICAgYy0zLjYyMS03Ljk5NC03LjgxLTE3LjAzNi0xMi41NzMtMjcuMTIxYzEzLjEzNC01LjMzMywyNS42NTItMTEuNDY5LDM3LjU1NS0xOC40MThjMTEuODkyLTYuOTQ5LDIxLjQwMi0xMy4xMzEsMjguNTQ0LTE4LjU1NSAgIGM3LjEzOS01LjQzLDEzLjg5NS0xMS4xODgsMjAuMjctMTcuMjc3YzYuMzc5LTYuMDksMTAuNTEzLTEwLjMyMywxMi40MjMtMTIuNzAzYzEuOTA2LTIuMzg0LDMuNzEzLTQuNzE0LDUuNDI0LTYuOTk1bDAuMjg3LTAuMjg4ICAgYzI3Ljc4OCwzMy44OCw0MS45NzQsNzIuODk3LDQyLjUzOCwxMTcuMDU5TDQwMy43MDYsMjE2LjY5OHoiIGZpbGw9IiM3MjkzYjMiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                        </a>

                        <a href="" class="footer__social-l">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzMC4xMTcgNDMwLjExNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExNyA0MzAuMTE3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IkxpbmtlZEluIiBkPSJNNDMwLjExNywyNjEuNTQzVjQyMC41NmgtOTIuMTg4VjI3Mi4xOTNjMC0zNy4yNzEtMTMuMzM0LTYyLjcwNy00Ni43MDMtNjIuNzA3ICAgYy0yNS40NzMsMC00MC42MzIsMTcuMTQyLTQ3LjMwMSwzMy43MjRjLTIuNDMyLDUuOTI4LTMuMDU4LDE0LjE3OS0zLjA1OCwyMi40NzdWNDIwLjU2aC05Mi4yMTljMCwwLDEuMjQyLTI1MS4yODUsMC0yNzcuMzJoOTIuMjEgICB2MzkuMzA5Yy0wLjE4NywwLjI5NC0wLjQzLDAuNjExLTAuNjA2LDAuODk2aDAuNjA2di0wLjg5NmMxMi4yNTEtMTguODY5LDM0LjEzLTQ1LjgyNCw4My4xMDItNDUuODI0ICAgQzM4NC42MzMsMTM2LjcyNCw0MzAuMTE3LDE3Ni4zNjEsNDMwLjExNywyNjEuNTQzeiBNNTIuMTgzLDkuNTU4QzIwLjYzNSw5LjU1OCwwLDMwLjI1MSwwLDU3LjQ2MyAgIGMwLDI2LjYxOSwyMC4wMzgsNDcuOTQsNTAuOTU5LDQ3Ljk0aDAuNjE2YzMyLjE1OSwwLDUyLjE1OS0yMS4zMTcsNTIuMTU5LTQ3Ljk0QzEwMy4xMjgsMzAuMjUxLDgzLjczNCw5LjU1OCw1Mi4xODMsOS41NTh6ICAgIE01LjQ3Nyw0MjAuNTZoOTIuMTg0di0yNzcuMzJINS40NzdWNDIwLjU2eiIgZmlsbD0iIzcyOTNiMyIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script>
        function confirm_delete() {
            var text = '<?php echo 'ชื่อ : '.$member1->m_name.', ความสัมพันธ์ : '.$member1->m_relationship; ?>';
            var confirm = window.confirm('ยืนยันการลบ '+text);
            if (confirm) {
                document.getElementById('form-delete').submit();
            }
        }
        var chartdata = {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($Months); ?>,
            // labels: month,
            datasets: [
                {
                    label: 'ระดับธาตุ',
                    backgroundColor: ["#E59866", "#F7DC6F", "#85C1E9", "#82E0AA", "#F1948A"],
                    borderWidth: 1,
                    data: <?php echo json_encode($Data); ?>
                }
            ]
            },
            options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
            }
            }
            var ctx = document.getElementById('canvas').getContext('2d');
            new Chart(ctx, chartdata);

        var check_room = document.getElementById('lv_room').innerHTML
        if(check_room == 'ห้องนั่งเล่น'){
            document.getElementById("compassbox").hidden = true;
            document.getElementById("topic").hidden = true;
            document.getElementById("showLivingroom").hidden = false;
        }
        if(check_room == 'ห้องนอน'){
            document.getElementById("compassbox").hidden = false;
        }
        console.log(check_room);
    </script>


<?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/membershow_data.blade.php ENDPATH**/ ?>