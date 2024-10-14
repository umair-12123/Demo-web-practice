<?php
// You can add any PHP code here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Become a Perfect Man</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="navbar.css">
  <style>
   .navbar-brand img {
    margin-top: 5px;
    width: 200px; /* Change this value as needed */
    height: auto; /* Keeps aspect ratio */
  }

  /* Custom navbar height */
  .navbar {
    height: 120px; /* Adjust this value for the height */
    padding: 0.5rem 1rem; /* Adjust padding for better alignment */
  }

  /* .navbar .navbar-nav .nav-link {
    line-height: 120px; 
    padding: 20px;/* Align the links vertically within the navbar height */
  } */
  /* Custom styles for the navbar-toggler */
.navbar-toggler {
    border-color: rgba(0, 0, 0, 0.1); /* Makes the button border visible */
}

.navbar-toggler-icon {
    background-color: black; /* Changes the toggler icon color */
}

  </style>
</head>
<body>
<div class="container-fluid">
  <!-- Bootstrap Navbar -->
  <nav class="navbar navbar-expand-lg bg-white">
    <a class="navbar-brand" href="#home">
      <img src="./logo/Screenshot from 2024-09-15 20-02-16.png" alt="Perfect Man Logo" width="40" height="40" class="d-inline-block align-top">  
    </a>
    
    <!-- Toggler button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#habit-tracker">Habit Tracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#success-stories">Success Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#life-strategies">Life Strategies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#quran-hadith">Quran & Hadith</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>

      <!-- Search Bar -->
      <form class="form-inline my-2 my-lg-0" action="/search.php" method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query" required>
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <a class="nav-link" href="#contact">Login/SignUp</a>
    </div>
  </nav>

  <!-- Main Section -->
  <div class="main-section text-center" id="home">
    <h1>Welcome to Become a Perfect Man</h1>
    <p>Your journey to a better self begins here.</p>
  </div>

  <!-- Success Stories Section -->
  <div class="content-section" id="success-stories">
    <h2>Success Stories</h2>
    <p>Read inspiring stories of individuals who transformed their lives and achieved greatness.</p>
  </div>

  <!-- Life Strategies Section -->
  <div class="content-section" id="life-strategies">
    <h2>Life Improvement Strategies</h2>
    <p>Learn proven strategies from the Quran and Hadith for a balanced and fulfilling life.</p>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
