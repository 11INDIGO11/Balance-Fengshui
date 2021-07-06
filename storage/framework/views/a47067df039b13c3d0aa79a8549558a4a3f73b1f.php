<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 style="font-family: 'FC Lamoon';font-size: 64px;">แบบคำขอคำแนะนำ</h1>
        <form method="post" action="<?php echo e(url('/todo')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label style="font-family: 'FC Lamoon';font-size: 24px;">ชื่อ</label>
                <input type="text" name="title" class="form-control" value="<?php echo e(""); ?>"
                style="font-family: 'FC Lamoon';font-size: 24px;">
            </div>
            <div class="form-group">
                <label style="font-family: 'FC Lamoon';font-size: 24px;">เนื้อหา</label>
                <input type="text" name="content" class="form-control" value="<?php echo e(old('content')); ?>">
            </div>
            <div class="form-group">
                <label style="font-family: 'FC Lamoon';font-size: 24px;">วันที่ส่งคำขอ</label>
                <input type="date" name="due" class="form-control" value="<?php echo e(old('due')); ?>">
            </div>
            <div class="form-group" hidden>
                <label>Like</label>
                <input type="number" name="score_view" class="form-control" value="<?php echo e(1); ?>">
            </div>
            <div class="form-group">
                <label style="font-family: 'FC Lamoon';font-size: 24px;">File</label>
                <input type="file" name="file" class="form-control" >
            </div>
            <br>
            <button class="btn" style="background-color: #F9C414; color: black; float: right;" type="submit">submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/reply.blade.php ENDPATH**/ ?>