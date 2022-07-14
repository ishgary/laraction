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
    <form action="" method="post" >
      <div class="container">
        <h1 class="text-center"><u> Registration Form </u></h1>
        <div class="row p-20">
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
          </div>
          <div class="col-6">
            <div class="text-center">Already a user?</div>
            <div class="btn btn-primary">Login</div>
          </div>
        </div>
        <div class="btn btn-primary">Register</div>
      </div>
    </form>
  </body>
</html>
