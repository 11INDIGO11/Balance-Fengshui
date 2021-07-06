
<?php $markdown = app('Parsedown'); ?>
<?php ($markdown->setSafeMode(true)); ?>

<?php if(isset($reply) && $reply === true): ?>
  <div id="comment-<?php echo e($comment->getKey()); ?>" class="media">
<?php else: ?>
  <li id="comment-<?php echo e($comment->getKey()); ?>" class="media">

<?php endif; ?>
      <img class="mr-3" src="/uploads/avatar/<?php echo e($comment->commenter->avatar ?? 'default.jpg'); ?>" alt="<?php echo e($comment->commenter->user_name ?? $comment->guest_name); ?> Avatar" style="width: 32px; height: 32px; border-radius: 50%;">


    <div class="media-body">
        <h5 class="mt-0 mb-1"><?php echo e($comment->commenter->user_name ?? $comment->guest_name); ?> <small class="text-muted">- <?php echo e($comment->created_at->diffForHumans()); ?></small></h5>
        <div style="white-space: pre-wrap;"><?php echo $markdown->line($comment->comment); ?></div>

        <div style="margin-top: 10px;">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reply-to-comment', $comment)): ?>
                <a class="w-25" type="button" data-toggle="modal" data-target="#reply-modal-<?php echo e($comment->getKey()); ?>" style="width: 100%; color: black; text-align: center; border-radius: 30px; margin-top: 8px; height: 35px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; padding-right: 15px; background-color: #F9C414;">ตอบกลับ</a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-comment', $comment)): ?>
                <a type="button" data-toggle="modal" data-target="#comment-modal-<?php echo e($comment->getKey()); ?>" class="btn-sm btn-link text-uppercase" style="padding-left: 0;">แก้ไข</a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-comment', $comment)): ?>
                <a href="<?php echo e(route('comments.destroy', $comment->getKey())); ?>" onclick="event.preventDefault();document.getElementById('comment-delete-form-<?php echo e($comment->getKey()); ?>').submit();" class="btn-sm btn-link text-danger text-uppercase">ลบ</a>
                <form id="comment-delete-form-<?php echo e($comment->getKey()); ?>" action="<?php echo e(route('comments.destroy', $comment->getKey())); ?>" method="POST" style="display: none;">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                </form>
            <?php endif; ?>
        </div>
        <hr>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-comment', $comment)): ?>
            <div class="modal fade" id="comment-modal-<?php echo e($comment->getKey()); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="<?php echo e(route('comments.update', $comment->getKey())); ?>">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Comment</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Update your message here:</label>
                                    <textarea required class="form-control" name="message" rows="3"><?php echo e($comment->comment); ?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="text-danger" data-dismiss="modal">ยกเลิก</a>
                                <button type="submit" class="btn">อัปเดต</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reply-to-comment', $comment)): ?>
            <div class="modal fade" id="reply-modal-<?php echo e($comment->getKey()); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="<?php echo e(route('comments.reply', $comment->getKey())); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="modal-header">
                                <h5 class="modal-title">ตอบกลับคอมเม้นต์</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">กรอกข้อความที่นี่ :</label>
                                    <textarea required class="form-control" name="message" rows="3"></textarea>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="text-danger" data-dismiss="modal">ยกเลิก</a>
                                <button type="submit" class="btn">ตอบกลับ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <br />

        
        <?php if($grouped_comments->has($comment->getKey())): ?>
            <?php $__currentLoopData = $grouped_comments[$comment->getKey()]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('comments::_comment', [
                    'comment' => $child,
                    'reply' => true,
                    'grouped_comments' => $grouped_comments
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>

<?php if(isset($reply) && $reply === true): ?>
  </div>
<?php else: ?>
  </li>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\fengshui_webapp\resources\views/vendor/comments/_comment.blade.php ENDPATH**/ ?>