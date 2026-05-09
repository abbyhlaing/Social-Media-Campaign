<!DOCTYPE html>
<?php 
error_reporting(1);
session_start();
$email = $_SESSION['email'];
include('dbconnect.php'); // Include database connection

// Fetch all records from the howparenthelp table
$sql = "SELECT * FROM howparenthelp";
$result = $conn->query($sql);
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
    <marquee> <h1>🤱Online Safety Campaign🤱</h1> </marquee>
    
    <!-- Custom Cursors and 3D Illustrations can be added here -->
</header>

<main>
    <section id="contact-p">
        <marquee><h2>👨‍👩‍👧‍👦Parent Help👨‍👩‍👧‍👦</h2></marquee>
        <div class="help-warp">
        <?php 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <!-- Service -->
        <div class="web-servicep  scale-in-center">
            <div class="images">
                <p><img src="<?php echo $row['image1']; ?>" ></p>
                <p><img src="<?php echo $row['image2']; ?>"  ></p>
            </div>
            <p><?php echo $row['description']; ?></>
            
        </div>
        <?php 
            }
        } else {
            echo "<p>No data available</p>";
        }
        ?>
        </div>
        
        <div class="web-service">
        <h2>How Parents Can Help</h2>
        <p>
          Discover top tips for parents to support healthy teen use of social media.
        </p>
        <ul>
          <li>Stay involved and communicate openly with your teenager.</li>
          <li>Set boundaries and establish clear rules for social media use.</li>
          <li>Teach the importance of privacy settings and online etiquette.</li>
          <li>Monitor your teen's online activities without invading their privacy.</li>
          <li>Encourage a healthy balance between online and offline activities.</li>
        </ul>
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
