<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maintenance Page</title>
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      color: #333;
      text-align: center;
      overflow: hidden;
      height: 100vh;
      margin: 0;
      position: relative;
    }

    /* Text Content */
    h1 {
      font-size: 2.5rem;
      color: #5a3f91;
      margin-top: 10%;
    }

    p {
      font-size: 1.1rem;
      margin: 10px 20px;
      color: #6e5d8b;
    }

    /* Abstract Background */
    .background {
      position: absolute;
      top: -0px;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    /* Shapes */
    .circle {
      position: absolute;
      background-color: #e2d8f2;
      border-radius: 50%;
      opacity: 0.6;
    }

    .circle.large {
      width: 400px;
      height: 400px;
      top: -100px;
      left: -100px;
    }

    .circle.medium {
      width: 200px;
      height: 200px;
      bottom: 50px;
      right: 50px;
    }

    .circle.small {
      width: 100px;
      height: 100px;
      top: 50%;
      left: 70%;
    }

    .wave {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 40%;
      background: linear-gradient(to top, #5a3f91, transparent);
      border-top-left-radius: 50% 30px;
      border-top-right-radius: 50% 30px;
    }

    /* Responsive Media Queries */
    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
      }

      p {
        font-size: 1rem;
      }

      .circle.large {
        width: 300px;
        height: 300px;
      }

      .circle.medium {
        width: 150px;
        height: 150px;
      }
    }
  </style>
</head>
<body>
      <!-- Navbar -->
      <nav class="navbar">
        <div class="logo">Logo</div>
        <ul class="nav-links" id="nav-links">
            <li><a href="/WowGlobal/">Home</a></li>
            <li class="dropdown">
                <a href="/error">Services</a>
                <ul class="dropdown-menu">
                    <li><a href="/WowGlobal/error">Free Counselling</a></li>
                    <li><a href="/WowGlobal/error">Application Process</a></li>
                    <li><a href="/WowGlobal/error">Financial Aid</a></li>
                    <li><a href="/WowGlobal/error">Visa Assessment</a></li>
                    <li><a href="/WowGlobal/error">Interview Preparation</a></li>
                    <li><a href="/WowGlobal/error">Air Ticket</a></li>
                    <li><a href="/WowGlobal/error">Post Visa Services</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="/error">Coaching</a>
                <ul class="dropdown-menu">
                    <li><a href="/WowGlobal/error">IELTS Academic / IELTS General</a></li>
                    <li><a href="/WowGlobal/error">GRE</a></li>
                    <li><a href="/WowGlobal/error">PTE</a></li>
                    <li><a href="/WowGlobal/error">Duolingo English Test</a></li>
                    <li><a href="/WowGlobal/error">SAT</a></li>
                    <li><a href="/WowGlobal/error">TOEFL - IBT</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="/error">Countries</a>
                <ul class="dropdown-menu">
                    <li><a href="/WowGlobal/error">USA</a></li>
                    <li><a href="/WowGlobal/error">CANADA</a></li>
                    <li><a href="/WowGlobal/error">UK</a></li>
                    <li><a href="/WowGlobal/error">Australia</a></li>
                    <li><a href="/WowGlobal/error">New Zealand</a></li>
                    <li><a href="/WowGlobal/error">Germany</a></li>
                </ul>
            </li>
        </ul>
        <div class="cta-button">
            <button>Get in Touch</button>
        </div>
        <div class="hamburger" id="hamburger">
            &#9776;
        </div>
    </nav>
  <!-- Content -->
  <h1>Good things are on the way</h1>
  <p>Hi there! Our site is undergoing a maintenance right now.<br>
     Please come back later. Thank you for your patience.</p>

  <!-- Background Shapes -->
  <div class="background">
    <div class="circle large"></div>
    <div class="circle medium"></div>
    <div class="circle small"></div>
    <div class="wave"></div>
  </div>
</body>
</html>
