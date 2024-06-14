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
    <link rel="stylesheet" href="requirements.css" />
    <title>Requirements</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="requirements.php"
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

    <!-- hero section -->
    <div class="card">
      <img src="images/requirements2.jpg" alt="..." />
    </div>

    <!-- admission descriptions -->
    <div class="container bg-body-secondary mt-3">
      <div class="row">
        <div class="col-md-12 my-3">
          <h1 class="ad-title text-danger">Admission</h1>
          <p>
            An applicant student must follow the registration procedure
            conducted within the school admission
          </p>
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

    <!-- requirements section -->
    <div id="requirements" class="requirements section-padding p-3">
      <div class="container bg-body-secondary">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header p-2">
              <h3 class="pt-2">1.1 Enrollment Requirements</h3>
              <p>
                Before gaining admission to any academic program, ensure all
                required documents are submitted to the Registrar's Office.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion pb-2" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="false"
                aria-controls="collapseOne"
              >
                Senior High School
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>The following requirements must be submitted.</strong>
                <ul>
                  <li>Form - 138 HS Report card/ F-139 (Permanent record)</li>
                  <li>Certificate of good moral character</li>
                  <li>Birth certificate (photo copy) NSO or PSA</li>
                  <li>Completed application form of enrolment</li>
                  <li>4pcs of 2x2 Picture</li>
                  <li>4pcs of 1x1 Picture</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                College
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>The following requirements must be submitted.</strong>
                <ul>
                  <li>Original High School Grade Card</li>
                  <li>Certificate of good moral character</li>
                  <li>Birth Certificate (NSO or PSA)</li>
                  <li>4pcs of 2x2 Picture</li>
                  <li>4pcs of 1x1 Picture</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Transferee
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>The following requirements must be submitted.</strong>
                <ul>
                  <li>
                    Transcript of records (TOR/Scholastic Records and all the
                    above documents for Freshmen(02 to 05))
                  </li>
                  <li>Honorable Dismissal</li>
                  <li>Form 137</li>
                  <li>Birth Certificate</li>
                  <li>4pcs of 2x2 Picture</li>
                  <li>4pcs of 1x1 Picture</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >
                Alternative Learning System (ALS) Passers
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is
                hidden by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing
                and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth
                noting that just about any php can go within the
                <code>.accordion-body</code>, though the transition does limit
                overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive"
              >
                Students from overseas with academic records from a foreign
                institution.
              </button>
            </h2>
            <div
              id="collapseFive"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>The following requirements must be submitted.</strong>
                <ul>
                  <li>Completed registration and assessment forms</li>
                  <li>
                    Verified copy of Alien Certificate of Registration(ACR) from
                    the Bureau of Immigration
                  </li>
                  <li>
                    Copy of Certificate of Eligibility for Admission (CEA) with
                    credits earned abroad to be confirmed and signed from the
                    executive –director /commission of CHED
                  </li>
                  <li>Photocopy of a PASSPORT</li>
                  <li>4 copies of 2x2 pictures (latest)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center p-1">
          <strong>Note: </strong>If you register for reservation online, upon
          onsite admission at Datamex College of Saint Adeline tell the
          registrar personnel that you've already reserved online.
        </p>
      </div>
    </div>

    <div class="container bg-body-secondary mb-3">
      <div class="row">
        <div class="col-md-12 my-3">
          <h3 class="pt-2">1.2 Admission Procedures</h3>
          <p class="fw-bold">FOR FRESHMEN/ TRANSFEREES/ FOREIGN STUDENTS</p>
          <ol>
            <li>
              Go to the Registrar’s Office and ask for an enrollment form. Fill
              it up and accomplish the form with your documents/requirements
              attached to it. Get your assessment form together withthe schedule
              of classes to be approved by the school head/branch manager then
              an inteview will follow.
            </li>
            <li>
              Proceed to the accounting office for the assessment of fees and
              then pay. Always ask for an official reciept.
            </li>
            <li>
              Submit all the document with your enrollment form and show your
              OFFICIAL RECIEPT for validation to the registrar for database
              purposes.
            </li>
            <li>
              Present your information data for the issuance of a school ID.
            </li>
            <li>
              Get the schedule of payment to avail an examination permit on
              time.
            </li>
            <li>Schools policy, NO PERMIT, NO EXAM.</li>
            <li>Avoid delay of time to refrain from penalty.</li>
          </ol>
          <p class="fw-bold">FOR OLD STUDENT</p>
          <ol>
            <li>
              GSecure the pre-registration from and index card from the
              registrar for reservation. See to it that you are cleared from
              your obligation in the school.
            </li>
            <li>
              Get the permit to enroll,complete the forms with your schedule of
              classes and dont forget your student no.
            </li>
            <li>Proceed to your OIC for approval.</li>
            <li>Go to the accounting office and then pay.</li>
            <li>
              Submit your registration card to the registrar and show your
              official receipt for validation.
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
