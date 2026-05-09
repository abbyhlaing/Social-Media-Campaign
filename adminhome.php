<!DOCTYPE html>
<?php 
error_reporting(1);
  session_start();
  $email=$_SESSION['email'];

  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light  scale-up-hor-center">
        <div class="container-fluid">
            <img src="img/logo.jpg" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="adminhome.php">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    To-Set-Up
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="servicesSetup.php">Services</a></li>
                  <li><a class="dropdown-item" href="newsletterSetup.php">NewsLetter</a></li>
                  <li><a class="dropdown-item" href="howparenthelpSetup.php">HowParentHelp</a></li>
                  <li><a class="dropdown-item" href="socialmediaappSetup.php">SocialMediaApps</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactList.php" >Help/Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="MemberList.php" >MemberList</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" >Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    <header>
    <marquee> <h1>🌐Online Safety Campaign🌐</h1> </marquee>
      
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
    <section id="contact-p">
    <div class="container mt-5">
        <center><h1 class="mb-4  scale-in-hor-left">📒Admin Site Home Page Guide📒</h1></center>
        <p class="scale-in-hor-left">Welcome to the Admin Dashboard. Here, you can manage various aspects of the website, including services, popular apps, parent information, newsletters, contact lists, and member registrations. Follow the instructions below to perform the necessary actions.</p>
      </section>
      <section id="contact">
    
        
        <div class="web-service bounce-in-top">
        <h2>Manage Services</h2>
        <p>To add, update, or delete services:</p>
        <ul>
            <li>Click the <strong>Services</strong> button below to access the Services management page.</li>
            <li>On this page, you can add new services, update existing ones, or delete services that are no longer needed.</li>
            <li>These services will be displayed on both the non-login page and the user login home page.</li>
        </ul>
        <button  onclick="location.href='servicesSetup.php'">Services</button>
        </div>


        <div class="web-service">
        <h2 class="mt-4">Manage Popular Apps</h2>
        <p>To add, update, or delete popular apps:</p>
        <ul>
            <li>Click the <strong>Popular Apps</strong> button below to access the Popular Apps management page.</li>
            <li>Here, you can manage the CRUD operations for popular apps that will be displayed on the Popular Apps page.</li>
        </ul>
        <button  onclick="location.href='socialmediaappSetup.php'">Popular Apps</button>
        </div>


        <div class="web-service">
        <h2 class="mt-4">Manage Parent Help Information</h2>
        <p>To set up or manage CRUD operations for parent help information:</p>
        <ul>
            <li>Click the <strong>Parent Help</strong> button below to access the Parent Help Information management page.</li>
            <li>The information you manage here will be displayed on the Parent Help page.</li>
        </ul>
        <button  onclick="location.href='howparenthelpSetup.php'">Parent Help</button>
        </div>
        
        
        <div class="web-service">
        <h2 class="mt-4">Manage Newsletters</h2>
        <p>To insert, update, or delete newsletter content:</p>
        <ul>
            <li>Click the <strong>Newsletters</strong> button below to access the Newsletter management page.</li>
            <li>Note: The newsletter content will only be displayed to users who have subscribed to the newsletter.</li>
        </ul>
        <button onclick="location.href='newsletterSetup.php'">Newsletters</button>
        </div>
        
        
        <div class="web-service">
        <h2 class="mt-4">Manage Contact List</h2>
        <p>To view and manage the contact list:</p>
        <ul>
            <li>Click the <strong>Contact List</strong> button below to access the Contact List management page.</li>
            <li>This section contains messages sent by users seeking help or support.</li>
        </ul>
        <button  onclick="location.href='contactList.php'">Contact List</button>
        </div>
        
        
        <div class="web-service">
        <h2 class="mt-4">Manage Member List</h2>
        <p>To view and manage the list of registered members:</p>
        <ul>
            <li>Click the <strong>Member List</strong> button below to access the Member List management page.</li>
            <li>This page displays the details of users who have registered on the site.</li>
        </ul>
        <button  onclick="location.href='MemberList.php'">Member List</button>
        </div>
    </div>
    </section>

    

    </main>

    <footer>
      <p>You are here: Home</p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <!-- Add social media buttons with relevant links -->
        <a href="https://www.facebook.com/">Facebook</a>
        <a href="https://www.twitter.com/">Twitter</a>
        <a href="https://www.instagram.com/">Instagram</a>
      </div>
    </footer>
  </body>
</html>
