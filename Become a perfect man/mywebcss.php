<?php 
?>
* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    /* Navbar Styling */
    .navbar {
      background-color: #333;
      overflow: hidden;
      padding: 10px 20px;
    }

    .navbar a.logo {
      float: left;
      color: white;
      font-size: 24px;
      text-decoration: none;
      font-weight: bold;
    }

    .navbar ul {
      float: left;
      list-style: none;
    }

    .navbar ul li {
      display: inline;
      padding: 0 15px;
    }

    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-size: 18px;
    }

    .navbar ul li a:hover {
      text-decoration: underline;
    }

    .navbar .search-bar {
      display: inline-block;
      float: right;
    }

    .navbar .search-bar input {
      padding: 8px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
    }

    .navbar .search-bar button {
      padding: 8px 16px;
      background-color: #28a745;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    .navbar .search-bar button:hover {
      background-color: #218838;
    }

    /* Main Content Styling */
    .main-section {
      padding: 20px;
      text-align: center;
    }

    .main-section h1 {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }

    .content-section {
      padding: 20px;
    }

    .content-section h2 {
      font-size: 28px;
      color: #444;
      margin-bottom: 15px;
    }

    .content-section p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }

    /* Search Results Styling */
    .search-result {
      margin: 20px 0;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 5px;
      border: 1px solid #ddd;
    }

    .search-result h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .search-result p {
      font-size: 16px;
      color: #555;
    }

    .search-result a {
      display: inline-block;
      margin-top: 10px;
      color: #28a745;
      font-weight: bold;
      text-decoration: none;
    }

    .search-result a:hover {
      text-decoration: underline;
    }