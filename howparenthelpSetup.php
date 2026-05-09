<!DOCTYPE html>
<?php 
error_reporting(1);
session_start();
$email = $_SESSION['email'];
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
<marquee> <h1>🤱🏻How Parent Help Setup🤱🏻</h1> </marquee>
      
    
</header>

<?php
include('dbconnect.php');

// Handle form submission to insert new record
if(isset($_POST['btnSave'])) {
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $target_dir = "images/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);

    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);

    $sql = "INSERT INTO howparenthelp (description, image1, image2) VALUES ('$description', '$target_file1', '$target_file2')";
    if($conn->query($sql) === TRUE) {
        echo "Insert services successfully";
        header("location:howparenthelpSetup.php"); // Redirect to refresh the page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle deletion of records
if(isset($_GET['deleteid'])) {
    $did = $_GET['deleteid'];
    $sql = "DELETE FROM howparenthelp WHERE id='$did'";
    if ($conn->query($sql) === TRUE) {
        echo "<div>Delete One Record Successfully</div>";
        header("location:howparenthelpSetup.php"); // Redirect to refresh the page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all records from the howparenthelp table
$sql1 = "SELECT * FROM howparenthelp";
$result = $conn->query($sql1);

// Handle editing of records
if(isset($_GET['editid'])) {
    $eid = $_GET['editid'];
    $q = "SELECT * FROM howparenthelp WHERE id=$eid";
    $data = $conn->query($q);
    $final = $data->fetch_assoc();
}

// Handle update of records
if(isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $target_dir = "images/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);

    if(!empty($_FILES['image1']['name'])) {
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
        $q2 = "UPDATE howparenthelp SET description='$description', image1='$target_file1' WHERE id='$id'";
    }

    if(!empty($_FILES['image2']['name'])) {
        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
        $q2 = "UPDATE howparenthelp SET description='$description', image2='$target_file2' WHERE id='$id'";
    }

    if ($conn->query($q2) === TRUE) {
        header("location:howparenthelpSetup.php"); // Redirect to refresh the page
        exit();
    } else {
        echo "Error: " . $q2 . "<br>" . $conn->error;
    }
}
?>

<main>
    <section id="contact">
        <marquee ><h2>🤝HowParentHelp🤝</h2></marquee>
        <p class="scale-in-center">Use the form below to add or update entries for HowParentHelp.</p>

        <!-- Form for Adding/Updating Entries -->
        <form action="howparenthelpSetup.php" method="post" enctype="multipart/form-data" class="bounce-in-top">
            <input type="hidden" name="id" value="<?php echo isset($final['id']) ? $final['id'] : ''; ?>">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required><?php echo isset($final['description']) ? $final['description'] : ''; ?></textarea>

            <label for="image1">Image 1:</label>
         <input type="file" id="image1" name="image1" <?php echo isset($final['image1']) ? '' : 'required'; ?> />

            <label for="image2">Image 2:</label>
            <input type="file" id="image2" name="image2" <?php echo isset($final['image2']) ? '' : 'required'; ?> />

            <?php if (isset($_GET['editid'])) : ?>
                <input type="submit" name="btnUpdate" value="Update" class="btn btn-warning">
            <?php else : ?>
                <input type="submit" name="btnSave" class="btn btn-success" value="Save">
            <?php endif; ?>
        </form>
        <marquee class="mt-5 mb-3"><h2>🧾How Parent Help List🧾</h2></marquee>
        </section>
        <!-- Display the list if there are records -->
        <?php if($result->num_rows > 0) : ?>
            
            <div class="container">
            <table class="table table-success table-bordered border-success">
                <tr>
                    <th>Id</th>
                    <th>Description</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Edit</th>
                    <th>Detele</th>
                </tr>
                <?php while($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><img src="<?php echo $row['image1']; ?>" alt="Image 1"></td>
                        <td><img src="<?php echo $row['image2']; ?>" alt="Image 2"></td>
                        <td><a href="howparenthelpSetup.php?editid=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="howparenthelpSetup.php?deleteid=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a></td>
                        
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else : ?>
            <p>There is no data</p>
        <?php endif; ?>
        
        </div>
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

