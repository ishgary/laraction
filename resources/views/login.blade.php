<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <form action="post">
        <h1 class="text-center"><u> Login Form </u></h1>
        <div class="container">
            <div class="form-group">
                <label for="">Email</label>
                <input
                  type="text"
                  name="email"
                  id=""
                  class="form-control"
                  placeholder=""
                  aria-describedby="HelpId"
                />
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
            </div>
            <div class="btn btn-primary">Login</div>
        </div>
    </form>
    <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="text-left">Not registered yet?</div>
          </div>
          <div class="col-6">
            <a href="#">Register here!</a>
          </div>
        </div>
      </div>
  </body>
</html>