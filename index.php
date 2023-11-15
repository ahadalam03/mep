<?php include('includes/config.php') ?>
<?php include('header.php') ?>

<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2E8B57;">
  <a class="navbar-brand" href="#"><b>بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">

      <li class="nav-item dropdown">
        <?php if (isset($_SESSION['login'])) { ?>
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user mr-2"></i>Account
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="/sms-project/admin/dashboard.php">Dashboard</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        <?php } else { ?>
          <a href="login.php" class="nav-link text-light"><i class="fa fa-user mr-2"></i>User login</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<div class="d-flex shadow" style="height: 500px;background:linear-gradient(-45deg, #2E8B57 50%, transparent 50%)">
  <div class="container-fluid my-auto">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="display-3 text-dark font-weight-bold"><b> We offers several <br> benefits for individuals</b> </h1>
        <p class="text-muted"> Online Quran learning makes it possible for people from any part of the world to access Quranic <br> education.
          This is especially beneficial for those living in areas where there are limited resources <br> or qualified teachers.</p>
        <a href="" class="btn btn-lg btn-dark"> call to action </a>
      </div>
      <div class="col-lg-6">
        <div class="col-lg-8 mx-auto card">
          <div class="card-body">
            <h3>Admission Form</h3>
            <form action="" method="post">
              <div class="md-form">
                <input type="text" id="typeText" class="form-control" placeholder="Your Name" />
                <label class="form-label" for="typeText"></label>
              </div>
              <div class="md-form">
                <input type="text" id="email" class="form-control" placeholder="Your E-mail" />
                <label class="form-label" for="email"></label>
              </div>
              <div class="md-form">
                <input type="text" id="mobile" class="form-control" placeholder="Your Phone number" />
                <label class="form-label" for="typeText"></label>
              </div>
              <button class="btn  btn-dark btn-block">Submit Form</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- About Us -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 py-5">
        <h2 class="font-weight-bold"><br>– Muhammad (PBUH): <br>
          Whatever charity a person gives, there is no better charity than spreading knowledge.</h2>
        <div class="pr-5">

          <p class="text-muted">
            The Quran is not merely a book it's a source of guidance, wisdom, and solace for countless souls around the world. Our mission is to provide a platform where the
            timeless teachings of the Quran are accessible to all, regardless of geographical or cultural boundaries.
          </p>

          <p class="text-muted">
            Online Quran learning platforms may offer personalized learning experiences. Students can receive one-on-one instruction,
            allowing the teacher to tailor the lessons to the student’s pace, level of understanding, and specific needs.
          </p>
          <p class="text-muted">
            Global Presence & Spread
            Islam is a diverse religion with followers from various ethnicities, cultures, and backgrounds,
            Islam is practiced on every continent, making it a truly global faith. an exciting collaboration with former captain of pakistan cricket team.
          </p>

        </div>
        <a href="about.php" class="btn btn-dark"> know more</a>
      </div>
      <div class="col-lg-6" style="background:url(./assets/images/0.png) no-repeat">

      </div>
    </div>
  </div>
</section>
<style>
  .course-image {
    width: 100%;
    height: 170px !important;
    object-fit: cover;
    object-position: center;
  }
</style>
<!-- Our Courses -->
<section class="py-5 bg-light">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">A Broad selection of Knowledge </h2>
    <p class="text-muted">Students may have the option to choose electives in specialized areas of interest, such as Islamic finance,
      Islamic art and architecture, or contemporary Islamic issues.</p>
  </div>

  <div class="container">
    <div class="row">

      <?php
      $query = mysqli_query($db_conn, "SELECT * FROM courses ORDER BY id DESC LIMIT 0, 8");
      while ($course = mysqli_fetch_object($query)) { ?>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div>
              <img src="./assets/images/<?php echo $course->image ?>" alt="" class="img-fluid rounded-top course-image">
            </div>
            <div class="card-body">
              <b><?php echo $course->name ?></b>
              <p class="card-text">
                <b>Duration: </b> <?php echo $course->duration ?> <br>
                <b>Price: </b> $60
              </p>
              <button class="btn btn-block btn-dark btn-sm">Enroll Now</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- teachers -->
<section class="py-5 ">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold"> Our Top Rated Scholars </h2>
    <p class="text-muted">Students may have the option to choose electives in specialized areas of interest, such as Islamic finance,
      Islamic art and architecture, or contemporary Islamic issues.</p>
  </div>
  <div class="container">
    <div class="row">
      <?php for ($i = 0; $i < 8; $i++) { ?>
        <div class="col-lg-3 my-4">
          <div class="card mt-5">
            <div class="col-7 position-absolute" style="top: -50px;">
              <img src="./assets/images/sddefault (1).jpg" alt="" class="mw-100 border rounded-circle">
            </div>
            <div class="card-body pt-5 mt-4">
              <h5 class="card-title m-0">Scholar name</h5>
              <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
              <p class="card-text">
                <b>Courses: </b> 55 <br>
                <b>Ratings: &nbsp </b>
              </p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- achievements -->
<section class="py-5 text-white" style="background:#2E8B57">
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pr-5">
          <h2>
            Achievements
          </h2>
          <p class="text-white-muted">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium a vel obcaecati qui laudantium quasi minima alias. Repudiandae iste debitis harum consequatur provident, eligendi nesciunt, quos dolorem distinctio deleniti culpa.
          </p>
          <img src="./assets/images/icon.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 my-auto">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center">
                  <span>
                    <i class="text-warning fa-solid fa-graduation-cap fa-2x"></i>
                    <h2 class="my-2 font-weight-bold h1">
                      334
                    </h2>
                    <hr class="border-light">
                    <h6 class="text-white-muted">Certified</h6>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center">
                  <span>
                    <i class="text-warning fa-solid fa-graduation-cap fa-2x fa-fade"></i>
                    <h2 class="my-2 font-weight-bold h1">
                      334
                    </h2>
                    <hr class="border-light">
                    <h6 class="text-white-muted">Certified</h6>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center">
                  <span>
                    <i class="text-warning fa-solid fa-graduation-cap fa-2x fa-fade"></i>
                    <h2 class="my-2 font-weight-bold h1">
                      334
                    </h2>
                    <hr class="border-light">
                    <h6 class="text-white-muted">Certified</h6>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="border rounded ">
                <div class="card-body text-center">
                  <span>
                    <i class="text-warning fa-solid fa-graduation-cap fa-2x fa-fade"></i>
                    <h2 class="my-2 font-weight-bold h1">
                      334
                    </h2>
                    <hr class="border-light">
                    <h6 class="text-white-muted">Certified</h6>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimonials -->
<section class="py-5">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold"> What Community says </h2>
    <p class="text-muted">Students may have the option to choose electives in specialized areas of interest, such as Islamic finance,
      Islamic art and architecture, or contemporary Islamic issues.</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="border rounded position-relative">
          <div class="p-5 text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus totam vero assumenda cumque odio,
            laborum reprehenderit voluptate quisquam commodi eum amet aliquid repellat ipsam corrupti? Voluptatum neque fuga dolor tempore?
          </div>
          <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity: 0.2;"></i>
        </div>
        <div class="text-center mt-n2"><img src=".assets/images/person-solid.svg" alt="" class="rounded-circle border" width="100" height="100">
          <h6 class="mb-0 font-weight-bold">Name of candidate</h6>
          <p><i>Designation</i></p>
        </div>
      </div>
      <div class="col-6">
        <div class="border rounded position-relative">
          <div class="p-5 text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus totam vero assumenda cumque odio,
            laborum reprehenderit voluptate quisquam commodi eum amet aliquid repellat ipsam corrupti? Voluptatum neque fuga dolor tempore?
          </div>
          <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left:.5rem; opacity: 0.2;"></i>
        </div>
        <div class="text-center mt-n2"><img src=".assets/images/person-solid.svg" alt="" class="rounded-circle border" width="100" height="100">
          <h6 class="mb-0 font-weight-bold">Name of candidate</h6>
          <p><i>Designation</i></p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Footer -->
<footer style="background:url(./assets/images/arabic.png) center cover no-repeat">
  <div class="py-5 text-white" style="background:#00000088">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-4">
          <h5>Useful Links</h5>
          <ul class="fa-ul ">
            <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i> Home</a></li>
            <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i> About</a></li>
            <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i> Admission form</a></li>
            <li><a href="#" class="text-light"><i class="fa-li fa fa-angle-right"></i> Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <h5>Social Presence</h5>
          <div>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-secondary">
              </i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x fa-inverse text-secondary">
              </i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-linkedin fa-stack-1x fa-inverse text-secondary">
              </i>
            </span>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x fa-inverse text-secondary">
              </i>
            </span>

          </div>
        </div>

        <div class="col-lg-3">
          <h5>Subscribe Now</h5>
          <form action="" class="action">
            <div class="md-form">
              <input type="email" id="emails" class="form-control" placeholder="Your Email" />
              <label for="email-s"></label>
            </div>
            <button class="btn btn-block btn-dark btn-sm">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>

<section class="py-2 bg-dark text-light">
  <div class="container-fluid">
    Copyright 2022 - 2023 All rights reserved. <a href="#" class="text-warning"> Maskan</a>
  </div>
</section>
<?php include('footer.php') ?>