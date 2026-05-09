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
    <div class="container">
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
        <marquee> <h1>🛡️Online Safety Campaign🛡️</h1> </marquee>
      
      
      </header>
    
      <main>
      <section id="contact" class="web-service  scale-in-hor-left">
        <h2>👨🏻‍⚖️Legislation and Guidance🧭⚖️</h2>
        <p>Understanding the legal framework and best practices surrounding online safety is crucial for individuals and organizations alike. This section provides an overview of relevant legislation and guidance to help you stay compliant and informed.</p>
        <marquee behavior="" direction=""><p>🏛👨🏻‍⚖️⚖</p></marquee>
      </section><br><br>
      <center>
      <section id="image"  class="scale-in-center">
        <img src="img/l3.gif" alt="Legislation Image">
      </section>
      </center>
      

      <section id="legislation" class="popular-apps">
        <marquee behavior="" direction=""><h2 >Relevant Legislation</h2></marquee>
        <p>The following pieces of legislation play a significant role in ensuring online safety and regulating internet activities:</p>
        <marquee><ul>
            <li><strong>General Data Protection Regulation (GDPR)</strong>: A regulation in EU law on data protection and privacy in the European Union and the European Economic Area. It also addresses the transfer of personal data outside the EU and EEA areas.</li>
            <li><strong>Children's Online Privacy Protection Act (COPPA)</strong>: A U.S. federal law designed to protect the privacy of children under 13 by requiring parental consent for the collection or use of any personal information of young internet users.</li>
            <li><strong>Cybersecurity Information Sharing Act (CISA)</strong>: A U.S. federal law that aims to improve cybersecurity by facilitating information sharing about cyber threats between the government and the private sector.</li>
            <li><strong>Electronic Communications Privacy Act (ECPA)</strong>: A U.S. federal law that sets out provisions for access, use, disclosure, interception, and privacy protections of electronic communications.</li>
            <li><strong>Online Safety Bill (UK)</strong>: Proposed legislation aimed at increasing regulation of content on the internet to protect users from harmful content.</li>
        </ul></marquee>
      </section>

      <section id="legislation" class="stay-safe-online">
        <h2>Best Practice Guidance</h2>
        <img src="img/l1.jpg" alt="Best Practice Guidance Image">
        <p>To complement legal compliance, following best practice guidance ensures a safer online environment. Here are some recommendations:</p>
        <h3>1. Privacy and Data Protection</h3>
        <ul>
            <li>Implement robust privacy policies and regularly review them to ensure they comply with current laws.</li>
            <li>Educate users on the importance of strong, unique passwords and the use of multi-factor authentication.</li>
            <li>Ensure that data encryption is used for sensitive information both in transit and at rest.</li>
        </ul>

        <h3>2. Safe Online Interactions</h3>
        <ul>
            <li>Promote respectful and positive interactions online through community guidelines and moderation practices.</li>
            <li>Provide clear reporting mechanisms for users to report inappropriate or harmful behavior.</li>
        </ul>

        <h3>3. Cybersecurity Measures</h3>
        <ul>
            <li>Regularly update software and systems to protect against the latest threats.</li>
            <li>Conduct regular security audits and vulnerability assessments.</li>
            <li>Educate employees and users on recognizing and avoiding phishing attempts and other cyber threats.</li>
        </ul>

        <h3>4. Education and Awareness</h3>
        <ul>
            <li>Develop and disseminate educational materials on online safety topics.</li>
            <li>Host workshops, webinars, and training sessions to raise awareness about online risks and safety practices.</li>
            <li>Encourage open dialogue about online safety within families, schools, and communities.</li>
        </ul>
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
    </div>
  </body>
</html>
