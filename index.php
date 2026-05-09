<!DOCTYPE html>
<?php
include("dbconnect.php");

if (isset($_POST['btnSearch'])) {
    $search = $conn->real_escape_string($_POST['txtSearch']);
    $sql = "SELECT * FROM services WHERE title LIKE '%$search%'";
  } else {
    $sql = "SELECT * FROM services";
  }
  $resService = $conn->query($sql);

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
<marquee> <h1>🛡️Online Safety Campaign🛡️</h1> </marquee>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
</header>


<br><br>


    <center>
    <div class="slider scale-in-center">
        <img src="img\s2.gif" alt="">
    </div>
    </center>
    <center>
          <form action="" method="POST"  class="bounce-in-top">
            <input type="text" id="search" name="txtSearch" placeholder="Search...services" />
            <button type="submit" id="btn-search" name="btnSearch">Search</button>
          </form>
        </center>
        <main>

        <section id="home">
    <section id="contact">
    <!-- Web Service 1 -->
    <div class="web-service">
        <marquee><h3>🥳Online Safety Workshops🥳</h3></marquee>
        <p>
            Join our interactive workshops to learn about online safety and
            responsible social media use.
        </p>
        <p><strong>Date:</strong> November 15, 2024</p>
        <p><strong>Location:</strong> Virtual Event📣🎉</p>
        <a href="registration.php">Register Now</a>

    </div>

    <!-- Web Service 2 -->
    <div class="web-service">
    <marquee  direction="right"><h3>🕵Anonymous Helpline🕵</h3></marquee>
        <p>
            Need assistance or advice? Connect with our anonymous helpline for
            support regarding online challenges.
        </p>
        <p><strong>Helpline:</strong> 1-800-123-4567</p>
        <p><strong>Email:</strong> help@onlinesafety.org 💬💬</p>
    </div>

    <!-- Most Popular Social Media Apps -->
    <section class="popular-apps">
    <marquee><h3>🌐Most Popular Social Media Apps🌐</h3></marquee>
        <ul>
            <li>Instagram📱👀</li>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Snapchat</li>
            <li>TikTok</li>
            <li>WhatsApp</li>
            <!-- Add more social media apps as needed -->
        </ul>
    </section>

    <!-- How to Stay Safe Online -->
    <section class="stay-safe-online">
    <marquee direction="right"> <h3>🛡️⚔️How to Stay Safe Online⚔️🛡️</h3></marquee>
        <p>Follow these tips to ensure a secure online experience:</p>
        <ul>
            <li>Set strong, unique passwords🔒</li>
            <li>Enable two-factor authentication🔒</li>
            <li>Be cautious about sharing personal information🔒</li>
            <li>Regularly update privacy settings🔒</li>
            <li>Use antivirus software🔒</li>
            <li>Verify the authenticity of online information🔒</li>
        </ul>
    </section><br>
    <section class="stay-safe-online">
    <marquee direction="right"> <h3>🧠💡🤓🤔💪🏻teenager brain and social media🧠💡🤓🤔💪🏻</h3></marquee>
        <p>Follow these tips to ensure a secure online experience:</p>
        <ul>
            <li>Teenagers' brains are particularly vulnerable to the effects of social media, as they are still developing.</li>
            <li>Frequent social media use can disrupt sleep, reduce attention spans, and lead to addictive behaviors due to dopamine release.</li>
            <li>Excessive use is linked to higher levels of anxiety, depression, and low self-esteem from constant comparisons to peers online.</li>
            <li>Educating teens about these impacts can encourage healthier social media habits and improved mental well-being.</li>
            <li>Join our campaign to spread awareness and promote positive social media practices among teenagers.</li>
            <li>Let's support our youth in fostering a balanced and healthy digital life! #MindfulTeensOnline</li>
        </ul>

    </section><br>
    <marquee><h2>🛠️Services👩‍💻</h2></marquee><br>
    </section>
    <div class="app-warp">
          <?php 
            if ($resService->num_rows > 0) {
              while ($rowSer = $resService->fetch_assoc()) {
          ?>
          <!--  Service 1 -->
          <div class="web-service  scale-in-center">
            <h3><?php echo $rowSer['title']; ?></h3>
            <p><?php echo $rowSer['description']; ?></p>
            <p><strong><?php echo $rowSer['info']; ?></strong></p>
            <p><strong><?php echo $rowSer['createdat']; ?></strong></p>
            <a href="registration.php">Register Now</a>
          </div>
          <?php 
              }
            }
          ?>
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
