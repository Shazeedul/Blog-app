

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Edit Setting</li>
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
                            <h3 class="card-title">Edit Site Setting </h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <div class="card-body">
                                    <form action="<?php echo e(route('setting.update')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?> 
                                        <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label for="name">Site Name</label>
                                            <input type="name" name="name" value="<?php echo e($setting->name); ?>" class="form-control" placeholder="Enter name">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="facebook" name="facebook" value="<?php echo e($setting->facebook); ?>" class="form-control" placeholder="facebook url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="twitter" name="twitter" value="<?php echo e($setting->twitter); ?>" class="form-control" placeholder="twitter url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="instagram">Instagram</label>
                                                    <input type="instagram" name="instagram" value="<?php echo e($setting->instagram); ?>" class="form-control" placeholder="instagram url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="reddit">Reddit</label>
                                                    <input type="reddit" name="reddit" value="<?php echo e($setting->reddit); ?>" class="form-control" placeholder="reddit url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" value="<?php echo e($setting->email); ?>" class="form-control" placeholder="email url">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="copyright">Copyright</label>
                                                    <input type="copyright" name="copyright" value="<?php echo e($setting->copyright); ?>" class="form-control" placeholder="copyright">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Contact Phone Number</label>
                                                    <input type="text" name="phone" value="<?php echo e($setting->phone); ?>" class="form-control" placeholder="phone number">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="address">Location</label>
                                                    <textarea name="address" id="address" class="form-control" rows="1" placeholder="enter address"><?php echo e($setting->address); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="logo">Site Logo</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="site_logo" class="custom-file-input" id="logo">
                                                        <label class="custom-file-label" for="logo">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                                        <img src="<?php echo e(asset('storage/'.$setting->site_logo)); ?>" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Site Description</label>
                                            <textarea name="description" id="description" rows="3" class="form-control" placeholder="Enter description"><?php echo e($setting->description); ?></textarea>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Downloads\Blog-app\resources\views/admin/setting/edit.blade.php ENDPATH**/ ?>