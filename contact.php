<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="contact.css" />
    <title>Contact Us</title>
  </head>
  <body>
    <!-- nav section -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="index.php"
                ><span class="text-danger"
                  >Datamex College of St. Adeline</span
                ></a
              >
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item btn-nav rounded-1 ms-1">
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="index.php"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item dropdown btn-nav rounded-1 ms-1">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Admission
                    </a>
                    <ul class="dropdown-menu pe-2">
                      <li class="pb-1">
                        <a
                          class="dropdown-item btn-nav rounded-1 ms-1"
                          href="requirements.php"
                          target="_blank"
                          >Requirements</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item btn-nav rounded-1 ms-1"
                          href="online-application.php"
                          target="_blank"
                          >Online Application</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown btn-nav rounded-1 ms-1">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Programs
                    </a>
                    <ul class="dropdown-menu pe-2">
                      <li class="pb-1">
                        <a
                          class="dropdown-item btn-nav rounded-1 ms-1"
                          href="college.php"
                          >College</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item btn-nav rounded-1 ms-1"
                          href="shs.php"
                          >Senior High</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item btn-nav rounded-1 ms-1">
                    <a class="nav-link" href="facilities.php">Facilities</a>
                  </li>
                  <li class="nav-item btn-nav rounded-1 ms-1">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item btn-nav rounded-1 ms-1">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <!-- map section -->
    <div class="container contact">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center fw-bold">Contact Us!</h1>
        </div>
      </div>
    </div>

    <div class="container bg-secondary-subtle rounded">
      <div class="row">
        <div class="col-lg-6 col-md-6 mt-4">
          <div class="map-wrapper">
            <iframe
              class="google-map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.6332648874436!2d120.98039617423515!3d14.676741975209671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b41947544ddd%3A0x3b1732383d52bf7d!2sDatamex%20College%20of%20Saint%20Adeline!5e0!3m2!1sen!2sph!4v1715043510410!5m2!1sen!2sph"
              width="500"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 p-3">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Your Name</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Email</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputPassword1"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Message</label
              >
              <textarea
                class="form-control"
                id="exampleInputPassword1"
              ></textarea>
            </div>

            <button type="submit" class="btn btn-warning">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- branches information section -->
    <div class="container rounded-top my-5 p-3">
      <h3 class="fw-semibold bg-primary-subtle m-0 p-3 rounded-top">
        Branches
      </h3>
      <div class="row">
        <div class="col-md-12">
          <div class="course border border-top-0 p-3">
            <h5 class="fw-semibold">Valenzuela Branch</h5>
            <p><i class="bi bi-telephone me-2"></i>0282927536 / 8292-7536</p>
            <p>
              <i class="bi bi-geo me-2"></i>Gotaco Bldg 2, 32 MacArthur Hwy,
              Valenzuela, 1440 Metro Manila
            </p>
            <p><i class="bi bi-envelope-at me-2"></i>stadeline@yahoo.com.ph</p>
            <a
              href="https://www.facebook.com/profile.php?id=100066893266802"
              class="text-decoration-none"
              ><i class="bi bi-facebook me-2"></i>Datamex College of St. Adeline
              Valenzuela Branch</a
            >
          </div>
          <div class="course p-3 border border-top-0">
            <h5 class="fw-semibold">Caloocan Branch</h5>
            <p><i class="bi bi-telephone me-2"></i>0282942127 / 8366-1970</p>
            <p>
              <i class="bi bi-geo me-2"></i>357 J. Teodoro St, Cor 10th Ave,
              Caloocan
            </p>
            <a
              href="https://www.facebook.com/datamexcollegeofsaintadelinecaloocan"
              class="text-decoration-none"
              ><i class="bi bi-facebook me-2"></i>Datamex Caloocan</a
            >
          </div>
          <div class="course p-3 border border-top-0">
            <h5 class="fw-semibold">Fairview Branch</h5>
            <p><i class="bi bi-telephone me-2"></i>29218350 / 8921-8350</p>
            <p>
              <i class="bi bi-geo me-2"></i>85 Commonwealth Ave, Greater
              Fairview, Quezon City, 1118 Metro Manila
            </p>
            <a
              href="https://www.facebook.com/datamexadeline"
              class="text-decoration-none"
              ><i class="bi bi-facebook me-2"></i>Datamex Fairview Branch</a
            >
          </div>
          <div class="course p-3 border border-top-0">
            <h5 class="fw-semibold">Datamex Meycauayan Branch</h5>
            <p>
              <i class="bi bi-telephone me-2"></i>(02) 579 4372 / 09512965086
            </p>
            <p>
              <i class="bi bi-geo me-2"></i>85 Requino St, Saluysoy, Meycauayan,
              3023 Bulacan
            </p>
            <a
              href="https://www.facebook.com/datamex.meycauayan"
              class="text-decoration-none"
              ><i class="bi bi-facebook me-2"></i>Datamex Meycauayan Branch</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- footer section -->
    <footer class="bg-secondary text-white pt-5 pb-4">
      <div class="container text-md-left">
        <div class="row text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Datamex College of St. Adeline
            </h5>
            <p>Valenzuela Branch</p>
            <p>0282927536 / 8292-7536</p>
            <p>
              Gotaco Bldg 2, 32 MacArthur Hwy, Valenzuela, 1440 Metro Manila
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase font-weight-bold text-warning">
              Site Navigation
            </h5>
            <p>
              <a
                href="online-application.php"
                class="text-white"
                style="text-decoration: none"
                >Admission</a
              >
            </p>
            <p>
              <a
                href="requirements.php"
                target="_blank"
                class="text-white"
                style="text-decoration: none"
                >Programs</a
              >
            </p>
            <p>
              <a
                href="facilities.php"
                class="text-white"
                style="text-decoration: none"
                >Facilities</a
              >
            </p>
            <p>
              <a
                href="contact.php"
                class="text-white"
                style="text-decoration: none"
                >Contact</a
              >
            </p>
            <p>
              <a
                href="about.php"
                class="text-white"
                style="text-decoration: none"
                >About</a
              >
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase font-weight-bold text-warning">
              Social Medias
            </h5>
            <p>
              <a
                href="https://www.facebook.com/profile.php?id=100066893266802&sk=about"
                target="_blank"
                class="text-white"
                style="text-decoration: none"
                ><i class="bi bi-facebook me-2"></i>Facebook</a
              >
            </p>
            <p>
              <a href="" class="text-white" style="text-decoration: none"
                ><i class="bi bi-twitter me-2"></i>Twitter</a
              >
            </p>
            <p>
              <a href="" class="text-white" style="text-decoration: none"
                ><i class="bi bi-instagram me-2"></i>Instagram</a
              >
            </p>
            <p>
              <a href="" class="text-white" style="text-decoration: none"
                ><i class="bi bi-youtube me-2"></i>Youtube</a
              >
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="footer-btm bg-dark p-1 text-center">
      <div class="container">
        <p class="text-white">
          Copyright &copy; Designed By
          <span>NEKO</span>
        </p>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</html>
