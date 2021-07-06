<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="display-comment" style="font-family: 'Prompt'; font-weight: 300;">
        <img src="/uploads/avatar/<?php echo e($comment->user->avatar); ?>" style="width: 32px; height: 32px; border-radius: 50%;">
        <strong><?php echo e($comment->user->user_name); ?></strong>
        <p><?php echo e($comment->body); ?></p>
        <a href="" id="reply"></a>
        <form method="post" action="<?php echo e(route('reply.add')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group" style="font-family: 'Prompt'; font-weight: 300;">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="post_id" value="<?php echo e($post_id); ?>" />
                <input type="hidden" name="comment_id" value="<?php echo e($comment->id); ?>" />
            </div>
            <div class="form-group" style="text-align: right;">
                <input style="font-family: 'Prompt'; font-weight: 300;" type="submit" class="btn" value="ส่ง" />
            </div>
        </form>
        <?php echo $__env->make('partials\comment_replies', ['comments' => $comment->replies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/partials/comment_replies.blade.php ENDPATH**/ ?>