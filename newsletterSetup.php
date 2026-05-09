<!DOCTYPE html>
<?php 
  error_reporting(1);
  session_start();
  $email = $_SESSION['email'];
  include("dbconnect.php");

  if(isset($_POST['btnSave'])) {
    $t = $_POST['title'];
    $c = $_POST['content'];
    $filename = '';
    $filepath = '';

    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
      $filename = $_FILES["image"]["name"];
      $filepath = $_FILES["image"]["tmp_name"];
    }

    $stmt = $conn->prepare("INSERT INTO newsletter (title, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $t, $c, $filename);
    $stmt->execute();
    $stmt->close();

    if ($filename) {
      move_uploaded_file($filepath, "images/".$filename);
    }

    header("Location: newsletterSetup.php");
 }

 $sql1 = "SELECT * FROM newsletter";
 $result = $conn->query($sql1);

 if(isset($_GET['deleteid'])) {
     $did = $_GET['deleteid'];
     $stmt = $conn->prepare("DELETE FROM newsletter WHERE id = ?");
     $stmt->bind_param("i", $did);
     $stmt->execute();
     $stmt->close();
     header("Location: newsletterSetup.php");
 }

 if(isset($_GET['editid'])) {
     $eid = $_GET['editid'];
     $stmt = $conn->prepare("SELECT * FROM newsletter WHERE id = ?");
     $stmt->bind_param("i", $eid);
     $stmt->execute();
     $data = $stmt->get_result();
     $final = $data->fetch_assoc();
     $stmt->close();
 }

 if(isset($_POST['btnUpdate'])) {
  $id = $_POST['id'];
  $t = $_POST['title'];
  $c = $_POST['content'];
  $filename = $_FILES['image']['name'] ? basename($_FILES['image']['name']) : '';

  if ($filename) {
      $filepath = $_FILES['image']['tmp_name'];
      move_uploaded_file($filepath, "images/" . $filename);
  }

  $stmt = $conn->prepare("UPDATE newsletter SET title = ?, content = ?, image = ? WHERE id = ?");
  $stmt->bind_param("sssi", $t, $c, $filename, $id);
  $stmt->execute();
  $stmt->close();
  header("Location: newsletterSetup.php");
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
      <marquee> <h1>🤓Newsletter Setup🤓</h1></marquee>
    </header>

    <main>
      <section id="contact">
        <marquee><h2><img src="img/reading1.png" alt="">  Newsletter  <img src="img/reading1.png" alt=""></h2> </marquee>
        <p class="scale-in-center">Feel free to reach out to us using the form below. We appreciate your feedback and inquiries.</p>

        <!-- Newsletter Form -->
        <form action="newsletterSetup.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo isset($final['id']) ? $final['id'] : ''; ?>">
          <div class="mb-3 bounce-in-top">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="<?php echo isset($final['title']) ? $final['title'] : ''; ?>" required />
          </div>

          <div class="mb-3 bounce-in-top">
            <label for="content" class="form-label">Content:</label>
            <textarea id="content" name="content" class="form-control" rows="4" required><?php echo isset($final['content']) ? $final['content'] : ''; ?></textarea>
          </div>

          <div class="mb-3 bounce-in-top">
            <label for="image" class="form-label">Image:</label>
            <input type="file" id="image" name="image" class="form-control" <?php echo isset($final['image']) ? '' : 'required'; ?> />
            <?php if(isset($final['image'])): ?>
              <img src="images/<?php echo $final['image']; ?>" alt="<?php echo $final['title']; ?>">
            <?php endif; ?>
          </div>

          <?php
            if (isset($_GET['editid'])) {
          ?>
            <input type="submit" name="btnUpdate" value="Update" class="btn btn-warning">
          <?php
            } else {
          ?>
            <input type="submit" name="btnSave" class="btn btn-success" value="Save Newsletter">
          <?php
            }
          ?>
        </form>

        <!-- Privacy Policy Link -->
        <p>Before sending a message, please review our <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.</p>
      </section>

      <?php 
        if($result->num_rows > 0 && !isset($_GET["editid"])) {
      ?>
      <div class="container">
        <marquee class="mt-5"><h2><img src="img/newspaper2.jpg" alt="">  Newsletter List  <img src="img/newspaper2.jpg" alt=""></h2></marquee><br><br>
        <table class="table table-success table-bordered border-success">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Content</th>
              <th>Image</th>
              <th>Publish Date</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['content']; ?></td>
              <td><img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>"></td>
              <td><?php echo $row['publishdate']; ?></td>
              <td>
                <a href="newsletterSetup.php?editid=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
              </td>
              <td>
                <a href="newsletterSetup.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
      <?php 
        } else {
          echo "There is no data";
        }
      ?>
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
