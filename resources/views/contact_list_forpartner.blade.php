@extends('layouts.app')
@section('content')

    <div class="container">
        <div style="width: 5px; height: 35px;background-color: #F9C414; margin-top:20px; float: left;"></div>
        &nbsp<label class="topicText">รายการที่ผู้ใช้ติดต่อมา</label>
    </div>

    <div class="container">
        @if(count($user_contact)>0)
            <table class="table hideBox1" style="font-family: Prompt; font-weight: 300;">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">ชื่อผู้ใช้</th>
                    <th scope="col">เบอร์ติดต่อผู้ใช้</th>
                    <th scope="col">งบที่ตั้งไว้</th>
                    <th scope="col">เวลาที่ทำรายการ</th>
                    <th scope="col">รายละเอียด</th>

                </tr>
                </thead>
                <tbody>
                @foreach($user_contact as $user_contacts)
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/{{$user_contacts->status}}.png" style="width: 100%;"></td>
                        <td id="status" style="text-align: center;">{{$user_contacts->status}}</td>
                        <td>{{$user_contacts->title}}</td>
                        <td>{{$user_contacts->user_name}}</td>
                        <td>{{$user_contacts->user_phonenumber}}</td>
                        <td>{{$user_contacts->budget}}</td>
                        <td>{{$user_contacts->created_at}}</td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/user_contact/{{$user_contacts->id}}">ดู</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table hideBox2" style="font-family: Prompt; font-weight: 300;">
                <thead>
                <tr>
                    <th scope="col">สถานะ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">ชื่อผู้ใช้</th>
                    <th scope="col">รายละเอียด</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user_contact as $user_contacts)
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/{{$user_contacts->status}}.png" style="width: 100%;"></td>
                        <td>{{$user_contacts->title}}</td>
                        <td>{{$user_contacts->user_name}}</td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/user_contact/{{$user_contacts->id}}">ดู</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table hideBox3" style="font-family: Prompt; font-weight: 300;">
                <thead>
                <tr>
                    <th scope="col">สถานะ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">ชื่อผู้ใช้</th>
                    <th scope="col">เบอร์ติดต่อผู้ใช้</th>
                    <th scope="col">งบที่ตั้งไว้</th>
                    <th scope="col">เวลาที่ทำรายการ</th>
                    <th scope="col">รายละเอียด</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user_contact as $user_contacts)
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/{{$user_contacts->status}}.png" style="width: 100%;"></td>
                        <td>{{$user_contacts->title}}</td>
                        <td>{{$user_contacts->user_name}}</td>
                        <td>{{$user_contacts->user_phonenumber}}</td>
                        <td>{{$user_contacts->budget}}</td>
                        <td>{{$user_contacts->created_at}}</td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/user_contact/{{$user_contacts->id}}">ดู</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top: 5%;">
                <h3 style="font-family: Prompt; font-size: 18px;">หมายเหตุ : <span style="font-family: Prompt; font-size: 18px; opacity: 80%; font-weight: 300; ">สถานะ : รอดำเนินการ = รอการตอบกลับ, สถานะ : เรียบร้อย = ทำงานสำเร็จตามที่ลูกค้าต้องการ, สถานะ : ยอมรับและกำลังดำเนินการ = พาทเนอร์รับงานและกำลังดำเนินการ, สถานะ : ปฏิเสธ = ยกเลิกรายการนี้แล้ว,</span></h3>
            </div>
        </div>
    </div>

@endsection



