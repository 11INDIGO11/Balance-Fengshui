    @extends('layouts.app')
    @section('content')

        <div class="container" style="font-family: 'FC Lamoon';font-size: 52px;">
            <div style="width: 5px; height: 50px;background-color: #F9C414;float: left; margin-top:20px;"></div>
            &nbsp;<label>องค์ประกอบการแต่งบ้าน</label>
        </div>
        <br>
        <div class="container" style="text-align: center; font-family: 'Prompt Light';font-size: 36px;">
            <a href="/birth_data/content/bedroom"><button type="button" class="btn btn-secondary btn-lg">ห้องนอน</button></a>
            <a href="/birth_data/content/livingroom"><button type="button" class="btn btn-secondary btn-lg">ห้องนั่งเล่น</button></a>
            <button type="button" class="btn btn-secondary btn-lg">ห้องน้ำ</button>
            <button type="button" class="btn btn-secondary btn-lg">ห้องทำงาน</button>

            <br>
            <br>

            <div class="container">
                <img  src="https://sv1.picz.in.th/images/2020/12/17/j2aUH0.jpg" alt="Responsive image" />

                <div class="compass-bg" style=".compass-bg {
                    width: 100px;
                    height: 100px;
                    background-image: url('https://sv1.picz.in.th/images/2020/11/11/bPgRaD.png');
                    position: absolute;
                    top: 50%;
                    right: 15%;
                    margin-right: 0%;
                    transform: translate(-50%, -50%);

                }">
                    <img class="compass-pointer" src="https://sv1.picz.in.th/images/2020/11/11/bPgEdf.png"/>

                </div>

        </div>
        </div>

        <br>
        <br>


        <div class="box1" style="height: 100%;width: 100%; background-color: #1b1e21; color: white;
            font-family: 'Prompt Light';text-align: center; font-size:20px;" >The direction that suits you ( ทิศที่เหมาะสมกับคุณ )</div>
        <br>

        <div class="container" style="height: 100%;width: 100%; color: black;
            font-family: 'Prompt Light';text-align: center; font-size:18px;" >ห้องนอนธาตุไม้ ได้แก่ ห้องที่ตั้งอยู่ในตำแหน่งหลังอิงทิศตะวันออก หรือทิศตะวันออกเป็นทิศประจำธาตุ ตามหลักวิชาฮวงจุ้ยถือว่าธาตุไม้หมายถึงการเจริญเติบโตเจริญรุ่งเรืองและมั่นคงและธาตุไม้เป็นตัวแทนของ มังกรเขียว จะต้องมีขนาดที่สูงกว่าบ้านข้างเคียงจึงจะเป็นมงคลบ้านธาตุไม้ที่มีต้นไม้เป็นส่วนประกอบถือเป็นมงคลแล้ว การติดตั้งภาพน้ำ</div>

        <br>
        <div class="box1" style="height: 100%;width: 100%; background-color: #1b1e21; color: white;
            font-family: 'Prompt Light';text-align: center; font-size:20px;" >Furniture in room for feng shui ( เฟอร์นิเจอร์สำหรับฮวงจุ้ยของคุณ )</div>


        <br>
        <br>
        <div class="container" style="width: 60%;">
            <h4 style="font-family: 'Prompt Light';">เฟอร์นิเจอร์ตัวอย่าง</h4>
            <div class="row" style="text-align: center">
                <img src="{{url('uploads/OldAge/Bedroom/Fire/furniture/'.$birth_data->F_B1)}}" class="col" style="width: 50%;height: 50%;">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b7sMwP.png" class="col" style="width: 50%;height: 50%;">
                <div class="w-100 mt-4"></div>
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72WDt.png" class="col" style="width: 50%;height: 50%;">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72dJe.png" class="col" style="width: 50%;height: 50%;">
            </div>
            <br>
            <br>


        </div>
        <br>
        <br>


        <div class="box1" style="height: 100%;width: 100%; background-color: #1b1e21; color: white;
            font-family: 'Prompt Light';text-align: center; font-size:20px;" >Mood tone and color in room for Feng Shui ( สีและความรู้สึกภายในห้อง )</div>
        <br>
        <br>
        <div class="container" style="width: 60%;">
            <h4 style="font-family: 'Prompt Light';">โทนห้องตัวอย่าง</h4>
            <div class="row" style="text-align: center">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72k1S.png" class="col" style="width: 50%;height: 50%;">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72fMQ.png" class="col" style="width: 50%;height: 50%;">
                <div class="w-100 mt-4"></div>
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72fMQ.png" class="col" style="width: 50%;height: 50%;">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b729Lg.png" class="col" style="width: 50%;height: 50%;">
            </div>
            <br>
            <br>


        </div>
        <br>
        <br>

        <div class="box1" style="height: 100%;width: 100%; background-color: #1b1e21; color: white;
            font-family: 'Prompt Light';text-align: center; font-size:20px;" >Mood tone and color in room for Feng Shui ( สีและความรู้สึกภายในห้อง )</div>
        <br>
        <br>
        <div class="container" style="width: 60%;">
            <h4 style="font-family: 'Prompt Light';">วัสดุ/ลวดลายตัวอย่าง</h4>
            <div class="row" style="text-align: center">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72g69.png" class="col" style="width: 50%;height: 50%;">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72cRD.png" class="col" style="width: 50%;height: 50%;">
                <div class="w-100 mt-4"></div>
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72iMJ.png" class="col" style="width: 50%;height: 50%;">
                <img src="https://sv1.picz.in.th/images/2020/10/17/b72ULa.png" class="col" style="width: 50%;height: 50%;">
            </div>
            <br>
            <br>


        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <h2>Forward information for company</h2>
            <br>
            <h4 style="width: 50%;height: 100%; float: left; font-family: 'Prompt Light'; text-align: right;">หลังจากที่เราทราบข้อมูลเกี่ยวกับการเสริมฮวงจุ้ย
                ในเชิงฮวงจุ้ยในด้านการตกแต่งจัดห้องและ
                ออกแบบห้องแล้ว ในตอนนี้ขึ้นอยู่กับคุณแล้วว่า
                คุณต้องการที่จะเสริมฮวงจุ้ย ในทันทีโดยการกดที่ปุ่มสีเหลืองด้านขวาได้เลย
                เพื่อส่งข้อมูลให้กับช่างที่ไว้วางใจได้เลย
            </h4>
            <div style="width: 500px;height: 180px; background-color: #1d2124;float: right;
                    border-radius: 30px;color: white; font-family: 'Prompt Light';font-size: 32px;">
                <h2 style="color: white;text-align: left; margin-left: 20px; margin-top: 10px;">ติดต่อผู้มีประสบการณ์</h2>
                <br>
                <a href="model"><button type="button" class="btn btn-warning btn-lg" style="float: right;
                     margin-right: 10px; margin-top: 10px;">ติดต่อช่าง / บริษัท / ซินแส</button></a>

            </div>
        </div>
        <footer>
            <img src="https://america.cgtn.com/wp-content/uploads/2015/07/fengshui-800x483.jpg" alt="Responsive" style="width: 100%;height: 150px; margin-top: 100px;">
            <div class="footer-copyright text-center py-4" style="background-color: #1b1e21; color: white;">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
        <script type="application/javascript">
            var img = $('.compass-pointer');
            if(img.length > 0){
                var offset = img.offset();
                function mouse(evt){
                    var center_x = (offset.left) + (img.width()/2);
                    var center_y = (offset.top) + (img.height()/2);
                    var mouse_x = evt.pageX; var mouse_y = evt.pageY;
                    var radians = Math.atan2(mouse_x - center_x, mouse_y - center_y);
                    var degree = (radians * (180 / Math.PI) * -1) + 90;
                    img.css('-moz-transform', 'rotate('+degree+'deg)');
                    img.css('-webkit-transform', 'rotate('+degree+'deg)');
                    img.css('-o-transform', 'rotate('+degree+'deg)');
                    img.css('-ms-transform', 'rotate('+degree+'deg)');
                }
                $(document).mousemove(mouse);
            }
        </script>
    @endsection
