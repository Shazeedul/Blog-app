<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="bg-primary">
    <section>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-dark" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
                    @if (Session::get('success'))
                      <div class="alert alert-success">
                          {{Session::get('success')}}
                      </div>
                    @endif
                    @if (Session::get('error'))
                      <div class="alert alert-danger">
                          {{Session::get('error')}}
                      </div>
                    @endif
                    <h2 class="fw-bold mb-2 text-uppercase text-white">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                  <form action="{{route('checkLogin')}}" method="POST">
                    @csrf
                    <div class="form-floating form-white mb-4">
                      <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" value="{{old('email')}}"/>
                      <span class="text-danger">@error('name'){{$message}}@enderror</span>
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
      
                    <div class="form-floating form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" value="{{old('password')}}"/>
                      <span class="text-danger">@error('email'){{$message}}@enderror</span>
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="{{ route('forget.password.get') }}">Forgot password?</a></p>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                  </form>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="{{route('login.facebook')}}" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="{{route('login.github')}}" class="text-white"><i class="fab fa-github fa-lg mx-4 px-2"></i></a>
                      <a href="{{route('login.google')}}" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>
      
                  <div>
                    <p class="text-white mb-0">Don't have an account? <a href="{{route('register')}}" class="text-white-50 fw-bold">Sign Up</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>