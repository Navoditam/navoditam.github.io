<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="altbs.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans&family=Lato:wght@400&family=Nunito+Sans:wght@300&family=Open+Sans:wdth,wght@100,500&family=Oswald:wght@200;400&family=Playfair+Display:wght@500&family=Poppins:wght@400&family=Roboto&family=Roboto+Condensed:wght@700&family=Saira+Extra+Condensed:wght@700&display=swap" rel="stylesheet">

    <script>
      function showVCT(str) {
        if (str.length < 3) {
          document.getElementById("txtHint2").innerHTML = "";
          document.getElementById("vctCode").value = null;
          document.getElementById("subDist").value = null;
          document.getElementById("dist").value = null;
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              xmlresult = this.responseText.slice(0, -1);
      
              // Converting string to 2D array
              result2d = xmlresult.split("|").map(function(e) {
                return e.split(",")
              })
      
              // Converting 2D array to Object
              let output = result2d.map(([vctCode, vct, subdist, dist]) => ({vctCode, vct, subdist, dist}))
              let inputstr = "";
              var x = "";
              for (let key in output) {
                x = output[key];
                let y = "<option id=optionvalue data-vctCode="+x.vctCode+" value = '"+x.vct+"'>SubDist. - "+x.subdist+", Dist. - "+x.dist+"</option>";
                
                document.getElementById("vctCode").value = x.vctCode;
                document.getElementById("subDist").value = x.subdist;
                document.getElementById("dist").value = x.dist;
      
                inputstr+=y;
              }
              document.getElementById("txtHint2").innerHTML = inputstr;
            }
          };
      
          xmlhttp.open("GET","getlist.php?q="+str,true);
          xmlhttp.send();
        }      
      }
      
      </script>

  </head>

  <body>
        <div class="container-fluid sticky-top" style="background-color: rgb(0, 50, 100);">
            <div class="container-xxl">
                <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgb(0, 50, 100);">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                        <input class="form-control me-2 rounded-0" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary rounded-0" type="submit">Search</button>
                        </form>
                    </div>
                    </div>
                </nav>
            </div>
        </div>


    <div class="container-fluid p-0" style="min-height: 100vh;">

    <h1></h1>


    <div class="container-fluid rounded-0 p-0 my-4" style="max-width: 960px;">
      <div class="navbar m-0 rounded-0 container-fluid p-0 fs-2 fw-bold justify-content-center align-self-center border-0 text-light" style="min-height: 60px; background-color: steelblue">
        Student Profile
      </div>
      <div class="row p-0 m-0 border-0">
        <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-md navbar-light p-0 align-items-start alert alert-secondary rounded-0" style="background-color: lightblue;">
          <div class="container-fluid p-2 px-2">            
            <a class="navbar-brand p-0 m-0" href="#"></a>
            <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarSupportedContent" aria-controls="sidebarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container-fluid p-0" id="sidebarSupportedContent">       

              <div class="container-fluid p-0 mb-3 text-dark">
                <div class="navbar m-0 mt-3 rounded-0 container-fluid p-0 mb-2 fs-4 fw-bold justify-content-center align-self-center">
                  <div class="col-9 justify-content-center align-self-center text-center" >
                    <!-- Carousel Start Here -->
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="false">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="\partials\student.jpg" class="d-block w-100 border border-primary" alt="" onerror="this.onerror=null; this.src='/partials/Student-icon.svg'">
                          <div class="d-block text-light fs-6 p-1" style="background-color: steelblue;">
                            Ajay Singh
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="\partials\dad.jpg" class="d-block w-100 border border-primary" alt="" onerror="this.onerror=null; this.src='/partials/dad.png'">
                          <div class="d-block text-light fs-6 p-1" style="background-color: steelblue;">
                          Sh. Vijay Kumar
                          </div>
                        </div>
                        <div class="carousel-item align-text-bottom align-bottom m-0 p-0">
                          <img src="\partials\mom.jpg" class="d-block w-100 align-text-bottom m-0 p-0 border border-primary" alt="..." onerror="this.onerror=null; this.src='/partials/mom.png'">
                          <div class="fs-6 align-text-bottom p-1 m-0 d-block text-light" style="background-color: steelblue;">
                          Smt. Shweta Devi
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
                    </div>
                    <!-- End of Crousel -->
                  </div>
                </div>

                

                <div class="col-sm-12 text-center mb-2">
                  Aadhaar No. : <b>1234-5847-9685</b>
                </div>
                <div class="col-sm-12 text-center mb-2">
                  Student Name : <b>Ajay Singh</b>
                </div>
                <div class="col-sm-12 text-center mb-2">
                  Father's Name : <b>Sh. Vijay Kumar</b>
                </div>
                <div class="col-sm-12 text-center mb-2">
                  Mother's Name : <b>Smt. Shweta Devi</b>
                </div>
                <div class="col-sm-12 text-center mb-2">
                  Address : <b>VPO Dhiktana (Hisar)</b>
                </div>


              </div>
            </div>
          </div>

          <div class="container-fluid col-md-8 p-0 m-0 align-self-stretch">
            <form class="container-fluid rounded-0 p-0 m-0 text-dark align-self-stretch" style="background-color: white;">



              <div class="progress mx-4 mt-3 rounded-0">
                <div class="progress-bar bg-info border border-light" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"> <a class="nav-link text-light" href="pageone.html">Self</a></div>
                <div class="progress-bar bg-info border border-light" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><a class="nav-link text-light" href="pagetwo.html">Father</a></div>
                <div class="progress-bar bg-info border border-light" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><a class="nav-link text-light" href="pagethree.html">Mother</a></div>
                <div class="progress-bar bg-success border border-light" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><a class="nav-link text-light" href="pagefour.html">Address</a></div>
                <div class="progress-bar bg-info border border-light" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><a class="nav-link text-light" href="pagefive.html">Other</a></div>
              </div>

              

              <div class="container-fluid py-4">

              <div class="row">
                <div class="mb-3 col-sm-6">
                  <label for="fullname" class="form-label"><b>ADDRESS LINE 1</b></label>
                  <input type="text" class="form-control rounded-0" id="fullname" placeholder="Street Numer / House No." aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="fullname" class="form-label"><b>ADDRESS LINE 2</b></label>
                  <input type="text" class="form-control rounded-0" id="fullname" placeholder="Colony or Society or Pana" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="fullhname" class="form-label"><b>ADDRESS LINE 3</b></label>
                  <input type="text" class="form-control rounded-0" id="fullhname" placeholder="Landmark or nearby site" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="fullname" class="form-label"><b>STATE</b></label>
                  <input type="text" class="form-control rounded-0" id="fullname" placeholder="State" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="vctName" class="form-label"><b>VILLAGE/CITY/TOWN</b></label>
                  <input list="browsers" type="text" class="form-control rounded-0" id="vctName" placeholder="Village/City/Town" aria-describedby="emailHelp" onkeyup="showVCT(this.value)">
                  <datalist id="browsers">
                    <div id="txtHint2"></div>
                  </datalist>
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="vctCode" class="form-label"><b>VCT CODE</b></label>
                  <input type="text" class="form-control rounded-0" id="vctCode" placeholder="VCT Code" aria-describedby="emailHelp" disabled>
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="subDist" class="form-label"><b>SUB-DISTRICT</b></label>
                  <input type="text" class="form-control rounded-0" id="subDist" placeholder="Sub-district" aria-describedby="emailHelp" disabled>
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="dist" class="form-label"><b>DISTRICT</b></label>
                  <input type="text" class="form-control rounded-0" id="dist" placeholder="District" aria-describedby="emailHelp" disabled>
                </div>
                <div class="mb-3 col-sm-6">
                  <label for="fullname" class="form-label"><b>PIN CODE</b></label>
                  <input type="text" class="form-control rounded-0" id="fullname" placeholder="Postal Code" aria-describedby="emailHelp">
                </div>

              </div>
                <button type="submit" class="btn btn-dark rounded-0 me-1">Previous</button>
                <button type="submit" class="btn btn-primary rounded-0 me-1">Save & Exit</button>
                <button type="submit" class="btn btn-success rounded-0">Next</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
      </div>
    </div>
  </div>

    <footer class="" style="bottom: 0;">
      <div class="container-fluid p-1" style="background-color: rgb(234, 236, 238);">
        <div class="container-xl p-3" style="background-color: rgb(234, 236, 238);">
          <div class="row">
            <div class="col-6 container-fluid" style="min-width: 300px;">
              <div class="container-fluid "
              ><ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">?? All rights reserved</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-6 container-fluid" style="min-width: 300px;">
            <div class="container-fluid "
            ><ul class="nav justify-content-center">
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
          </div>
        </div>
      </div>
      </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    

  </body>
</html>