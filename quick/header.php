<?php

echo '<!DOCTYPE html>
<html>
  <head>
      
    <title>'.$name.'</title>
  
    <link rel="stylesheet" href="includes/header_style.css">
    <link href="/images/crest.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <meta charset="UTF-8">    <meta name="description" content="Personal Webpage">
    <meta name="keywords" content="Emerson, Schnipke">
    <meta name="author" content="Emerson Schnipke">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  </head>

  <body>
    
    <div class="footer-fixer">

    <header> 

      <a class="logo" href="index.php">
        <img src="images/DTS_Logo.png"/>
      </a>

      <a class="hamburger" onclick="navFunction()"><img src="images/hamburger.png"></a>

    </header>
<div class="head-nav">
      <nav> 
        <ul class="horizontal-nav">
          <li> <a class="navbar-item" href="index.php">HOME</a> </li>
          <li> <a class="navbar-item" href="about.php">ABOUT</a> </li>
          <li> <a class="navbar-item" href="scholar.php">SCHOLARSHIP</a> </li>
          <li> <a class="navbar-item" href="officers.php">OFFICERS</a> </li>
          <li> <a class="navbar-item" href="events.php">EVENTS</a> </li>
          <li> <a class="navbar-item" href="contact.php">CONTACT</a> </li>
          
        </ul>
      </nav>

    

    <ul class="verticle-nav" id="vnav">
      <li> <a class="verticle-navbar-item" href="index.php">HOME</a> </li>
      <li> <a class="verticle-navbar-item" href="about.php">ABOUT</a> </li>
      <li> <a class="verticle-navbar-item" href="scholar.php">SCHOLARSHIP</a> </li>
      <li> <a class="verticle-navbar-item" href="officers.php">OFFICERS</a> </li>
      <li> <a class="verticle-navbar-item" href="events.php">EVENTS</a> </li>
      <li> <a class="verticle-navbar-item" href="contact.php">CONTACT</a> </li>
    </ul>

    </div>

    <script>
      function navFunction() {
        var x = document.getElementById("vnav");
        if (x.className === "verticle-nav") {
          x.className += " responsive";
        } else {
          x.className = "verticle-nav";
        }
      }
    </script>
   

';