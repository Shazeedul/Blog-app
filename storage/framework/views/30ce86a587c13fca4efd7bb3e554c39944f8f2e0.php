<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../../css.css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('assets/website/fonts/icomoon/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/fonts/flaticon/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/website/css/style.css')); ?>">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="#" class="text-black h2 mb-0">Mini Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="<?php echo e(route('website')); ?>">Home</a></li>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('website.category', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <?php if(Route::has('login')): ?>
                      
                          <?php if(auth()->guard()->check()): ?>
                              <a href="<?php echo e(url('/dashboard')); ?>" class="">Dashboard</a>
                          <?php else: ?>
                              <a href="<?php echo e(route('login')); ?>" class="pr-4">Log in</a>

                              <?php if(Route::has('register')): ?>
                                  <a href="<?php echo e(route('register')); ?>" class="">Register</a>
                              <?php endif; ?>
                          <?php endif; ?>
                      
                  <?php endif; ?>
                </li>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    <?php echo $__env->yieldContent('content'); ?>
    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p><?php echo e($setting->description); ?> </p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="<?php echo e(route('website')); ?>">Home</a></li>
              <li><a href="<?php echo e(route('website.about')); ?>">About Us</a></li>
              <li><a href="<?php echo e(route('website.contact')); ?>">Contact US</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('website.category', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <?php if($setting->facebook): ?><a target="_blank" href="<?php echo e($setting->facebook); ?>"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a> <?php endif; ?>
                <?php if($setting->twitter): ?><a target="_blank" href="<?php echo e($setting->twitter); ?>"><span class="icon-twitter p-2"></span></a> <?php endif; ?>
                <?php if($setting->instagram): ?><a target="_blank" href="<?php echo e($setting->instagram); ?>"><span class="icon-instagram p-2"></span></a> <?php endif; ?>
                <?php if($setting->reddit): ?><a target="_blank" href="<?php echo e($setting->reddit); ?>"><span class="icon-rss p-2"></span></a> <?php endif; ?>
                <?php if($setting->email): ?><a target="_blank" href="<?php echo e($setting->email); ?>"><span class="icon-envelope p-2"></span></a> <?php endif; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <?php echo e($setting->copyright); ?> | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <div class="mb-0">Developed By Syed Shazeedul Islam on <a href="#">Laravel Blog Development </a></div>
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <script src="<?php echo e(asset('assets/website/js/jquery-3.3.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/jquery-ui.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/jquery.countdown.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/bootstrap-datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/website/js/aos.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/website/js/main.js')); ?>"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    
  </body>
</html><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/layouts/website.blade.php ENDPATH**/ ?>