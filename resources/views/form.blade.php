<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laraction</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <h1 class="text-center"><u> Registration Form </u></h1>
    <form action="{{url('/')}}/register" method="POST" >
      @csrf
      <div class="container">        
        <div class="row ">
          <div class="col-6">
            <div class="form-group">
              <label for="">Name</label>
              <input
                type="text"
                name="name"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="HelpId"
              />            
            <span class="text-danger">
              @error('name')
                {{$message}}
              @enderror
            </span>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input
                type="email"
                name="email"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="HelpId"
              />
              <span class="text-danger">
              @error('email')
                {{$message}}
              @enderror
            </span>
            </div>
            <div class="form-group">
              <label for="">Phone Number</label>
              <input
                type="phone"
                name="phone"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="HelpId"
              />
              <span class="text-danger">
              @error('phone')
                {{$message}}
              @enderror
            </span>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input
                type="password"
                name="pass"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="HelpId"
              />
              <span class="text-danger">
              @error('pass')
                {{$message}}
              @enderror
            </span>
            </div>
          </div>
          <div class="col-6">
            <h2 class="text-center">Already a user?</h2>
            <a href="/login" class="btn btn-primary">Login</a href="">
          </div>
        </div>
        <button  type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
  </body>
</html>
