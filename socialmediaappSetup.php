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
  <?php 

  include("dbconnect.php");

  if(isset($_POST['btnSave']))
  {
     $name=$_POST['name'];
     $link=$_POST['llink'];
     $plink=$_POST['plink']; 

     if(isset($_FILES["logo"]) && $_FILES["logo"]["error"]==0)
     {
       // Real file name
       $filename = $_FILES["logo"]["name"];
       // file path
       $filepath = $_FILES["logo"]["tmp_name"];
     }

     $sql="INSERT INTO socialmediaapps (name,logo,link,privacylink) VALUES ('$name','$filename','$link','$plink') ";
     if($conn->query($sql))
     {
       move_uploaded_file($filepath, "images/".$filename);
       header("location:socialmediaappSetup.php");
     }

  }
  $sql1="SELECT * from socialmediaapps";
  $result=$conn->query($sql1);

  if(isset($_GET['deleteid']))
    {
        $did=$_GET['deleteid'];

        $sql="DELETE from socialmediaapps where id='$did'";
        if ($conn->query($sql)==True)
        {
            echo "<div> Delete One Record Successfully </div>";
            header("location:socialmediaappSetup.php");
        }
    }
  
    
    error_reporting(1);

    if(isset($_GET['editid']))
    {
        $eid=$_GET['editid'];
        $q = "SELECT * from socialmediaapps where id=$eid";
        $data= $conn->query($q);
        $final = mysqli_fetch_array($data);
        
       
    }

   
    if (isset($_POST['btnUpdate'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $link = $_POST['llink'];
      $plink = $_POST['plink']; 
      $filename = '';
  
      if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
        $filename = basename($_FILES['logo']['name']);
        $filepath = $_FILES['logo']['tmp_name'];
        move_uploaded_file($filepath, "images/" . $filename);
      }
  
      // Prepare SQL query to update record
      if ($filename) {
        $stmt = $conn->prepare("UPDATE socialmediaapps SET name = ?, logo = ?, link = ?, privacylink = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $filename, $link, $plink, $id);
      } else {
        $stmt = $conn->prepare("UPDATE socialmediaapps SET name = ?, link = ?, privacylink = ? WHERE id = ?");
        $stmt->bind_param("sssi", $name, $link, $plink, $id);
      }
      $stmt->execute();
      $stmt->close();
      header("Location: socialmediaappSetup.php");
    }
    
    
  ?>
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
        <marquee> <h1>📱Social Media Apps Set up📱</h1> </marquee>
        <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      
      <section id="contact">
        

        <form action="#" method="post" enctype="multipart/form-data" class="bounce-in-top">
          <input type="hidden" name="id" value="<?php echo isset($final['id']) ? $final['id'] : ''; ?>">
          <label for="name">Name:</label>
          <input type="text"  value="<?php echo $final['name'] ?>" name="name" required />

          <label for="name">Logo:</label>
          <input type="file" name="logo" <?php echo isset($final) ? '' : 'required'; ?> />

          <label for="name">Login Link:</label>
          <input type="text"  value="<?php echo $final['link'] ?>" name="llink" required />

          <label for="name">Privacy Setting Link:</label>
          <input type="text"  value="<?php echo $final['privacylink'] ?>" name="plink" required />
          
            <?php
                if (isset($_GET['editid'])) {
            ?>
                <input type="submit" name="btnUpdate"  value="Update" class="btn btn-warning">
            <?php
                 } else {
            ?>
                 <input type="submit" name="btnSave" class="btn btn-success"  value="Save">
            <?php
                }
            ?>

        
        </form>
        <marquee><h2 class="mt-5">🌐 Popular social media apps🌐 </h2></marquee>
        </section>
        
        <hr>
        <?php 
          if($result->num_rows > 0 and !isset($_GET["editid"]))
          {
        ?>
        
        
          <div class="container">
        <table class="table table-success  table-bordered border-success">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Logo</th>
            <th>Login Link</th>
            <th>Privacy Setting Link</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
           <?php 
            while($row=$result->fetch_assoc())
           {
           ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><img src="<?php echo "images\\" . $row['logo']; ?>" ></td>
            <td><?php echo $row['link']; ?></td>
            <td><?php echo $row['privacylink']; ?></td>
            <td><a href="socialmediaappSetup.php? editid= <?php echo $row['id']; ?>" class="btn btn-warning"> Edit</a>  </td>
            <td><a href="socialmediaappSetup.php? deleteid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
           
          </tr>
          <?php 
           }
           ?>
        </table>
        <?php 
          }
          else{
            echo " There is no data";
          }
        ?>
        </div>
      
      
    </main>

    <footer>
      <p>You are here: Social Media Apps Setup</p>
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
