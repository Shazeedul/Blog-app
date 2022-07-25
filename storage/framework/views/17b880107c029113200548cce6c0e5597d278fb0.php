<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <section class="bg-primary">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-dark" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase text-white">Register</h2>
                    <p class="text-white-50 mb-5">Please enter your Name, Email and Password!</p>

                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                            <input type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">First name</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-floating">
                            <input type="text" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                        </div>
                    </div>
      
                    <div class="form-floating form-white mb-4">
                      <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
      
                    <div class="form-floating form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
                    
                    <div class="form-floating form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                      <label class="form-label" for="typePasswordX">Confirm Password</label>
                    </div>
      
                    
      
                    <button class="btn btn-floating-light btn-lg px-5 bg-primary btn-block" type="submit">Register</button>
      
                    <div class="d-flex justify-content-center text-center m-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                    <div>
                        <p class="text-white mb-0">Already Have a Account? <a href="#!" class="text-white-50 fw-bold">Sign In</a>
                        </p>
                    </div>
                  </div>
      
                  
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html><?php /**PATH G:\Web Development\Laravel\Blog-app\resources\views/auth/register.blade.php ENDPATH**/ ?>