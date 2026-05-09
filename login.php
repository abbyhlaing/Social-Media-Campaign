<!DOCTYPE html>
<html lang="en">
  <?php 
        session_start();
        if(isset($_SESSION['attempt_again']))
        {
            $now = time();
            if($now >= $_SESSION['attempt_again'])
            {
              unset($_SESSION['attempt']);
              unset($_SESSION['attempt_again']);
              unset($_SESSION['msg']);
              unset($_SESSION['check']);
            }
        }
    ?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  </head>
  <body>
  <nav class="colchange  navbar navbar-expand-lg navbar-light bg-light  scale-up-hor-center">
        <div class="container-fluid">
            <img src="img/logo.jpg" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="binformation.php">Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blegislation.php">Legislation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>

            <a href="registration.php" type="button" class="nav-item  btn btn-light">Register</a>
           
          </div>
        </div>
      </nav>
    <header>
    <marquee> <h1>🔐Online Safety Campaign🔐</h1> </marquee>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact">
        <marquee><h2>🔓 Login 🔓</h2></marquee>
        <?php
            if(isset($_SESSION['msg']))
            {
        ?>
        <div class="alert-msg">
            <?php 
                    echo $_SESSION['msg'];
            ?>
        </div>
        <?php
            }
        ?>

        <!-- Contact Form -->
        <?php
            if(isset($_SESSION['check']) != 1)
            {
        ?><br>
        <form action="login-success.php" method="POST"  class="bounce-in-top">
         
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />

          <label for="message">Password:</label>
          <input type="password" id="email" name="password" required />
        
          <button type="submit">Login</button>
        <?php 

            }
        ?>
        </form>
         
        <br>
         Not a member register <a href="registration.php"> here </a>
        <!-- Privacy Policy Link -->
        <p>
          Before sending a message, please review our
          <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
        </p>
      </section>
    </main>

    <footer>
      <p>You are here: Login</p>
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
