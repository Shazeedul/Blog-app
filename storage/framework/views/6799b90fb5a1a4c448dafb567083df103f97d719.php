

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">User Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>">User list</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
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
                            <h3 class="card-title">User Profile</h3>
                            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-primary">Go Back to User List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <form action="<?php echo e(route('user.profile.update')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
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
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo e($user->email); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">User password<small class="text-info">(Enter password if you want change.)</small></label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="image">User image</label>
                                                        <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">User description</label>
                                                    <textarea name="description" id="description" rows="5" class="form-control" placeholder="Write your profile description"><?php echo e($user->description); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div style="height: 200px; width: 200px; overflow:hidden;" class="m-auto">
                                            <img src="<?php echo e(asset('storage/'.$user->image)); ?>" alt="" class="img-fluid rounded-circle img-rounded">
                                        </div>
                                        <div class="mt-2">
                                            <h5><?php echo e($user->fname.' '.$user->lname); ?></h5>
                                            <p> <?php echo e($user->email); ?> </p>
                                        </div>
                                    </div>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Downloads\Blog-app\resources\views/admin/user/profile.blade.php ENDPATH**/ ?>