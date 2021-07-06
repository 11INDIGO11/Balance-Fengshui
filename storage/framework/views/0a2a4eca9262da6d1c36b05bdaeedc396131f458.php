<?php $__env->startSection('content'); ?>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="container"><a href="post/create" style="background-color: #F9C414; font-family: 'Prompt'; font-weight: 300;"><button type="button" class="btn btn-lg " style="
        background-color: #F9C414; float: right; width: 15rem; font-family: 'Prompt'; font-weight: 300;">ตั้งโพสต์</button></a></div>
    <br>
    <br>
        <div class="container">


            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <br>

                <div class="col">

            <div class="card m-2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 20rem;">
                <img src="<?php echo e(url('uploads/'.$post->file_name)); ?>" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Prompt'; font-weight: 300;">ชื่อ :<?php echo e($post->title); ?></h5>
                    <p class="card-text" style="font-family: 'Prompt'; font-weight: 300; text-overflow: ellipsis; overflow: hidden; ">คำอธิบาย :<?php echo e($post->body); ?></p>
                    <a href="<?php echo e(route('post.show', $post->id)); ?>" class="btn" style="font-family: 'Prompt'; font-weight: 300">แสดง</a>
                </div>

            </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
    </body>

























<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/index.blade.php ENDPATH**/ ?>