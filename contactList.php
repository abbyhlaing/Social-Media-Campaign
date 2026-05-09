<!DOCTYPE html>
<?php 
    error_reporting(1);
    session_start();
    $email=$_SESSION['email'];

    include('dbconnect.php');

    $sql1="SELECT * from contactus";
    $result=$conn->query($sql1);

    if(isset($_GET['deleteid'])) {
      $did = $_GET['deleteid'];
      $sql = "DELETE FROM contactus WHERE id='$did'";
      if ($conn->query($sql) === TRUE) {
          echo "<div>Delete One Record Successfully</div>";
          header("location:contactlist.php"); // Redirect to refresh the page
          exit();
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
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
    <marquee> <h1 class="bounce-in-top">🛡️Online Safety Campaign🛡️</h1> </marquee>
      
    </header>

    <main>
      <div class="container">
      <section>
      <?php 
          if($result->num_rows>0)
          {
        ?>
        <center>
        <br><marquee direction="right"><h3 class="bounce-in-top">Help/Support List🚨📜</h3></marquee><br>
        <table  class="table table-success table-bordered border-success scale-in-center">
          <tr>
            <th>Id</th>
            <th>Message</th>
            <th>Email</th>
            <th>Date</th>
            <th>Delete</th>
          </tr>
           <?php 
            while($row=$result->fetch_assoc())
           {
           ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['sentdate']; ?></td>
            <td><a href="contactlist.php?deleteid=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a></td>
            
          </tr>
          <?php 
           }
           ?>
        </table>
        </center>
        <?php 
          }
          else{
            echo " There is no data";
          }
        ?>
       
      </section>
      </div>
    </main>
    

    <footer>
      <p>You are here: Help/Support</p>
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
