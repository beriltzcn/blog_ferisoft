<?php $__env->startSection('title','Edit Post'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Posts
                <a href="<?php echo e(url('admin/posts')); ?>" class="btn btn-danger float-end">BACK</a>
            </h4>
        </div>
        <div class="card-body">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
            <form action="<?php echo e(url('admin/update-post/'.$post->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" required class="form-control">
                    <option value="">Select Category</option>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($catitem->id); ?>" <?php echo e($post->category_id == $catitem->id ? 'selected':''); ?>>
                        <?php echo e($catitem->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" value="<?php echo e($post->name); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="<?php echo e($post->slug); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="slug" class="form-control" rows="4"><?php echo e($post->description); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Link</label>
                    <input type="text" name="yt_iframe" value="<?php echo e($post->yt_iframe); ?>" class="form-control"/>
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="<?php echo e($post->meta_title); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="3"><?php echo e($post->meta_description); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" class="form-control" rows="3"><?php echo e($post->meta_keyword); ?></textarea>
                </div>
                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status"/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update Post</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_ferisoft\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>