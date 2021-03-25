<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row content">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ ('img/img.png') }}" class="img">
            <div class="card-header"><h5 class="text-center">LOGIN</h5></div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" name="checkbox" class="custom-control-input" id="customControlCheckbox">
                  <label class="custom-control-label" for="customControlCheckbox">Remember me</label>
                </div>
                <div class="form-group">
                  <input type="submit" name="" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  {{-- <body>
    <div class="container">
        <div class="row content">
            <div class="col-md-4 mb-3">
    </div>
      <div class="col-md-6">
        <h3 class="login-text mb-3"> Login </h3>
        <form>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group form-check">
            <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
            <label class="form-check-label" for="checkox">Remember Me</label>
            </div>
            <button class="btn btn-class">Login</button>
        </form>       
    </div>
    </div>
    </div> --}}
     


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>