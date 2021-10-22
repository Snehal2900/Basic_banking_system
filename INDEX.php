﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banking System</title>
    <!-- Bootstrap CDN -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />

    <!-- AOS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body onload="loader()">
    <!-- loader for splash screen -->
    <div id="loading"></div>

    <!--Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.html">SPARKS Bank</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav navbar-right ml-auto">
            <li>
              <a class="nav-link active" aria-current="page" href="./index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./customers.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./transfer.html">Transfer Money</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar ends here  -->

    <!-- here content starts here -->
    <div class="container-fluid hero-content">
      <div class="main row align-items-center">
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
          <h1 class="section-title"
          style="color: #0d11eb; font-weight: bolder; text-align: center">THE HUMAN BANK</h1>
          <h1>
            Easiest Way to
            <span id="sp" class="font-weight-bold">Transfer Money</span>
          </h1>
          <p class="lead muted">
            TRANSFER MONEY
            <span id="sp" class="font-weight-bold">IN SECONDS</span>
          </p>

          <br />
          <br />
          <button
            type="button"
            class="btn btn-primary btn-lg"
            onclick="location.href = './customers.html';"
          >
            Customer Details
          </button>
          <button
            type="button"
            class="btn btn-primary btn-lg"
            onclick="location.href = './transfer.html';"
          >
            Transfer Money
          </button>
        </div>
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
          <div class="hero-img-div">
            <img
              class="hero-img"
              src="assets/media/bank.jpg"
              alt="img-showing-money-transfer"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- here content ends here -->

    <!--===== ABOUT =====-->
    <section class="about section" id="about">
      <h2
        class="section-title"
        style="color: #0b0d0e; font-weight: bolder; text-align: center"
      >
        About
      </h2>

      <div class="about__container bd-grid">
        <div class="about__img">
          <img
            src="assets/media/money.jpg"
            alt=""
            style="
              width: 450px;
              height: 250px;
              border-radius: 14%;
              margin-left: 200px;
              display: inline-block;
              vertical-align: middle;
              float: left;
            "
          />
        </div>
        <div>
          <h3
            class="about__subtitle"
            style="margin-left: 700px; margin-top: 50px; font-weight: bolder"
          >
            Welcome to Sparks Bank
          </h3>
          
          <p class="about__text" style="margin-left: 700px">Always at your Service!</p>

          <p class="about__text" style="margin-left: 700px">
            We provide loans, accept deposits and best results!
            </p>
          <p class="about__text" style="margin-left: 700px">EASY TRANSACTION IN SECONDS!</p>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer
      class="bg-light text-center text-lg-start"
      style="margin-top: 300px"
      margin-top="20px"
    >
      <!-- Grid container -->

      <!-- Copyright -->
      <div
        class="text-center p-3"
        style="background-color: rgb(195, 211, 238)"
      >
        © 2021 Copyright:
        <p class="love">
          Made with <i class="fa fa-heart pulse"></i> by Snehal
        </p>
      </div>
      <!-- Copyright -->
    </footer>

    <!-- spalsh screen js -->
    <script>
      var preloader = document.getElementById("loading");
      function loader() {
        preloader.style.display = "none";
      }
    </script>

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({ 
        duration: 700,
      });
    </script>
  </body>
</html>
