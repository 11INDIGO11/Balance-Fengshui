<?php $__env->startSection('content'); ?>

    <div class="container">
        <div style="width: 5px; height: 35px;background-color: #F9C414; margin-top:20px; float: left;"></div>
        &nbsp<label class="topicText">รายการที่ส่งคำขอ</label>
    </div>

    <div class="container">
        <?php if(count($partner_contact)>0): ?>
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
                <?php $__currentLoopData = $partner_contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner_contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/<?php echo e($partner_contacts->status); ?>.png" style="width: 100%;"></td>
                        <td><?php echo e($partner_contacts->status); ?></td>
                        <td><?php echo e($partner_contacts->title); ?></td>
                        <td><?php echo e($partner_contacts->partner_name); ?></td>
                        <td><?php echo e($partner_contacts->partner_phonenumber); ?></td>
                        <td><?php echo e($partner_contacts->budget); ?></td>
                        <td><?php echo e($partner_contacts->created_at); ?></td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/partner_contact/<?php echo e($partner_contacts->partner_id); ?>">ดู</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $partner_contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner_contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center; font-size: 3vw; width: 5vw;"><img id="status_icon" src="/uploads/status/<?php echo e($partner_contacts->status); ?>.png" style="width: 100%;"></td>
                        <td style="font-size: 3vw;"><?php echo e($partner_contacts->title); ?></td>
                        <td style="font-size: 3vw;"><?php echo e($partner_contacts->partner_name); ?></td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/partner_contact/<?php echo e($partner_contacts->partner_id); ?>">ดู</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $partner_contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner_contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center; width: 5vw;"><img id="status_icon" src="/uploads/status/<?php echo e($partner_contacts->status); ?>.png" style="width: 100%;"></td>
                        <td><?php echo e($partner_contacts->title); ?></td>
                        <td><?php echo e($partner_contacts->partner_name); ?></td>
                        <td><?php echo e($partner_contacts->partner_phonenumber); ?></td>
                        <td><?php echo e($partner_contacts->budget); ?></td>
                        <td><?php echo e($partner_contacts->created_at); ?></td>
                        <td><a class="btn" style="background-color: #F9C414; font-family: Prompt; font-weight: 300;" href="/partner_contact/<?php echo e($partner_contacts->partner_id); ?>">ดู</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>


        <?php endif; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top: 5%;">
                <h3 style="font-family: Prompt; font-size: 18px;">หมายเหตุ : <span style="font-family: Prompt; font-size: 18px; font-weight: 300; opacity: 80%; ">สถานะ : รอดำเนินการ = รอการตอบกลับ, สถานะ : เรียบร้อย = ทำงานสำเร็จตามที่ลูกค้าต้องการ, สถานะ : ยอมรับและกำลังดำเนินการ = พาทเนอร์รับงานและกำลังดำเนินการ, สถานะ : ปฏิเสธ = ยกเลิกรายการนี้แล้ว,</span></h3>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/contact_list_foruser.blade.php ENDPATH**/ ?>