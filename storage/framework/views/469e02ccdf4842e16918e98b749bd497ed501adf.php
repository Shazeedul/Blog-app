
<?php $__env->startSection('content'); ?>
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Category</span>
            <h3><?php echo e($category->name); ?></h3>
            <?php if($category->description): ?>
              <p><?php echo e($category->description); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row">
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>"><img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3"><?php echo e($post->category->name); ?></span>

              <h2><a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>"><?php echo e($post->title); ?></a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left">
                  <img src="<?php if($post->user->image): ?><?php echo e(asset('storage/'.$post->user->image)); ?> <?php else: ?> <?php echo e(asset('assets/website/images/profile-avatar.png')); ?> <?php endif; ?>" alt="Image" class="img-fluid">
                </figure>
                <span class="d-inline-block mt-1">By <a href="#"><?php echo e($post->user->name); ?></a></span>
                <span>&nbsp;-&nbsp; <?php echo e($post->created_at->format('M d, Y')); ?></span>
              </div>
              
              <p> <?php echo Str::limit($post->description, 50); ?> </p>
              <p><a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>">Read More</a></p>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
             <?php echo e($posts->links()); ?>

          </div>
      </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/website/category.blade.php ENDPATH**/ ?>