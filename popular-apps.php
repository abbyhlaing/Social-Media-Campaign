<!DOCTYPE html>
<?php 
  session_start();
  include("dbconnect.php");

  // Check if the email session variable is set
  if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
  }

  $email = $_SESSION['email'];
  
  // Define $result outside of the conditional to avoid scope issues
  $result = null;

  if (isset($_POST['btnSearch'])) {
    $search = $conn->real_escape_string($_POST['txtSearch']);
    $sql = "SELECT * FROM socialmediaapps WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);
  } else {
    $sql = "SELECT * FROM socialmediaapps";
    $result = $conn->query($sql);
  }
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
      <marquee> <h1>📢Most Popular Social Media Apps📢</h1> </marquee>
    </header>

    <main>
      <center>
        <section>
          <form action="" method="POST" class="bounce-in-top">
            <input type="text" id="search" name="txtSearch" placeholder="...Search popular app..." />
            <button type="submit" id="btn-search" name="btnSearch">Search</button>
          </form>
        </section>
      </center>
      <section id="popular-apps">
        
        <div class="app-warp">
          <?php 
          if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
          ?>
          <div class="web-servicepp  scale-in-center">
            <h3><?php echo $row['name']; ?></h3>
            <p><img src="<?php echo "images/" . $row['logo']; ?>"></p>
            <p>
              <a href="<?php echo $row['link']; ?>"> <?php echo $row['name']; ?> Login </a>
            </p>
            <p><strong><a href="<?php echo $row['privacylink']; ?>"> Privacy Settings </a></strong> </p>
          </div>
          <?php 
            }
          } else {
            echo "<p>No results found</p>";
          }
          ?>
        </div>
      </section>
    </main>

    <footer>
      <p>You are here: Popular Apps</p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <a href="https://www.facebook.com/">Facebook</a>
        <a href="https://www.twitter.com/">Twitter</a>
        <a href="https://www.instagram.com/">Instagram</a>
      </div>
    </footer>
  </body>
</html>
