<?php $__env->startSection('title','Category'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4"> <div class="card mt-4">
    <div class="card-header"> <h4 class="mt-4">Edit Category</h4> </div>
        <div class="card-body">

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div><?php echo e(@errors); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

            <form action="<?php echo e(url('admin/update-category/'.$category->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="<?php echo e($category->slug); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description"  rows="5" class="form-control"><?php echo e($category->description); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" />
                </div>

                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" value="<?php echo e($category->meta_title); ?>" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" value="<?php echo e($category->meta_description); ?>" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="meta_keyword" rows="3" class="form-control"><?php echo e($category->meta_keyword); ?></textarea>
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label>Navbar Status</label>
                        <input type="checkbox" name="navbar_status" <?php echo e($category->navbar_status == '1' ? 'checked' : ''); ?> />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status" <?php echo e($category->status == '1' ? 'checked' : ''); ?> />
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog_ferisoft\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>