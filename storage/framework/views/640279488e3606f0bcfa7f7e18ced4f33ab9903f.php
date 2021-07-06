<?php $__env->startSection('content'); ?>

    <?php if(count($member)>0 && count($members)>0): ?>
        <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member1 => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
                <br>
                <br>

                <label type="text" name="m_duration_data"  class="form-control border-0 bg-transparent"  style=" margin-top: -20px;  font-size: 30px; font-family: 'Prompt'; font-weight: 300;" >ชื่อสมาชิก : <?php echo e($member[$member1]->m_name); ?> &nbsp; ความสัมพันธ์ : <?php echo e($member[$member1]->m_relationship); ?></label>

                <div class="row">
                    <div class="col-2 desktop" style="text-align: center;"><img src="<?php echo e(url('uploads/zodiac/'.$member[$member1]->id_zodiac.'.png')); ?>" class="rounded"  style="background-color: black; border-radius: 20px; width: 100%;"></div>
                    <div class="col-10 desktop">
                        <div class="card-body" style="width: 30rem; height: 100%; font-family: 'Prompt'; font-weight: 300;font-size: 18px; padding-right: 0;">
                            <h5 style="float: left;  font-size: 1.5vw; font-family: Prompt">&nbsp; ปี/เดือน/วัน :</h5>
                            <p style="font-size: 1.5vw;">&nbsp<?php echo e($member[$member1]->year_month_day); ?></p>
                            <h5 style="float: left;  font-size: 1.5vw; font-family: Prompt">&nbsp; เวลาเกิด :</h5>
                            <p style="font-family: 'Prompt'; font-weight: 300;font-size: 1.5vw;">&nbsp ช่วง<?php echo e($member[$member1]->duration); ?> </p>
                            <h5 style="float: left;  font-size: 1.5vw; font-family: Prompt">&nbsp; ปีนักษัตร :</h5>
                            <p style="font-family: 'Prompt'; font-weight: 300;font-size: 1.5vw;">&nbsp<?php echo e($member[$member1]->zodiac_data); ?></p>
                        </div>
                    </div>
                    <div class="col-12 mobile" style="text-align: center; margin-top: 15vw;"><img src="<?php echo e(url('uploads/zodiac/'.$member[$member1]->id_zodiac.'.png')); ?>" class="rounded"  style="background-color: black; border-radius: 20px; width: 60%;"></div>
                    <div class="col-12 mobile" style="margin-top: 10vw;">

                            <h5 style="float: left;  font-size: 4vw; font-family: Prompt">&nbsp; ปี/เดือน/วัน :</h5>
                            <p style="font-size: 4vw;">&nbsp<?php echo e($member[$member1]->year_month_day); ?></p>
                            <h5 style="float: left;  font-size: 4vw; font-family: Prompt">&nbsp; เวลาเกิด :</h5>
                            <p style="font-family: 'Prompt'; font-weight: 300;font-size: 4vw;">&nbsp ช่วง<?php echo e($member[$member1]->duration); ?> </p>
                            <h5 style="float: left;  font-size: 4vw; font-family: Prompt">&nbsp; ปีนักษัตร :</h5>
                            <p style="font-family: 'Prompt'; font-weight: 300;font-size: 4vw;">&nbsp<?php echo e($member[$member1]->zodiac_data); ?></p>

                    </div>
                </div>
                <br>
                <div class="row">
                    <table class="table" >
                        <thead>
                        <tr alt="Responsive" style="text-align: center;">
                            <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtxTf.png" class="img-thumbnail border-0"></th>
                            <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtEU8.png" class="img-thumbnail border-0"></th>
                            <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtQja.png" class="img-thumbnail border-0"></th>
                            <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjt5Bz.png" class="img-thumbnail border-0"></th>
                            <th scope="col"><img src="https://sv1.picz.in.th/images/2020/11/07/bjtUvq.png" class="img-thumbnail border-0"></th>
                        </tr>
                        </thead>

                        <tbody>
                        <br>
                        <br>
                        <tr>

                            <td class="elementVale"><?php echo e($member[$member1]->earth_element); ?></td>
                            <td class="elementVale"><?php echo e($member[$member1]->metal_element); ?></td>
                            <td class="elementVale"><?php echo e($member[$member1]->water_element); ?></td>
                            <td class="elementVale"><?php echo e($member[$member1]->wood_element); ?></td>
                            <td class="elementVale"><?php echo e($member[$member1]->fire_element); ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <a href="/member/<?php echo e($members[$member1]->id); ?>" ><button type="button" class="btn" style="font-family: 'Prompt'; border-radius: 500px; font-weight: 300;float: right;">ข้อมูลเพิ่มเติม</button></a>
                <a href="/birthcalculate/" ><button type="button" class="btn" style="font-family: 'Prompt'; border-radius: 500px; font-weight: 300;float: right; margin-right: 20px;">กลับไปหน้าคำนวณ</button></a>
        <br><br>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/member.blade.php ENDPATH**/ ?>