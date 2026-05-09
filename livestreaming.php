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
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="information.php">Information</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Campaigns
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="popular-apps.php">Popular Apps</a></li>
                  <li><a class="dropdown-item" href="parents-help.php">Parents Help</a></li>
                  <li><a class="dropdown-item" href="livestreaming.php">Livestreaming</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="legislation.php">Legislation</a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
</nav>
    <header>
    <marquee> <h1>Online Safety Campaign</h1> </marquee>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>
    <header class="bg-primary text-white text-center py-5   bounce-in-top">
        <h1 class="scale-in-center">Livestreaming</h1>
        <p class="scale-in-center">Explore an overview of livestreaming and learn how it can be done in a safe environment.</p>
    </header>
    <div class="container">
    <main class="container my-5">
        <section class="scale-in-center">
            <h2>Overview of Livestreaming 🎬 🎥 🔴 ▶</h2>
            <p>Livestreaming is a popular way for individuals to share content in real-time. Here are some tips to ensure a safe livestreaming experience:</p>
            <ul>
                <li>Be mindful of the content you share – avoid sharing personal information.🙅‍♂️</li>
                <li>Use privacy settings to control who can view your livestreams.👁️</li>
                <li>Interact responsibly with viewers and be aware of potential risks.🧐</li>
                <li>Report and block any inappropriate comments or behavior.⚠️</li>
                <li>Educate yourself on the platform's guidelines and community standards.🎓🧠</li>
            </ul>
        </section>
        <center>
        <section class="my-5">
            <h2>Demonstration Video</h2>
            <p>Watch this video to learn more about safe livestreaming practices:</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/X9Htg8V3eik?si=mTl6JkSf4ou0_Ztj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>
        </center>
    </main>
    </div>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFZJ8j/eE3mJWRpCTh/s4W72U9mso1Bwt6PjH7fIvZWj+8blwjrskeMj0" crossorigin="anonymous"></script>

  </body>
</html>
