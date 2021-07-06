<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
    .btn{
        width: 100%; !important;
        font-weight: 300; !important;

    }


</style>
<?php $__env->startSection('scripts'); ?>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded" >
                    <div class="card-body" style="font-family: 'Prompt Light';">
                        <h2 style="color: #F9C414; font-family: 'Prompt'; font-weight: 300;"><b><?php echo e($post->title); ?></b></h2>

                        <img src="<?php echo e(url('uploads/'.$post->file_name)); ?>" class="img-fluid" alt="...">
                        <br>
                        <br>

                        <h3 style="font-family: 'Prompt'; font-weight: 300;">เนื้อหา</h3>
                        <h5 style="font-family: 'Prompt'; font-weight: 300;">
                            <?php echo e($post->body); ?>

                        </h5>
                        <hr/>
                        <div>
                            <?php echo $__env->make('comments::components.comments', ['model' => $post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>














                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/show.blade.php ENDPATH**/ ?>