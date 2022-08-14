
<?php $__env->startSection('content'); ?>
<div class="site-section bg-light">
    <div class="container">
      <div class="row align-items-stretch retro-layout-2">
        <div class="col-md-4">
          <?php $__currentLoopData = $firstPosts2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>" class="h-entry mb-30 v-height gradient" style="background-image: url(<?php echo e(asset('storage/'.$post->image)); ?>);">
            
            <div class="text">
              <div class="post-categories mb-3">
                <span class="post-category bg-danger"><?php echo e($post->category->name); ?></span>
              </div>
              <h2><?php echo e($post->title); ?></h2>
              <span class="date"><?php echo e($post->created_at->format('M d, Y')); ?></span>
            </div>
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-4">
          <?php $__currentLoopData = $middlePost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>" class="h-entry img-5 h-100 gradient"
              style="background-image: url(<?php echo e(asset('storage/'.$post->image)); ?>);">
              <div class="text">
                  <div class="post-categories mb-3">
                      <span class="post-category bg-danger"><?php echo e($post->category->name); ?></span>
                  </div>
                  <h2><?php echo e($post->title); ?></h2>
                  <span class="date"><?php echo e($post->created_at->format('M d, Y')); ?></span>
              </div>
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-4">
          <?php $__currentLoopData = $lastPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>" class="h-entry mb-30 v-height gradient"
              style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');">
              <div class="text">
                  <div class="post-categories mb-3">
                    <span class="post-category bg-danger"><?php echo e($post->category->name); ?></span>
                  </div>
                  <h2><?php echo e($post->title); ?></h2>
                  <span class="date"><?php echo e($post->created_at->format('M d, Y')); ?></span>
              </div>
          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <h2>Recent Posts</h2>
        </div>
      </div>
      <div class="row">
        <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        <?php echo e($recentPosts->links()); ?>

        
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row align-items-stretch retro-layout">
            <?php $__currentLoopData = $lastFooterPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-5 order-md-2">
                <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>" class="hentry img-1 h-100 gradient"
                    style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');">
                    <span class="post-category text-white bg-danger"><?php echo e($post->category->name); ?></span>
                    <div class="text">
                        <h2><?php echo e($post->title); ?></h2>
                        <span class="date"><?php echo e($post->created_at->format('M d, Y')); ?></span>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-7">
            <?php $__currentLoopData = $firstFooterPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>"
                class="hentry img-2 v-height mb30 gradient"
                style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');">
                <span class="post-category text-white bg-success"><?php echo e($post->category->name); ?></span>
                <div class="text text-sm">
                    <h2><?php echo e($post->title); ?></h2>
                    <span class="date"><?php echo e($post->created_at->format('M d, Y')); ?></span>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="two-col d-block d-md-flex justify-content-between">
            <?php $__currentLoopData = $firstfooterPosts2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>"
                class="hentry v-height img-2 gradient" style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');">
                <span class="post-category text-white bg-primary"><?php echo e($post->category->name); ?></span>
                <div class="text text-sm">
                    <h2><?php echo e($post->title); ?></h2>
                    <span class="date"><?php echo e($post->created_at->format('M d, Y')); ?></span>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>  
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-lightx">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-5">
          <div class="subscribe-1 ">
            <h2>Subscribe to our newsletter</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
            <form action="#" class="d-flex">
              <input type="text" class="form-control" placeholder="Enter your email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/website/home.blade.php ENDPATH**/ ?>