
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us !</title>
    <script src = "tabs.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <!-- Title -->
  <h1 class = "greenText"><font size="50">Seeds 4 Life</font></h1>
  <!-- Pages -->
    <div class="wrapper">
    <nav class="tabs">
      <div class="selector"></div>
      <a href="index.html">Home</a>
      <a href="services.html">Services</a>
      <a href="application.html"></i>Apply</a>
      <a href="events.html">Upcoming Events 2018</a>
      <a href="contact.php">Contact Us </a>
      <a href="donate.html">Donate</a>
      <a href="gallery.html">Gallery</a>
      <a href="blog.html">Blog</a>
    </nav>
  <body>
    <div class="boxed">
  <h1>CONSIDER BECOMING A SEEDS 4 LIFE TEAM  MEMBER</h1>
  <h2>SEEDS 4 LIFE</h2>

  <h2>26 WEST MELFORD AVENUE</h2>
  <h2>DAYTON OHIO, 45405</h2>

  <h2>DONNA CLARK, CEO/FOUNDER</h2>

          <!-- Contact Form starts Here -->
          <center><p> Contact Form </p></center>
          <form class="contact-form" action="contact.php" method="post">


          <center> <input type="text" name="name" placeholder="Full name"></center><br>
          <center><input type="text" name="mail" placeholder="your email"></center><br>
          <center><input type="text" name="subject" placeholder="Subject"></center><br>
          <center><textarea name="message" placeholder="Message"></textarea></center><br>
          <center><button type="submit" name="submit">SEND!</button></center>
          <div class ="success"><?= $success; ?></div>

          </form>
          <br>

  <?php

/*  if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $success = "Message Sent, thank you for reaching out!";

  $mailTo = "terencechambers91@gmail.com";
  $headers = "From: " .$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;


    mail($mailTo,$subject,$txt,$headers);
    header("Location:contactform.php?mailsend");
  }
  echo $success;
   ?>
*/

  </body>
</html>
