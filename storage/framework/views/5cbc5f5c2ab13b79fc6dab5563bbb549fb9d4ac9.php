

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>">User list</a></li>
                    <li class="breadcrumb-item active">Edit User</li>
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
                            <h3 class="card-title">Edit User - <?php echo e($user->name); ?></h3>
                            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('PUT'); ?>
                                    <div class="card-body">
                                        <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="row">
                                            <div class="col-md-6 md-4">
                                                <div class="form-group">
                                                    <label for="fname">User first name</label>
                                                    <input type="name" name="fname" class="form-control" id="fname" placeholder="Enter first name" value="<?php echo e($user->fname); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 md-4">
                                                <div class="form-group">
                                                    <label for="lname">User last name</label>
                                                    <input type="name" name="lname" class="form-control" id="lname" placeholder="Enter last name" value="<?php echo e($user->lname); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">User email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo e($user->email); ?> ">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">User password <small>(Enter password if you want change.)</small></label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>