<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="../partials/styles.css" />
  <link rel="stylesheet" href="../partials/bs.css" />
  <title>Project Shiksha</title>
</head>

<style>
  body {
    background-color: light;
  }

.a {
  position: relative;
  display : inline-block;
  border: 3px solid green;
}
.b {
  position: relative;
  display : inline-block;
  width : 30%;
  height : 100%;
  left: 0px;
  top : 0px;
  border: 3px solid blue;
  margin-top : 0;
}

.c {
  position: relative;
  display : inline-block;
  width : 60%;
  left: 8px;
  height : 100%;
  top : 0px;
  border: 3px solid red;

} 
</style>


<body>

  <?php

    include "navbar.php";
    require "../partials/_dbconnection.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $loginmail = $_POST['loginmail'];
      $password = $_POST['password'];


      $fullname = $username = $loginmail = $password = "";

      $insert = "INSERT INTO `users` (`fullname`, `username`, `loginmail`, `password`, `time`) VALUES ('$fullname', '$username', '$loginmail', '$password', current_timestamp())";
      $result = mysqli_query($connection, $insert);

      if(!$result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

      else{
          // echo "The record was not inserted successfully because of this error ---> "mysqli_error($connection)";

          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>      
          </div>';
      }
    }

  ?>

  <div class="jumbotron col-6">
    <aside class="b">
    <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
    </aside>
    <main class="c">
      this is main
    </main>
  </div>

  <div class="container my-4 mx-4">
    <div class="jumbotron col-sm-8 a">
      <aside class="b">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </aside>
      <main class="c">
        <h1>New Admission</h1>
        <hr class="my-4" />
        <h2>Student Details</h2>
        <hr class="my-4" />
        <form action="" method="post">
          <div class="mb-3">
            <label for="fullname" class="form-label"><b>Name</b></label>
            <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="emailHelp"
              placeholder="Please enter your name" />
          </div>
          <div class="mb-3">
            <label for="username" class="form-label"><b>Username</b></label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp"
              placeholder="Enter a username of your choice" />
          </div>
          <div class="mb-3">
            <label for="loginmail" class="form-label"><b>Email address</b></label>
            <input type="email" name="loginmail" class="form-control" id="loginmail" aria-describedby="emailHelp"
              placeholder="Enter your email address" />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else
            </div>
          </div>
          <div class="mb-3">
            <label for="accountpassword" class="form-label"><b>Password</b></label>
            <input type="password" name="password" class="form-control" id="accountpassword"
              placeholder="Enter a strong password" />
          </div>
          <div class="mb-3">
            <label for="accountpasswordverify" class="form-label"><b>Confirm Password</b></label>
            <input type="password" name="accountpasswordverify" class="form-control" id="accountpasswordverify"
              placeholder="Please re-enter password to confirm" />
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
            <label class="form-check-label" for="exampleCheck1">By signing up you agree with Shiksha terms and
              conditions</label>
          </div>
          <div class="container my-2">
            <button type="submit" class="btn btn-primary">Signup</button>
          </div>
          <hr class="my-4" />
          <div class="container my-4">
            <p>Already have a <a href="index.php">Shiksha.com</a> account. <a href="login.php">Login</a> Instead</p>
          </div>
        </form>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>