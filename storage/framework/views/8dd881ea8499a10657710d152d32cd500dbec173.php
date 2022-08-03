

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('posts.index')); ?>">Post list</a></li>
                    <li class="breadcrumb-item active">Edit Post</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Edit Post - <?php echo e($post->name); ?></h3>
                            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Go Back to Post List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="<?php echo e(route('posts.update', [$post->id])); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?> 
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label for="title">Post title</label>
                                            <input type="name" name="title" value="<?php echo e($post->title); ?>" class="form-control" placeholder="Enter title">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Post Category</label>
                                            
                                            <select name="category" id="category" class="form-control">
                                                <option value="" style="display: none" selected>Select Category</option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($c->id); ?>" <?php if($post->category_id == $c->id): ?> selected <?php endif; ?>> <?php echo e($c->name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="image">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="<?php echo e(asset('storage/'.$post->image)); ?>" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Post Tags</label>
                                            <div class=" d-flex flex-wrap">
                                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                    <input class="custom-control-input" name="tags[]" type="checkbox" id="tag<?php echo e($tag->id); ?>" value="<?php echo e($tag->id); ?>"
                                                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($tag->id == $t->id): ?> checked <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    >
                                                    <label for="tag<?php echo e($tag->id); ?>" class="custom-control-label"><?php echo e($tag->name); ?></label>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Enter description"><?php echo e($post->description); ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/summernote/summernote-bs4.min.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/admin/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 300
        });
        $(document).ready(function() {
            bsCustomFileInput.init()
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>