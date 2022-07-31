
<?php $__env->startSection('content'); ?>    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?php echo e(asset('assets/website/images/img_4.jpg')); ?>');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class="">Contact Us</h1>
              <p class="lead mb-4 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, adipisci?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <form action="<?php echo e(route('website.contact')); ?>" method="post" class="p-5 bg-white">
              <?php echo csrf_field(); ?> 
              <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php if(Session::has('message-send')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('message-send')); ?></div>
              <?php endif; ?>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="fname">Name</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control" placeholder="Subject">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              

              <p class="mb-0 font-weight-bold">Phone</p>
              

              <p class="mb-0 font-weight-bold">Email Address</p>
              

            </div>

          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Downloads\Blog-app\resources\views/website/contact.blade.php ENDPATH**/ ?>