<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Powered by kx</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!--alert messages start-->
        <?= $alert; ?>
    <!--alert messages end-->
    <header id="header" class="pt-4 pb-4 pt-sm-5 pb-sm-5 px-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-sm-2">
            <div class="logo-wrapper">
              <a href="/"><img src="assets/images/logo.svg" alt="powered by kx" /></a>
            </div>
          </div>
          <div class="col-6 col-sm-8"></div>
          <div class="col-2 col-sm-2 d-none d-sm-block">
            <div class="social-icon-wrapper">
              <ul
                class="
                  list-unstyled list-inline
                  d-flex
                  justify-content-end
                  align-items-center
                  m-0
                "
              >
                <li class="list-inline-item">
                  <a href="javascript:void">
                    <div class="social-icon bg_black icon_circle">
                      <i class="fab fa-facebook-f text-white"></i></div
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void">
                    <div class="social-icon bg_black icon_circle">
                      <i class="fab fa-twitter text-white"></i></div
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void">
                    <div class="social-icon bg_black icon_circle">
                      <i class="fab fa-instagram text-white"></i></div
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void">
                    <div class="social-icon bg_black icon_circle">
                      <i class="fab fa-linkedin-in text-white"></i></div
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- #header section -->

    <!-- #hero section  -->
    <section id="hero">
      <div class="container-fluid p-0">
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active circle-indicators"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              class="circle-indicators"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              class="circle-indicators"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="assets/images/slider.png"
                class="d-block w-100"
                alt="..."
              />
              <div class="carousel-caption d-block col-sm-8 m-auto">
                <h5 class="carousel-heading text-bold">We Move, Multiply & Optimize
                 <br> by powering enterprises
                 <br> with dynamic business solutions
                  </h5>
              </div>
            </div>
          </div>
        </div>
        <!-- ./slider  -->
        <!-- scroll down arrow  -->
        <div class="down-arrow">
          <a href="#services">
            <img src="assets/images/down-arrow.svg" alt="" />
          </a>
        </div>
        <!-- down arrow  -->
      </div>
    </section>
    <!-- #hero section  -->

    <!-- brand section  -->
    <section id="brand">
      <div class="container">
        <div class="row pb-5 mx-5 mx-sm-0 gx-5 gx-sm-0">
          <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <!-- desktop view  -->
            <h2 class="title pb-3 d-none d-sm-block">
              The ???K??? of <strong>KX</strong> refers to <strong>Kinetic Motion</strong>  and ???X??? is for <strong>Multiplication</strong>. 
             <br> We stand for speed and agility that we aspire to power your businesses
             <br>through integrated tech & logistics frameworks. 
            </h2>
            <!-- for mobile view  -->
            <!-- with -->
            <h2 class="title pb-3 d-block d-sm-none">
              The ???K??? of <strong>KX</strong> refers to <strong>Kinetic Motion</strong>  and ???X??? is for <strong>Multiplication</strong>. 
              We stand for speed and agility that we aspire to power your businesses
             through integrated tech & logistics frameworks. 
            </h2>
          </div>
        </div>
      </div>
      <!-- brand logo  -->
      <div class="brand__logo-wrapper" id="services">
        <div class="container">
          <div class="row justify-content-center align-items-stretch mx-4 mx-sm-0">
            <div class="col-6 col-md-6 col-lg-4 border-end border-bottom brand__col-padding">
              <a href="javascript:void"
                ><img
                  src="assets/images/brands/fullfillment.svg"
                  alt="fullfillment"
              /></a>
            </div>
            <div class="col-6 col-md-6 col-lg-4 border-bottom brand__col-padding">
              <a href="javascript:void"
                ><img
                  src="assets/images/brands/transports.svg"
                  alt="transports"
              /></a>
            </div>
          </div>
          <div class="row justify-content-center align-items-center  mx-4 mx-sm-0">
            <div class="order-lg-2 col-7 col-md-7 col-lg-4 border-start border-end  brand__col-padding">
              <a href="javascript:void"
                ><img src="assets/images/brands/sourcing.svg" alt="sourcing"
              /></a>
            </div>
            <div
              class="
                order-lg-1
                col-6 col-md-6 col-lg-4
                brand__col-padding
                border-top 
                border-top-sm-none
              "
            >
              <a href="javascript:void"
                ><img src="assets/images/brands/electronics.svg" alt="electronics"
              /></a>
            </div>
            <div
              class="
                order-lg-3
                col-6
                col-md-6
                brand__col-padding
                col-lg-4
                m-auto m-sm-0
                border-xs-start
                border-top border-top-sm-none
              "
            >
              <a href="javascript:void"
                ><img src="assets/images/brands/drop.svg" alt="drop"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <!-- brand logo  -->
    </section>
    <!-- brand section  -->

    <!-- contact section  -->
    <section id="contact">
      <div class="heading-wrapper mb-4">
          <h1 class="heading text-white">Let???s Accelerate Your Business!</h1>
      </div>
      <div class="container pt-sm-5 pb-5">
        <div class="row justify-content-center mb-5 mt-5">
          <div class="col-10 col-sm-6 col-md-6 col-lg-5">
            <h3 class="subtitle text-uppercase pt-5 pb-5">
              DEVELOPMENT STUDIO
            </h3>
            <p>
              Plot 39/2, Kalachadpur <br />
              (North Baridhara) <br />
              Gulshan, Dhaka 1212, Bangladesh
            </p>
          </div>
          <div class="col-10 col-sm-6 col-md-6 col-lg-5">
            <h3 class="subtitle text-uppercase pt-5 pb-5">CORPORATE OFFICE</h3>
            <p>
              Level 3, Akram Center <br />
              212 S.S. Nazrul Islam Sharani <br />
              Purana Paltan, Dhaka 1000, Bangladesh
            </p>
          </div>
        </div>
        <!-- Address end  -->
        <div class="row justify-content-center align-items-center pt-5 mb-5">
          <p class="pb-5 px-5 col-10">
            Feel free to contact us at your convenience, we are here to provide answers.
          </p>
          <div class="col-12 pt-3 pb-3">
            <h3 class="text-bold text-uppercase pb-2">EMAIL</h3>
            <p><a href="mailto:service@poweredbykx.com">service@poweredbykx.com</a></p>
          </div>
          <div class="col-12 pt-3 pb-3">
            <h3 class="text-bold text-uppercase pb-2">PHONE</h3>
            <p><a href="tel:+8809666722788">+88 09666 722788</a></p>
          </div>
        </div>
        <!-- contact details end  -->
        <!-- contact form  -->
        <div class="row pt-5 mb-5">
          <p class="pb-5 mb-2 px-5 px-sm-0">
            Or, you may also fill out the following form to reach us
          </p>
          <form class="contact-form" method="POST" action="">
            <div class="row justify-content-center">
              <div class="col-10 col-sm-4 pb-4">
                <label for="formGroupExampleInput" class="form-label text-bold"
                  >Subject*</label
                >
                <div class="input-group mb-3">
                  <input
                    type="text"
                    name="subject"
                    class="form-control form-control-lg"
                    placeholder="PLEASE SELECT A SUBJECT"
                    aria-label=""
                    aria-describedby="basic-addon2"
                    required
                  />
                  <span class="input-group-text squre-input-grp-text" id="basic-addon2">
                    <i class="fa fa-caret-down text-red"></i>
                  </span>
                </div>
              </div>
              <div class="col-10 col-sm-4 pb-4">
                <label for="formGroupExampleInput" class="form-label text-bold"
                  >NAME*</label
                >
                <input
                  type="text"
                  name="name"
                  class="form-control form-control-lg"
                  placeholder=""
                  aria-label="name"
                  required
                />
              </div>
            </div>
            <div class="row justify-content-center pt-4 pt-sm-0">
              <div class="col-10 col-sm-4 pb-4">
                <label for="formGroupExampleInput" class="form-label text-bold"
                  >Email*</label
                >
                <div class="input-group mb-3">
                  <input
                    type="email"
                    name="email"
                    class="form-control form-control-lg"
                    placeholder=""
                    aria-label=""
                    aria-describedby="basic-addon2"
                    required
                  />
                </div>
              </div>
              <div class="col-10 col-sm-4 pb-4">
                <label for="formGroupExampleInput" class="form-label text-bold"
                  >Phone Number</label
                >
                <input
                  type="number"
                  name="phone"
                  class="form-control form-control-lg"
                  placeholder=""
                  aria-label="Last name"
                />
              </div>
            </div>
            <div class="row justify-content-center pt-4 pt-sm-0">
              <div class="col-10 col-sm-8">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label text-bold"
                    >Message*</label
                  >
                  <textarea
                    class="form-control form-control-lg"
                    name="message"
                    id="exampleFormControlTextarea1"
                    rows="8"
                    required
                  ></textarea>
                </div>
                <div class="col-12 col-sm-5 col-md-3 col-lg-2">
                  <button type="submit" name="contact" class="btn btn-black mt-3 mb-2 text-capitalize"
                    >Send
                    <img class="right-arrow" src="assets/images/right-arrow.svg" alt="">
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- contact form  -->
      </div>
    </section>
    <!-- contact section  -->

    <!-- footer section  -->
    <footer id="footer" class="pt-5 pb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6">
            <!-- Newsletter  -->
            <div class="footer__header">
              <h3 class="title pt-5 pb-5">Subscribe to our newsletter</h3>
              <p class="pb-4">
                Sign up to get industry insights
              </p>
            </div>
            <form method="POST" action="">
              <div class="row justify-content-center pt-4">
                <div class="col-10 col-sm-7 col-lg-8">
                  <input
                    type="email"
                    name="email"
                    class="form-control form-control-lg"
                    placeholder="Enter your email"
                    aria-label=""
                    aria-describedby="basic-addon2"
                    required
                  />
                </div>
                <div class="col-10 col-sm-5 col-lg-4 pt-3 pt-sm-0">
                  <button
                    type="submit"
                    name="newsletter"
                    class="btn btn-white text-center"
                    >Subscribe 
                    <img class="right-arrow" src="assets/images/right-arrow-red.svg" alt="">
                  </button>
                </div>
              </div>
            </form>
            <!-- Newsletter  -->

            <!-- footer social icon  -->
            <div class="row justify-content-center mt-5 pb-5 border-bottom">
              <div class="col-10 col-sm-4 pt-5 pb-5">
                <div class="social-icon-wrapper">
                  <ul
                    class="
                      list-unstyled list-inline
                      d-flex
                      justify-content-around
                      align-items-center
                      m-0
                    "
                  >
                    <li class="list-inline-item border-end">
                      <a href="javascript:void">
                        <div class="social-icon">
                          <i class="fab fa-facebook-f text-white"></i></div
                      ></a>
                    </li>
                    <li class="list-inline-item border-end">
                      <a href="javascript:void">
                        <div class="social-icon">
                          <i class="fab fa-twitter text-white"></i></div
                      ></a>
                    </li>
                    <li class="list-inline-item border-end">
                      <a href="javascript:void">
                        <div class="social-icon">
                          <i class="fab fa-instagram text-white"></i></div
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript:void">
                        <div class="social-icon">
                          <i class="fab fa-linkedin-in text-white"></i></div
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- footer social icon  -->

            <!-- footer menu  -->
            <div class="footer-menu">
              <div
                class="
                  row
                  justify-content-around
                  align-items-center
                  mt-5
                  mb-5
                  pt-5
                  pb-5
                "
              >
                <div class="col-10 col-lg-6">
                  <h4 class="text-white text-uppercase pb-5">Legal</h4>
                  <ul class="list-unstyled">
                    <li><a href="javascript:void">Privacy Policy</a></li>
                    <li><a href="javascript:void">Terms & Conditions</a></li>
                  </ul>
                </div>
                <div class="col-10 col-lg-6">
                  <h4 class="text-white text-uppercase pb-5 pt-5 pt-sm-0">
                    COMPANY
                  </h4>
                  <ul class="list-unstyled">
                    <li><a href="javascript:void">About us</a></li>
                    <li><a href="javascript:void">Contact us</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- footer menu  -->
            <!-- footer copyright bar  -->
            <div class="copyright-bar">
              <div class="row justify-content-center">
                <div class="order-3 order-sm-0 col-12 col-sm-4 pb-4 pb-sm-0">
                  <a href="javascript:void">&copy; 2021 poweredbykx</a>
                </div>
              </div>
            </div>
            <!-- footer copyright bar  -->
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section  -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
      if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </body>
</html>
