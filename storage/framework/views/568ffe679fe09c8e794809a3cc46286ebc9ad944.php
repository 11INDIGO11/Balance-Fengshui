<!DOCTYPE html>
<html>
<head>
    <title> Reply to User </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>
</head>
<body>
<br />
<br />
<br />
<div class="container box">
    <h3 align="center" style="font-family: 'FC Lamoon'; font-size: 48px;">คำแนะนำถึงผู้ใช้</h3><br/>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php endif; ?>
    <form method="post" action="<?php echo e(url('sendemail/send')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label style="font-family: 'FC Lamoon'; font-size: 26px;">ชื่อ</label>
            <input type="text" name="name" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label style="font-family: 'FC Lamoon'; font-size: 26px;">อีเมล์ที่ต้องการส่ง</label>
            <input type="text" name="email" class="form-control" value="" />
        </div>
        <div class="form-group">
            <label style="font-family: 'FC Lamoon'; font-size: 26px;">คำอธิบาย</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" class="btn btn-warning" value="Send" />
        </div>
    </form>

</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/send_email.blade.php ENDPATH**/ ?>