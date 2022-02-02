<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="partials/styles.css" />
    <title>Project Shiksha</title>
  </head>

  <body>
   
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="partials/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="partials/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="partials/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <div class="container accountform me-0 my-4">
      <div class="jumbotron">
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
            <p>Don't have <a href="index.php">Shiksha.com</a> account. Create a <a href="signup.php">New account</a></p>
          </div>
        </form>
      </div> 
    </div>

</div>


  <div class="container accountform me-0 my-4">
      <div class="jumbotron">
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
            <p>Don't have <a href="index.php">Shiksha.com</a> account. Create a <a href="signup.php">New account</a></p>
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
