<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/mystyle.css">

    <title>Login</title>
  </head>

  <body>
  

  <div class="d-md-flex half">

   
    <div class="bg" style="background-image: url('assets/images/bg-login.jpg');"></div>
    <div class="contents">
      <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
                <div class="d-flex">
                    <div class="w-100">
                        <h3 class="ms-2 mt-3">Login</h3>
                    </div>
                    <div class="w-99">
                        <img src="assets/images/Logo.png"  alt="">
                    </div>
                </div>
              <form action="/login" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Your_email@gmail.com" id="email" autofocus required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                </div>
                

                <input type="submit" value="Login" class="btn btn-block btn-secondary">
                <div class="form-group mt-4">
					          <div class="w-100 text-center">
                        <p class="mb-1">Don't have an account? <a href="/register">Register Now</a></p>
                    </div>
				        </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
