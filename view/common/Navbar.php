<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sticky Navbar</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f4f4f4;
    }

    /* Navbar */
    .navbar {
      position: sticky;
      top: 0;
      z-index: 1000;
      background-color: #ffffff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Logo */
    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #6a0dad; /* Purple */
    }

    /* Navbar Center */
    .nav-center {
      display: flex;
      gap: 20px;
    }

    .dropdown {
      position: relative;
      cursor: pointer;
    }

    .dropdown > a {
      text-decoration: none;
      color: #333;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .dropdown > a:hover {
      color: #6a0dad;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #ffffff;
      min-width: 150px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      z-index: 999;
    }

    .dropdown-content a {
      color: #333;
      padding: 10px;
      display: block;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
      color: #6a0dad;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Contact Button */
    .contact-btn {
      background-color: #6a0dad;
      color: #ffffff;
      padding: 8px 15px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .contact-btn:hover {
      background-color: #550a8a;
    }

    /* Responsive Navbar */
    @media screen and (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-center {
        flex-direction: column;
        width: 100%;
        margin-top: 10px;
      }

      .dropdown-content {
        position: static;
        box-shadow: none;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <!-- Logo -->
    <div class="logo">iLanding</div>

    <!-- Dropdown Links -->
    <div class="nav-center">
      <div class="dropdown">
        <a href="#">Dropdown 1 &#9662;</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">Dropdown 2 &#9662;</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#">Dropdown 3 &#9662;</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </div>

    <!-- Contact Button -->
    <a href="#" class="contact-btn">Contact</a>
  </nav>
</body>
</html>
