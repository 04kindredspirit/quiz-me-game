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
    <link rel="stylesheet" href="admission-transferstudent.css" />
    <title>Online Application</title>
  </head>
  <body>
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown btn-nav rounded-1 ms-1">
              <a
                class="nav-link active dropdown-toggle"
                aria-current="page"
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
                  <a class="dropdown-item btn-nav rounded-1 ms-1" href="college.php"
                    >College</a
                  >
                </li>
                <li>
                  <a class="dropdown-item btn-nav rounded-1 ms-1" href="shs.php"
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

    <div class="card">
      <img src="images/reg-transferee1.jpg" alt="..." />
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 my-3">
          <h1 class="ad-title">
            Online Application Form for Transferee Students
          </h1>
          <hr />
          <p>
            This form collects initial information that will serve as the key
            for admission reservation to the school.
            <small
              ><br />
              <strong>Note: </strong>Please complete all fields marked with an
              asterisk (<span class="text-danger">*</span>)
            </small>
          </p>
        </div>
      </div>
    </div>

    <div class="container bg-body-secondary p-3">
      <form class="row g-3 needs-validation" novalidate>
        <div class="container bg-info-subtle mt-3">
          <p class="ad-title fw-bold fs-4 pt-3 ps-3">Personal Information</p>
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label"
            >First Name<span class="text-danger"> *</span></label
          >
          <input
            type="text"
            class="form-control"
            id="validationCustom01"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
          <label class="form-label">Middle Name</label>
          <input type="text" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label"
            >Last name<span class="text-danger"> *</span></label
          >
          <input
            type="text"
            class="form-control"
            id="validationCustom02"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom03" class="form-label"
            >Date of Birth<span class="text-danger"> *</span></label
          >
          <input
            type="date"
            class="form-control"
            id="validationCustom03"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label"
            >Place of Birth<span class="text-danger"> *</span></label
          >
          <input
            type="text"
            class="form-control"
            id="validationCustom04"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom05" class="form-label"
            >Gender<span class="text-danger"> *</span></label
          >
          <select class="form-select" id="validationCustom05" required>
            <option selected disabled value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Others</option>
          </select>
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom06" class="form-label"
            >Contact Number<span class="text-danger"> *</span></label
          >
          <input
            type="number"
            class="form-control"
            id="validationCustom06"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom07" class="form-label"
            >Nationality<span class="text-danger"> *</span></label
          >
          <input
            type="text"
            class="form-control"
            id="validationCustom07"
            required
          />
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label"
            >Username<span class="text-danger"> *</span></label
          >
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input
              type="text"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
            <div class="invalid-feedback">Please choose a username.</div>
          </div>
        </div>
        <div class="col-md-12">
          <label for="validationCustom08" class="form-label"
            >Full Address<span class="text-danger"> *</span></label
          >
          <input
            type="text"
            class="form-control"
            id="validationCustom08"
            required
          />
          <div class="invalid-feedback">Please provide a valid address.</div>
        </div>
        <div class="col-md-8">
          <label for="validationDefault09" class="form-label"
            >State<span class="text-danger"> *</span></label
          >
          <select class="form-select" id="validationDefault09" required>
            <option selected disabled value="">Choose...</option>
            <option>Bachelor of Science in</option>
            <option>Ilocos Region (Region I)</option>
            <option>Cagayan Valley (Region II)</option>
            <option>Central Luzon (Region III)</option>
            <option>
              CALABARZON (Region IV-A) - Cavite, Laguna, Batangas, Rizal, Quezon
            </option>
            <option>
              MIMAROPA (Region IV-B) - Mindoro, Marinduque, Romblon, Palawan
            </option>
            <option>Bicol Region (Region V)</option>
            <option>Western Visayas (Region VI)</option>
            <option>Central Visayas (Region VII)</option>
            <option>Eastern Visayas (Region VIII)</option>
            <option>Zamboanga Peninsula (Region IX)</option>
            <option>Northern Mindanao (Region X)</option>
            <option>Davao Region (Region XI)</option>
            <option>SOCCSKSARGEN (Region XII)</option>
            <option>Caraga (Region XIII)</option>
            <option>
              Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)
            </option>
            <option>Cordillera Administrative Region (CAR)</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="validationCustom10" class="form-label"
            >Zip<span class="text-danger"> *</span></label
          >
          <input
            type="number"
            class="form-control"
            id="validationCustom10"
            required
          />
          <div class="invalid-feedback">Please provide a valid zip.</div>
        </div>
        <div class="container bg-info-subtle mt-3">
          <p class="ad-title fw-bold fs-4 pt-3 ps-3">Request Information</p>
        </div>
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-12">
            <label for="validationDefault11" class="form-label"
              >Select Campus<span class="text-danger"> *</span></label
            >
            <select class="form-select" id="validationDefault11" required>
              <option selected disabled value="">Choose...</option>
              <option>Valenzuela City Branch</option>
            </select>
          </div>
          <div class="col-md-12">
            <label class="form-label">Select Program<span class="text-danger"> *</span></label>
            <div class="row ms-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" onclick="enableDisableDiv(1)" />
                    <label class="form-check-label" for="inlineRadio1">College</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" onclick="enableDisableDiv(2)" />
                    <label class="form-check-label" for="inlineRadio2">Senior High</label>
                </div>
            </div>
        </div>
        
        <div class="col-md-6" id="collegediv">
            <!-- college courses -->
            <label for="collegeCourseSelect" class="form-label">Select Course<span class="text-danger"> *</span></label>
            <select class="form-select" id="collegeCourseSelect" required>
                <option selected disabled value="">Choose Course...</option>
                <option>Bachelor of Science in Information Technology (BSIT)</option>
                <option>Bachelor of Science in Hotel Management (BSHM)</option>
                <option>Bachelor of Science in Tourism Management (BSTM)</option>
                <option>Bachelor of Science in Office Administration (BSOA)</option>
            </select>
            <div class="valid-feedback">Looks good!</div>
        </div>
        
        <div class="col-md-6" id="shsdiv" style="display: none">
            <!-- shs strands -->
            <label for="shsStrandSelect" class="form-label">Select Strand<span class="text-danger"> *</span></label>
            <select class="form-select" id="shsStrandSelect" required>
                <option selected disabled value="">Choose Strand...</option>
                <option>Information and Communication Technology (ICT)</option>
                <option>Home Economics (H.E)</option>
                <option>Science, Technology, Engineering, and Mathematics (STEM)</option>
                <option>Humanities and Social Sciences (HUMSS)</option>
                <option>General Academic Strand (GAS)</option>
                <option>Accountancy, Business, and Management (ABM)</option>
            </select>
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom12" class="form-label">Current Year<span class="text-danger"> *</span></label>
            <select for="validationCustom12" class="form-select" id="yearSelect" required>
                <option selected disabled value="">Choose Year...</option>
                <option>Grade 11</option>
                <option>Grade 12</option>
                <option>First Year</option>
                <option>Second Year</option>
                <option>Third Year</option>
                <option>Fourth Year</option>
            </select>
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="container bg-info-subtle mt-3">
          <p class="ad-title fw-bold fs-4 pt-3 ps-3">Academic Information</p>
        </div>
        <div class="col-md-12">
          <label for="validationCustom13" class="form-label"
            >Previous School<span class="text-danger"> *</span></label
          >
          <input
            type="text"
            class="form-control"
            id="validationCustom13"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom14" class="form-label"
            >Previous Course or Program<span class="text-danger"> *</span></label
          >
          <!-- college courses -->
          <label for="collegeCourseSelect" class="form-label">Select Course<span class="text-danger"> *</span></label>
            <select class="form-select" id="collegeCourseSelect" required>
                <option selected disabled value="">Choose Course...</option>
                <option>Bachelor of Science in Information Technology (BSIT)</option>
                <option>Bachelor of Science in Hotel Management (BSHM)</option>
                <option>Bachelor of Science in Tourism Management (BSTM)</option>
                <option>Bachelor of Science in Office Administration (BSOA)</option>
                <option>Information and Communication Technology (ICT)</option>
                <option>Home Economics (H.E)</option>
                <option>Science, Technology, Engineering, and Mathematics (STEM)</option>
                <option>Humanities and Social Sciences (HUMSS)</option>
                <option>General Academic Strand (GAS)</option>
                <option>Accountancy, Business, and Management (ABM)</option>
            </select>
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom15" class="form-label"
            >Last Date Attended<span class="text-danger"> *</span></label
          >
          <input
            type="date"
            class="form-control"
            id="validationCustom15"
            required
          />
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom16" class="form-label"
            >Desired Course or Program<span class="text-danger"> *</span></label
          >
          <select class="form-select" id="collegeCourseSelect" required>
            <option selected disabled value="">Choose Course...</option>
            <option>Bachelor of Science in Information Technology (BSIT)</option>
            <option>Bachelor of Science in Hotel Management (BSHM)</option>
            <option>Bachelor of Science in Tourism Management (BSTM)</option>
            <option>Bachelor of Science in Office Administration (BSOA)</option>
            <option>Information and Communication Technology (ICT)</option>
            <option>Home Economics (H.E)</option>
            <option>Science, Technology, Engineering, and Mathematics (STEM)</option>
            <option>Humanities and Social Sciences (HUMSS)</option>
            <option>General Academic Strand (GAS)</option>
            <option>Accountancy, Business, and Management (ABM)</option>
          </select>
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom17" class="form-label"
            >Year Level<span class="text-danger"> *</span></label
          >
          <select class="form-select" id="collegeCourseSelect" required>
            <option selected disabled value="">Select Year...</option>
            <option>Grade 11</option>
            <option>Grade 12</option>
            <option>First Year College</option>
            <option>Second Year College</option>
            <option>Third Year College</option>
            <option>Fourth Year College</option>
          </select>
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="invalidCheck"
              required
            />
            <label class="form-check-label" for="invalidCheck">
              I confirm that all the details I've provided are true and complete
              to the best of my knowledge. I understand that providing false or
              misleading information may lead to my application being rejected
              or disciplinary action being taken against me.
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-warning" type="submit">Submit form</button>
        </div>
      </form>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 my-3">
          <ol>
            <li>
              Submit birth certificate, report card, 2x2 picture and
              certification of good moral character from previous school to the
              Admissions Office.
            </li>
            <li>Accomplish the student's Application form.</li>
            <li>
              Proceed to the Principal's office for the oral interview by any
              member of the Screening Committee.
            </li>
            <li>
              Take the entrance examinations scheduled by the Admission Office.
            </li>
            <li>
              The passing applicant will be asked to accomplish the reservation
              form for the school year.
            </li>
          </ol>
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
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reprehenderit ipsa beatae vero voluptate. Dicta, ipsa?
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase font-weight-bold text-warning">
              Site Navigation
            </h5>
            <p>
              <a href="online-application.php" class="text-white" style="text-decoration: none"
                >Admission</a
              >
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration: none"
                >Programs</a
              >
            </p>
            <p>
              <a href="facilities.php" class="text-white" style="text-decoration: none"
                >Facilities</a
              >
            </p>
            <p>
              <a href="contact.php" class="text-white" style="text-decoration: none"
                >Contact</a
              >
            </p>
            <p>
              <a href="about.php" class="text-white" style="text-decoration: none"
                >About</a
              >
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase font-weight-bold text-warning">
              Social Medias
            </h5>
            <p>
              <a href="" class="text-white" style="text-decoration: none"
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
          Copyright &copy;2023 Info-ManageProject. Designed By
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
  <script>
    (() => {
      "use strict";

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll(".needs-validation");

      // Loop over them and prevent submission
      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();

    function enableDisableDiv(option) {
        var yearSelect = document.getElementById("yearSelect");
        var collegeDiv = document.getElementById("collegediv");
        var shsDiv = document.getElementById("shsdiv");

        if (option === 1) {
          yearSelect.disabled = false;
          collegeDiv.style.display = "block";
          shsDiv.style.display = "none";

          // Enable Grade 12 and disable other options
          for (var i = 0; i < yearSelect.options.length; i++) {
            if (yearSelect.options[i].value === "Grade 11" || yearSelect.options[i].value === "Grade 12") {
              yearSelect.options[i].disabled = true;
            } else {
              yearSelect.options[i].disabled = false;
            }
          }
        } else {
          yearSelect.disabled = false;
          collegeDiv.style.display = "none";
          shsDiv.style.display = "block";

          // Enable First Year to Fourth Year and disable Grade 12
          for (var i = 0; i < yearSelect.options.length; i++) {
            if (yearSelect.options[i].value === "Grade 12" || yearSelect.options[i].value === "Grade 11") {
              yearSelect.options[i].disabled = false;
            } else {
              yearSelect.options[i].disabled = true;
            }
          }
        }
      }
  </script>
</html>
