<?php 

@include 'config.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch news content
$sql = "SELECT ID, Title, Description, Img FROM newssection";
$result = $conn->query($sql);

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
    <link rel="stylesheet" href="college.css" />
    <title>Current Affairs</title>
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

    <!-- hero or img section -->
    <div class="card">
      <img src="images/current-affairs.png" alt="..." />
    </div>

    <!-- news section -->
    <section id="news" class="news py-5">
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
</html>