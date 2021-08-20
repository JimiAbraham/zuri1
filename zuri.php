<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zuri Stage 2 to 3</title>

<meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />

</head>


<body>

 <?php

$time = date('H');





if ($time < 11){

    $greet = "Good Morning";

}elseif( $time > 11 and $time < 15 ){
    $greet = "Good Afternoon";
}else{
    $greet = "Good evening";
}
            ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="title" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="English" />
  <link rel="shortcut icon" href="https://ibb.co/HV7gnXj" />
  <title>Resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<body class="bg-light">
  <div class="card bg-white border-0 mb-5 shadow-sm">
    <div class="card-body d-flex align-items-center justify-content-start p-5 flex-sm-column flex-column flex-md-row">
      <img src="zuri.png" alt="profile" width="200" />
      <div class="
            d-flex
            flex-column
            align-items-center
            align-items-sm-center
            align-items-md-start
            justify-content
            between
            ms-0
            ms-md-4
            mb-sm-5
            mb-5
            mb-md-0
          ">
        <h1 class="display-4 fw-bold mb-0">Adesokan Jimi</h1>
        <p class="fs-3 fw-normal">Junior Developer</p>
        <div class="d-flex align-items-center justify-content-between">
        <a href="https://github.com/JimiAbraham">  <button class="btn btn-dark rounded-circle fs-4 p-0" style="height: 40px; width: 40px;">
            <i class="bi bi-github"></i></a>
          </button>
          
          <a href="https://twitter.com/JimiAbraham3"><button class="btn btn-danger rounded-circle ms-2 fs-4 p-0" style="height: 40px; width: 40px;">
            <i class="bi bi-twitter"></i>
          </button></a>
       
        </div>
      </div>
      <div class="flex-fill d-flex align-items-center justify-content-center justify-content-md-end">
        <button class="btn btn-primary btn-lg">
          <i class="bi bi-person-lines-fill me-3"></i>Contact Me
        </button>
      </div>
    </div>
  </div>

  <div class="container h-100">
    <div class="row pb-5">
      <div class="col-12 col-lg-8 overflow-auto">
        <div class="card rounded border-0 mb-3 shadow-sm p-3">
          <div class="card-body">
            <h2 class="card-title fs-1 mb-5 fw-bold">About Me</h2>
            <p class="card-text">
              I am a young, passionate, enthusaistic young man, thriving in medical field as an optometrist and in the tech field as a junior developer, Back end (PHP).

              <br>

              All I want to do is to make big influence in the eye care field leveraging on tech knowledge to make the world a better place and also make some good gold plates into the bag ( aka secure the bag).
            </p>
          </div>
        </div>

        <div class="card border-0 rounded shadow-sm mb-3 p-3">
          <div class="card-body">
            <h2 class="card-title mb-5 fs-1 fw-bold">Projects</h2>
            <div>
              <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 mb-auto">
                  <img src="https://raw.githubusercontent.com/neeraj15022001/bootstrap-resume/master/logo.png" alt="logo" class="img-fluid bg-secondary rounded" />
                </div>
                <div class="col-md-8">
                  <p class="fs-2 fw-bolder text-dark">Roomie</p>
                  <p>
                    Roomie is a paltform where studets can easily find a rooomate in thier school and other related services such as reading partner, praying partner, and someone to have fun with.
                  </p>
                  <a href="http://remmda.com/roomie3/" class="
                        stretched-link
                        text-capitalize text-decoration-none
                      "><i class="bi bi-link-45deg me-1"></i>Find out more</a>
                </div>
                <hr class="my-4 bg-secondary" />


              </div>

               <div class="row">
                <div class="col-md-4 mb-4 mb-md-0 mb-auto">
                  <img src="https://raw.githubusercontent.com/neeraj15022001/bootstrap-resume/master/logo.png" alt="logo" class="img-fluid bg-secondary rounded" />
                </div>
                <div class="col-md-8">
                  <p class="fs-2 fw-bolder text-dark">Remmda</p>
                  <p>
                    Remmda is a platform where organisations and clinics can automatically send birthday messages and reminders for next appointment.
                  </p>
                  <a href="http://remmda.com" class="
                        stretched-link
                        text-capitalize text-decoration-none
                      "><i class="bi bi-link-45deg me-1"></i>Find out more</a>
                </div>
                <hr class="my-4 bg-secondary" />

                
              </div>
            </div>
          </div>
        </div>

       
      </div>
      <div class="col-0 col-lg-4 overflow-auto">
        <div class="card border-0 rounded shadow-sm mb-3 p-3">
          <div class="card-body">
            <div class="
                  d-flex
                  flex-column
                  align-items-start
                  justify-content-between
                ">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <i class="bi bi-geo-alt-fill text-danger"></i>
                <span class="ms-2">Ilorin,Nigeria</span>
              </div>
              <div class="d-flex align-items-center justify-content-center mb-2">
                <i class="bi bi-envelope-fill text-primary"></i>
                <a href="mailto:adesokanjimmy@gmail.com" class="ms-2 text-decoration-none text-dark">adesokanjimmy@gmail.com</a>
              </div>
              <div class="d-flex align-items-center justify-content-center mb-2">
                <i class="bi bi-telephone-fill text-success"></i>
                <a href="#" class="ms-2 text-decoration-none text-dark">07061050176</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card border-0 rounded shadow-sm mb-3 p-3">
          <div class="card-body">
            <h2 class="card-title fs-3 fw-bold mb-4">Testimonial</h2>
            <div class="mb-5">
              <div>
                <div class="border-start border-5 border-primary ps-4">
                  <p>
                    Did a  great job at a  - <a href="http://campuschef.com.ng/nosa">drug reminder software app</a>
                  </p>
                </div>
                <div class="ps-4 border-start border-5 border-white">
                  <p class="mb-0 fw-bolder text-secondary">Jimi Abrahm</p>
                  <p class="text-muted">Developer, Drug reminder software</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card border-0 rounded shadow-sm mb-3 p-3">
          <div class="card-body">
            <h2 class="card-title fs-3 fw-bold mb-4">Education</h2>
            <div class="d-flex align-items-center justify-content-start mb-3">
              <div class="d-flex align-items-center justify-content-center">
                <i class="m-0 p-0 bi bi-building"></i>
              </div>
              <div class="
                    d-flex
                    flex-column
                    align-items-start
                    justify-content-center
                    ms-3
                  ">
                <p class="fw-bold text-secondary mb-0">Zuri Internship</p>
                <p class="text-muted">BE (2020 - Current)</p>

                 <p class="fw-bold text-secondary mb-0">University of Ilorin, Department of Optometry and vision Science.</p>
                <p class="text-muted">BE (2015 - Current)</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="card border-0 rounded shadow-sm p-3">
          <div class="card-body">
            <h2 class="card-title fs-3 fw-bold mb-4">Languages</h2>
            <div class="
                  d-flex
                  flex-column
                  align-items-start
                  justify-content-center
                  mb-3
                ">
             
              <p class="text-muted mb-1">
                <span class="fw-bold text-secondary">PHP: </span>Proficient
              </p>
              <div class="
                    d-flex
                    align-items-center
                    justify-content-center
                    text-warning
                  ">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill ms-1"></i>
                <i class="bi bi-star-fill ms-1"></i>
                <i class="bi bi-star-fill ms-1"></i>
                <i class="bi bi-star-fill ms-1"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
</body>
</html>