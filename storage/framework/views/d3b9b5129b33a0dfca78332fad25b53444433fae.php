
<?php $__env->startSection('title', 'Post'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post List</h1>
                </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">Home</a></li>
                <li class="breadcrumb-item active">Post List</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div>


    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Post List</h3>
                            
                                <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">Create Post</a>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Author</th>
                                        <th style="width: 130px">Created Date</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($posts->count() > 0): ?>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($post->id); ?></td>
                                        <td>
                                            <div style="max-width: 70px; max-height:70px; overflow:hidden">
                                                <img src="<?php echo e(asset($post->image)); ?>" class="img-fluid img-rounded" alt="">
                                            </div>
                                        </td>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->category->name); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                                <span class="badge badge-primary"><?php echo e($tag->name); ?> </span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td><?php echo e($post->user->fname.' '.$post->user->lname); ?></td>
                                        <td style="width: 130px"><?php echo e($post->created_at->format('d M, Y')); ?></td>
                                        <td class="d-flex">
                                            <a href="<?php echo e(route('posts.show', [$post->id])); ?>" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a>
                                            <a href="<?php echo e(route('posts.edit', [$post->id])); ?>" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                            
                                            <form action="<?php echo e(route('posts.destroy', [$post->id])); ?>" class="mr-1" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?> 
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>   
                                    <tr>
                                        <td colspan="6">
                                            <h5 class="text-center">No posts found.</h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer d-flex justify-content-center">
                            <?php echo e($posts->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Main Content -->
    


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Downloads\Blog-app\resources\views/admin/post/index.blade.php ENDPATH**/ ?>