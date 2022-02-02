<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="../Archieve\partials\altbs.css"/>
    <link rel="stylesheet" href="../partials/styles.css"/>
    
  <style>

    body{
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%
    }
  </style>
    

  <title>Project Shiksha</title>
  </head>

  <body>
   
  <div class="row my-4 justify-content-end mx-4">
      <div class="jumbotron col-sm-4 py-6 backgroundm">
        <h1>Login to <b><a href="index.php">Shiksha</a></b></h1>
        <hr class="my-4" />
        <form>
          <div class="mb-3">
            <label for="user_name" class="form-label"><b>Username/Email Address</b></label>
            <input
              type="email"
              class="form-control"
              id="user_name"
              aria-describedby="emailHelp"
              placeholder="Enter your username or email address"
            />
          <div class="mb-3">
            <label for="accountpassword" class="form-label"
              ><b>Password</b></label
            >
            <input
              type="password"
              class="form-control"
              id="accountpassword"
              placeholder="Enter your password"
            />
            </div>
          <div class="mb-3 form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            />
            <label class="form-check-label" for="exampleCheck1"
              >Keep me logged in</label
            >
          </div>
          <div class="container my-2">
            <button type="submit" class="btn btn-primary">Log in</button>
          </div>
          <hr class="my-4" />
          <div class="container my-4">
            <p>Don't have <a href="index.php">Shiksha.com</a> account. <a href="signup.php">Create a new account</a></p>
          </div>
        </form>
      </div> 
    </div>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
