

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">View Message</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('contact.index')); ?>">Message list</a></li>
                    <li class="breadcrumb-item active">View Message</li>
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
                            <h3 class="card-title">View Message</h3>
                            <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-primary">Go Back to Message List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-pimary">
                            <tbody>
                                <tr>
                                    <th style="width: 200px">Name</th>
                                    <td><?php echo e($message->name); ?></td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Email</th>
                                    <td><?php echo e($message->email); ?></td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Subject</th>
                                    <td><?php echo e($message->subject); ?></td>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Message</th>
                                    <td><?php echo e($message->message); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/admin/contact/show.blade.php ENDPATH**/ ?>