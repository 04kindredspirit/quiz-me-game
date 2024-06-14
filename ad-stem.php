<?php 

include 'config.php';
$sql = "SELECT ID, img FROM users";
$result1 = $conn->query($sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM stem";
$result = $conn->query($query);



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
    <link rel="stylesheet" href="ad-stem.css" />
    <title>STEM List</title>
  </head>
  <body>
    <div class="wrapper">
      <aside id="sidebar">
        <div class="d-flex">
          <button id="toggle-btn" type="button">
            <i class="bi bi-code-square"></i>
          </button>
          <div class="sidebar-logo">
            <a href="#">DATAMEX</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a
              href="admin-dashboard.php"
              class="sidebar-link"
              data-bs-toggle="tooltip"
              data-bs-placement="right"
              title="Dashboard"
            >
              <i class="bi bi-columns-gap"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link has-dropdown collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#news"
              aria-expanded="false"
              aria-controls="news"
              ><i class="bi bi-book"></i> <span>News</span></a
            >
            <ul
              id="news"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="news-frontpage.php" class="sidebar-link"
                  >Front Page</a
                >
              </li>
              <li class="sidebar-item">
                <a href="news-section.php" class="sidebar-link"
                  >News Section</a
                >
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link has-dropdown collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#admission"
              aria-expanded="false"
              aria-controls="admission"
              ><i class="bi bi-layout-sidebar"></i> <span>Admission</span></a
            >
            <ul
              id="admission"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a
                  href="#"
                  class="sidebar-link collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#admission-two"
                  aria-expanded="false"
                  aria-controls="admission-two"
                  >College</a
                >
                <ul
                  id="admission-two"
                  class="sidebar-dropdown list-unstyled collapse"
                >
                  <li class="sidebar-item">
                    <a href="ad-college-it.php" class="sidebar-link"
                      >BSIT</a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-college-hm.php" class="sidebar-link"
                      >BSHM</a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-college-tm.php" class="sidebar-link"
                      >BSTM</a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-college-oa.php" class="sidebar-link"
                      >BSOA</a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  href="#"
                  class="sidebar-link collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#admission-three"
                  aria-expanded="false"
                  aria-controls="admission-three"
                  >Senior HS</a
                >
                <ul
                  id="admission-three"
                  class="sidebar-dropdown list-unstyled collapse text-center"
                >
                  <li class="sidebar-item">
                    <a href="ad-ict.php" class="sidebar-link">ICT</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-he.php" class="sidebar-link">HE</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-stem.php" class="sidebar-link">STEM</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-humss.php" class="sidebar-link">HUMSS</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-gas.php" class="sidebar-link">GAS</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="ad-abm.php" class="sidebar-link">ABM</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="instructors.php" class="sidebar-link">
              <i class="bi bi-people"></i>
              <span>Instructors</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="settings.php" class="sidebar-link">
              <i class="bi bi-gear"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>
        <div class="sidebar-footer">
          <a href="index.php" class="sidebar-link">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span>
          </a>
        </div>
      </aside>
      <div class="main bg-secondary-subtle">
        <nav class="navbar navbar-expand px-4 py-3">
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                <?php
                  if ($result1->num_rows > 0) {
                      while ($row = $result1->fetch_assoc()) {
                          
                          
                          echo '<img src="images/' . $row["img"] . '"  class="avatar img-fluid" alt="" />';
                        
                          
                      }
                  } else {
                      echo "0 results";
                  }

                  
                  ?>
                </a>
                <div class="dropdown-menu dropdown-menu-end rounded">
                  <a href="settings.php" class="dropdown-item">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <main class="content px-3 py-4">
          <div class="container-fluid">
            <div class="mb-3">
              <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="admin-dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Admission</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      STEM
                    </li>
                  </ol>
                </nav>
              </nav>
              <div class="row">
                <div class="col-lg-9 col-md-6">
                  <h3 class="fw-bold fs-4 my-2">List of STEM Students</h3>
                </div>
                <div class="col-lg-3 col-md-6">
                  <form class="d-flex" role="search" method = "GET">
                    <input
                      class="form-control me-2"
                      type="search"
                      placeholder="Search"
                      name = "search"
                      aria-label="Search"
                    />
                    <button class="btn btn-outline-danger" type="submit">
                      Search
                    </button>
                  </form>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-lg-12 mt-2" style="overflow: auto" id="style-1">
                  <table class="table table-striped">
                    <thead>
                      <tr class="highlight fs-6">
                        <th scope="col">ID</th>
                        <th scope="col">Campus</th>
                        <th scope="col">Type</th>
                        <th scope="col">Course</th>
                        <th scope="col">Year</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact</th>
                      </tr>
                    </thead>
                    <tbody class="tbody">
                    <?php
    $query = "SELECT * FROM stem";
    
    // Check if search query is present
    if(isset($_GET['search'])) {
        $search = $_GET['search'];
        // Modify the query to search by ID or full name
        $query = "SELECT * FROM stem WHERE ID LIKE '%$search%' OR CONCAT(FirstName, ' ', MiddleName, ' ', LastName) LIKE '%$search%'";
    }
    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fullName = $row['FirstName'] . ' ' . $row['MiddleName'] . ' ' . $row['LastName'];

            echo '
            <tr> 
                <td>' . $row['ID'] . '</td>
                <td>' . $row['Campus'] . '</td>
                <td>' . $row['Type'] . '</td>
                <td>' . $row['CourseStrand'] . '</td>
                <td>' . $row['Yeargrade'] . '</td>
                <td>' . $fullName . '</td>
                <td>' . $row['DateofBirth'] . '</td>
                <td>' . $row['Gender'] . '</td>
                <td>' . $row['Contact'] . '</td>
                
                
            </tr>
            ';
        }
    } else {
        echo '<tr><td colspan="10">No results found</td></tr>';
    }
?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>

  <script>
    const hamburger = document.querySelector("#toggle-btn");
    hamburger.addEventListener("click", function () {
      document.querySelector("#sidebar").classList.toggle("expand");
    });
  </script>
</html>
