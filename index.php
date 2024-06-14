<?php 

include 'config.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch news content
$sql = "SELECT ID, Title, Description, Img FROM frontnews";
$result = $conn->query($sql);

$sql1 = "SELECT ID, Name, Description, Img FROM instructors";
$result1 = $conn->query($sql1);

?>


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
    <link rel="stylesheet" href="index.css" />
    <title>Home</title>
  </head>
  <body>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"
          ><span class="text-danger">Datamex College of St. Adeline</span></a
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
              <a class="nav-link active" aria-current="page" href="index.php"
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

    <!-- carousel or hero section -->
    <div id="carouselCaption" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselCaption"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselCaption"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselCaption"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/pro-student.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Prepare to solve the challenges of tomorrow</h5>
            <p>
              With Technology, Administration, and Management Degree Programs
              Impart with Technology.
            </p>
            <p>
              <a
                href="online-application.php"
                class="btn btn-warning mt-3 fw-bold"
                >Enroll Now!</a
              >
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="images/college-students.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption">
            <h5>Prepare to solve the challenges of tomorrow</h5>
            <p>
              With Technology, Administration, and Management Degree Programs
              Impart with Technology.
            </p>
            <p>
              <a
                href="online-application.php"
                class="btn btn-warning mt-3 fw-bold"
                >Enroll Now!</a
              >
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="images/Digital-transformation-in-Philippine-schools.png"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption">
            <h5>Prepare to solve the challenges of tomorrow</h5>
            <p>
              With Technology, Administration, and Management Degree Programs
              Impart with Technology
            </p>
            <p>
              <a
                href="online-application.php"
                class="btn btn-warning mt-3 fw-bold"
                >Enroll Now!</a
              >
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselCaption"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselCaption"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- programs section -->
    <section id="portfolio" class="portfolio section-padding">
      <div class="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-2">
              <h2 class="text-warning">Programs that we offer</h2>
              <p class="text-light col-6 mx-auto">
                "Discover the diverse array of courses and specialized strands
                available to you. Click on the image below to explore and select
                the option that best aligns with your educational and career
                aspirations."
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <a href="college.php" class="card-link">
              <div class="card text-center bg-body pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img
                      src="images/college student.jpg"
                      alt=""
                      class="img-fluid custom-img rounded-4 mt-4"
                    />
                  </div>
                  <h3 class="card-title text-warning fs-2">College Courses</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <a href="shs.php" class="card-link">
              <div class="card text-center bg-body pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img
                      src="images/senior high.jpg"
                      alt=""
                      class="img-fluid custom-img rounded-4 mt-4"
                    />
                  </div>
                  <h3 class="card-title text-warning fs-2">
                    Senior High Courses
                  </h3>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- overview section -->
    <div class="container-fluid bg-body-secondary mt-5 p-5">
      <div class="row align-items-center">
        <div class="col-md-6 mt-3">
          <img src="images/datamex1.1.png" class="img-fluid" alt="" />
        </div>
        <div class="col-md-6 justify-content-center text-center p-3">
          <p>Datamex College of St. Adeline</p>
          <h1 class="ad-title">ADMISSIONS IS NOW OPEN!</h1>
          <h4>S.Y. 2024 - 2025</h4>
          <p class="mb-2">Senior High and College</p>
          <p>
            Early enrollees will receive a
            <span class="text-danger">Php 1,000</span> tuition fee discount!
          </p>
          <p>
            <a
              href="online-application.php"
              class="btn btn-warning mt-3 fw-bold"
              >Enroll Now!</a
            >
          </p>
        </div>
      </div>
    </div>

    <!-- academic team section -->
    <section id="team" class="team section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-2">
              <h2>Academic Team</h2>
            </div>
          </div>
        </div>

        <div class="row">
        <?php 
    if ($result->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
        echo '<div class="col-6 col-md-4 col-lg-3">';
        echo '<div class="card text-center">';
        echo '<div class="card-body">';
        echo '<img src="images/' . $row["Img"] . '" alt="" class="img-fluid rounded-circle" />';
        echo '<a href="#" class="card-link">';
        echo '<h3 class="card-title py-2 text-dark">' . $row["Name"] . '</h3>';
        echo '</a>';
        echo '<p class="card-text">' . $row["Description"] . '</p>';
        echo '<p class="socials">';
        echo '<a href="https://www.facebook.com/nyawminator" target="_blank" class="socials-link">';
        echo '<i class="bi bi-facebook text-dark mx-1"></i>';
        echo '</a>';
        echo '<a href="https://twitter.com/nenenekoski" target="_blank" class="socials-link">';
        echo '<i class="bi bi-twitter text-dark mx-1"></i>';
        echo '</a>';
        echo '<a href="https://www.instagram.com/nekoski/" target="_blank" class="socials-link">';
        echo '<i class="bi bi-instagram text-dark mx-1"></i>';
        echo '</a>';
        echo '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        }
      } else {
          echo "0 results";
      }
  
      
    ?>


        </div>
      </div>
</section>

    <!-- current affairs section -->
    <section id="news" class="news py-5 mt-5 bg-body-secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center">
              <h2>Current Affairs</h2>
            </div>
          </div>
        </div>

        <?php
        // Display news content
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="container mt-5">';
                echo '<div class="row g-5">';
                echo '<div class="col-12 col-lg-5">';
                echo '<img src="images/' . $row["Img"] . '" alt="" class="img-fluid ms-auto" style="height: 350px; width: auto; object-fit: contain;" />';
                echo '</div>';
                echo '<div class="col-12 col-lg-7">';
                echo '<h2 class="ca-title">' . $row["Title"] . '</h2>';
                echo '<p class="my-2">' . $row["Description"] . '</p>';
                echo '<p><a href="current-affairs.php" class="btn btn-warning mt-3 fw-bold">Read More</a></p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<hr />';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>

      </div>
    </section>

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
  <script src="sweetalert.js"></script>
</html>
