<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Home Page</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='CSSfile.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="FirstPart">
    <!-- Header -->
    <div class="container">
      <header class="d-flex justify-content-md-between py-2 mb-4 ">
        <img src="../Logs/Logo.png" class="text-start" alt="Logo">

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 mt-3">
          <li><a href="#" class="nav-link px-2 link-secondary">Acasa</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Noutati</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Servicii</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Contacte</a></li>
        </ul>

        <div class="col-md-3 mt-3 text-end">
          <button type="button" class="btn btn-outline-light btn-sm me-2"><img
              src="../Logs/2560px-Flag_of_Romania 1.png" alt="lng" class="img-fluid"></button>
          <button type="button" class="btn btn-light">Programeaza-te</button>
        </div>
      </header>
    </div>
    <!-- END Header -->

    <!-- Intro -->
    <div class="container">
      <div class="row d-flex">

        <div class="col align-self-center">
          <div class="Main">
            <h1 class="titlu">Ceva inspirational despre masaj</h1>
            <p class="descriere">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia lobortis
              ullamcorper. Nam
              congue varius elit, non volutpat lectus euismod nec. Aliquam molestie tincidunt est. Donec dignissim a
              lacus ac bibendum.
            </p>
            <button type="button" class="btn btn-light mt-3">Consultatie Gratuita!</button>
          </div>
        </div>

        <div class="col mb-2">
          <img src="../Logs/Ellipse 1.png" class="text-start" alt="Img">
        </div>

      </div>
    </div>
    <!-- END Intro -->

    <!-- Carusel Oferte -->
    <div class="container">
      <div class="d-flex mt-4 p-4 justify-content-center">
        <div class="col-md-8">

          <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">

            <div class="carousel-inner border rounded-3">


              <div class="carousel-item active">
                <div class="d-flex justify-content-around">
                  <div class="col-8">
                    <div class="single-box mt-4">
                      <div class="row">
                        <div class="col-5">
                          <div class="time-logo"><img class="rounded" src="../Logs/time-svgrepo-com 1.png"> 1.5h</div>
                        </div>
                        <div class="col">
                          <h2>First Offer</h2>
                        </div>
                        <div class="col-1 justify-content-end">
                          <h3 class="discount">-10%</h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-5">
                          <div class="img-area"><img class="rounded" src="../Logs/image 1.png" alt="Img"></div>
                        </div>
                        <div class="col mb-3">
                          <div class="img-text">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quibusdam hic iure fugit
                              qui,
                              porro quia nam odit? Necessitatibus doloribus natus maxime ex alias aut in. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="d-flex justify-content-around">
                  <div class="col-8">
                    <div class="single-box mt-4">
                      <div class="row">
                        <div class="col-5">
                          <div class="time-logo"><img class="rounded" src="../Logs/time-svgrepo-com 1.png"> 1.0h</div>
                        </div>
                        <div class="col">
                          <h2>Second Offer</h2>
                        </div>
                        <div class="col-1 ajustify-contetnt-end ">
                          <h3 class="discount">-15%</h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-5">
                          <div class="img-area"><img class="rounded" src="../Logs/image 1.png" alt="Img"></div>
                        </div>
                        <div class="col mb-3">
                          <div class="img-text">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam quibusdam hic iure fugit
                              qui,
                              porro quia nam odit? Necessitatibus doloribus natus maxime ex alias aut in. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- END Carusel Oferte -->
  </div>
  <!-- Info Part -->
  <div class="InfoPart">

    <h2 class="h2 ms-5 ps-5 pb-4"><strong>De ce este nevoie de masaj?</strong></h2>

    <div class="d-flex justify-content-center">
      <div class="col-1.5 me-2">
        <div class="img-area"><img src="../Logs/ImgInima.png" alt=""></div>
      </div>
      <div class="col-2 ml-2">
        <div class="title-are">
          <h3>Loren Ipsum</h3>
        </div>
        <div class="descriptionArea">
          <p>Sed pretium ipsum et nisi pellentesque, nec consequat</p>
        </div>
      </div>

      <div class="col-1.5 me-2">
        <div class="img-area"><img src="../Logs/ImgApple.png" alt=""></div>
      </div>
      <div class="col-2 ml-2">
        <div class="title-are">
          <h3>Loren Ipsum</h3>
        </div>
        <div class="descriptionArea">
          <p>Sed pretium ipsum et nisi pellentesque, nec consequat</p>
        </div>
      </div>

      <div class="col-1.5 me-2">
        <div class="img-area"><img src="../Logs/ImgFamily.png" alt=""></div>
      </div>
      <div class="col-2 ml-2">
        <div class="title-are">
          <h3>Loren Ipsum</h3>
        </div>
        <div class="descriptionArea">
          <p>Sed pretium ipsum et nisi pellentesque, nec consequat</p>
        </div>
      </div>
    </div>

  </div>
  <!-- END Info Part -->

  <!-- Our Team Part -->

  <div class="OurTeam">

    <h2 class="h2 ms-5 ps-5 pb-4"><strong>Echipa Noastra</strong></h2>

    <div class="d-flex justify-content-end">

      <div class="col-3">
        <div class="img-area">
          <img src="../Logs/OurTeam/doc1.png">
          <div class="nameArea">
            <h4><strong>Lorem Ipsum</strong></h4>
            <h6>Medic kinetoterapeut</h6>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="img-area">
          <img src="../Logs/OurTeam/doc2.png">
          <div class="nameArea">
            <h4><strong>Lorem Ipsum</strong></h4>
            <h6>Medic kinetoterapeut</h6>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="img-area">
          <img src="../Logs/OurTeam/doc3.png">
          <div class="nameArea">
            <h4><strong>Lorem Ipsum</strong></h4>
            <h6>Medic kinetoterapeut</h6>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="img-area">
          <img src="../Logs/OurTeam/doc4.png">
          <div class="nameArea">
            <h4><strong>Lorem Ipsum</strong></h4>
            <h6>Medic kinetoterapeut</h6>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- END Our Team Part -->

  <!-- Footer -->

  <div class="footer">
    <div class="d-flex justify-content-evenly">

      <div class="col-4 align-self-center">

        <div class="footerHead">
          <h2 class="h2"><strong>Contacte:</strong></h2>
        </div>

        <div class="strada">
          <h5><strong>Strada:</strong> Chisinau, StradaAnumita 75/2</h5>
        </div>

        <div class="telefon">
          <h5><strong>Telefon:</strong> <a href="tel:+37360606060">+373 60 606 060</a></h5>
        </div>
        <div class="email">
          <h5><strong>Email:</strong> <a href="mailto: abc@example.com">Lotus@email.com</a></h5>
        </div>
      </div>


      <!-- HARTA LUATA DE PE NET -->

      <div class="mapouter">
        <div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas"
            src="https://maps.google.com/maps?q=Chisinau%20Kaufland%20DEcebal&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
            href="https://123movies-org.net">123movies</a><br>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 400px;
              width: 400px;
            }
          </style><a href="https://www.embedgooglemap.net"></a>
          <style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 400px;
              width: 400px;
            }
          </style>
        </div>
      </div>

    </div>
  </div>
  
<!-- END Footer -->





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>