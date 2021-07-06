<?php $__env->startSection('content'); ?>
    <div class="container">
        <br>

        <h1>Edit</h1>
        <form method="post" action="<?php echo e(url('/todo/'.$todo->id)); ?>">
            <?php echo e(@csrf_field()); ?>

            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo e($todo->title); ?>">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" name="content" class="form-control" value="<?php echo e($todo->content); ?>">
            </div>
            <div class="form-group">
                <label>Due</label>
                <input type="date" name="due" class="form-control" value="<?php echo e($todo->due); ?>">
            </div>
            <div class="form-group">
                <label>Like</label>
                <input type="number" class="form-control" name="scoreView" value="<?php echo e($todo->score_view); ?>" id="postScoreView">
            </div>
            <button type="submit">submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/reply_edit.blade.php ENDPATH**/ ?>