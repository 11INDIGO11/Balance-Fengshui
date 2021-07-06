@extends('layouts.app')
@section('content')

    <div class="container">
        <div style="width: 5px; height: 35px;background-color: #F9C414; margin-top:20px; float: left;"></div>
        &nbsp<label class="topicText">รายการที่ส่งคำขอ</label>
    </div>

    <div class="container">
        @if(count($partner_contact)>0)
            <table class="table hideBox1" style="font-family: Prompt; font-weight: 300;">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">ชื่อบริษัทที่ติดต่อ</th>
                    <th scope="col">เบอร์ติดต่อบริษัท</th>
                    <th scope="col">งบที่ตั้งไว้</th>
                    <th scope="col">เวลาที่ทำรายการ</th>
                    <th scope="col">รายละเอียดบริษัท</th>
                </tr>
                </thead>
                <tbody>
                @foreach($partner_contact as $partner_contacts)
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/{{$partner_contacts->status}}.png" style="width: 100%;"></td>
                        <td>{{$partner_contacts->status}}</td>
                        <td>{{$partner_contacts->title}}</td>
                        <td>{{$partner_contacts->partner_name}}</td>
                        <td>{{$partner_contacts->partner_phonenumber}}</td>
                        <td>{{$partner_contacts->budget}}</td>
                        <td>{{$partner_contacts->created_at}}</td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/partner_contact/{{$partner_contacts->partner_id}}">ดู</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table hideBox2" style="font-family: Prompt; font-weight: 300;">
                <thead>
                <tr>

                    <th scope="col">สถานะ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">ชื่อบริษัทที่ติดต่อ</th>
                    <th scope="col">รายละเอียดบริษัท</th>

                </tr>
                </thead>
                <tbody>
                @foreach($partner_contact as $partner_contacts)
                    <tr>
                        <td style="text-align: center; font-size: 3vw; width: 5vw;"><img id="status_icon" src="/uploads/status/{{$partner_contacts->status}}.png" style="width: 100%;"></td>
                        <td style="font-size: 3vw;">{{$partner_contacts->title}}</td>
                        <td style="font-size: 3vw;">{{$partner_contacts->partner_name}}</td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/partner_contact/{{$partner_contacts->partner_id}}">ดู</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table hideBox3" style="font-family: Prompt; font-weight: 300;">
                <thead>
                <tr>

                    <th scope="col">สถานะ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">ชื่อบริษัทที่ติดต่อ</th>
                    <th scope="col">เบอร์ติดต่อบริษัท</th>
                    <th scope="col">งบที่ตั้งไว้</th>
                    <th scope="col">เวลาที่ทำรายการ</th>
                    <th scope="col">รายละเอียดบริษัท</th>

                </tr>
                </thead>
                <tbody>
                @foreach($partner_contact as $partner_contacts)
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/{{$partner_contacts->status}}.png" style="width: 100%;"></td>
                        <td>{{$partner_contacts->title}}</td>
                        <td>{{$partner_contacts->partner_name}}</td>
                        <td>{{$partner_contacts->partner_phonenumber}}</td>
                        <td>{{$partner_contacts->budget}}</td>
                        <td>{{$partner_contacts->created_at}}</td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/partner_contact/{{$partner_contacts->partner_id}}">ดู</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top: 5%;">
                <h3 style="font-family: Prompt; font-size: 18px;">หมายเหตุ : <span style="font-family: Prompt; font-size: 18px; font-weight: 300; opacity: 80%; ">สถานะ : รอดำเนินการ = รอการตอบกลับ, สถานะ : เรียบร้อย = ทำงานสำเร็จตามที่ลูกค้าต้องการ, สถานะ : ยอมรับและกำลังดำเนินการ = พาทเนอร์รับงานและกำลังดำเนินการ, สถานะ : ปฏิเสธ = ยกเลิกรายการนี้แล้ว,</span></h3>
            </div>
        </div>
    </div>
@endsection
