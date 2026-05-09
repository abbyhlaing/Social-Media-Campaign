<!DOCTYPE html>
<?php 
  error_reporting(1);
  session_start();
  $email = $_SESSION['email'];

  include("dbconnect.php");

  $sub = 0;
  $sql1 = "SELECT * from member WHERE email='$email'";
  $resSub = $conn->query($sql1);
  if ($resSub->num_rows > 0) {
    $row1 = $resSub->fetch_assoc();
    $sub = $row1['subscription'];
  }

  if (isset($_POST['btnSub'])) {
    $sub = $_POST['sub'];
    $sql3 = "UPDATE member SET subscription = '$sub' WHERE email= '$email'";    
    if ($conn->query($sql3) == TRUE) {
      echo "Newsletter subscribed";
      header("location:home.php");
    }
  }

  if (isset($_POST['btnSearch'])) {
    $search = $conn->real_escape_string($_POST['txtSearch']);
    $sql = "SELECT * FROM services WHERE title LIKE '%$search%'";
    $sql2 = "SELECT * FROM newsletter WHERE title LIKE '%$search%'";
  } else {
    $sql = "SELECT * FROM services";
    $sql2 = "SELECT * FROM newsletter";
  }
  $resService = $conn->query($sql);
  $resNews = $conn->query($sql2);
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
    <header>
      <marquee  direction="right"> <h1>🤗Welcome to Our Campaign🤗</h1> </marquee>
    </header>

    <main>
      <section id="home">
        <center>
          <form action="" method="POST"  class="bounce-in-top">
            <input type="text" id="search" name="txtSearch" placeholder="Search..." />
            <button type="submit" id="btn-search" name="btnSearch">Search</button>
          </form>
        </center>
        <marquee><p> 💪  Empowering teenagers to navigate the digital world safely  💪 </p></marquee>
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

        <section id="contact">
          <?php 
            if ($sub == 1) {
          ?>
          <br><br>
          <marquee><p class="news"> <img src="img\reading1.png" alt=""> News <img src="img\reading1.png" alt=""></p></marquee>
          <?php 
            if ($resNews->num_rows > 0) {
              while ($row = $resNews->fetch_assoc()) {
          ?>
          <!--  Service 1 -->
          <div class="web-service">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['content']; ?></p>
            <center><p class="new-img"><img src="<?php echo "images/" . $row['image']; ?>"></p></center>
            <p><strong><?php echo $row['publishdate']; ?></strong></p>
          </div>
          <?php 
              }
            }
          } else {
          ?>
          <!-- Contact Form -->
          <form action="#" method="POST">
            <label for="name">Newsletter Subscription:</label>
            <input type="radio" id="name" name="sub" value="1" required />Yes
            <input type="radio" id="name" name="sub" value="0" required />No
            <button type="submit" name="btnSub">Subscribe</button>
          </form>
          <?php 
          }
          ?>
        </section>
        <!-- Most Popular Social Media Apps -->
        <section class="popular-apps">
          <h3>Most Popular Social Media Apps</h3>
          <ul>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Snapchat</li>
            <li>TikTok</li>
            <li>WhatsApp</li>
          </ul>
        </section>

        <!-- How to Stay Safe Online -->
        <section class="stay-safe-online">
          <h3>How to Stay Safe Online</h3>
          <p>Follow these tips to ensure a secure online experience:</p>
          <ul>
            <li>Set strong, unique passwords</li>
            <li>Enable two-factor authentication</li>
            <li>Be cautious about sharing personal information</li>
            <li>Regularly update privacy settings</li>
            <li>Use antivirus software</li>
            <li>Verify the authenticity of online information</li>
          </ul>
        </section>

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

      </section>
    </main>

    <footer>
      <p>You are here: Home: <?php echo $email; ?></p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <a href="https://www.facebook.com/">Facebook</a>
        <a href="https://www.twitter.com/">Twitter</a>
        <a href="https://www.instagram.com/">Instagram</a>
      </div>
    </footer>
  </body>
</html>
