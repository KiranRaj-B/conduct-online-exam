<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../home/styles.css">
    <title></title>
  </head>
  <?php
    //start the seeion
    session_start();

    // include necessary files
    include('../headers/headerforuser.php'); //header
    include('../Admin/niftycoon_functions.php'); //standard functions
    include('../db/dbconn.php'); //db connection
    ?>
  <body class="light-dark-bg">
  <div class="container" style="max-width: 1200px; margin: auto; padding: 20px; display: flex; align-items: center; gap: 40px;">
  <section class="languages mb-5">
    <center><h1 class="tittle" style="color: blue;">Explore In-demand Programming Languages</h1></center>
    <style>
    .tittle {
      text-decoration: underline;
      text-decoration-color: red;
    }
  </style>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
      <div class="col">
        <a href="htmlcss.php" class="card h-100 text-center border-primary">
          <div class="card-body">
            <h3 class="card-title">HTML and CSS</h3>
            <p class="card-text">HTML structures content; CSS styles presentation. Learn web development now!</p>
            <button type="button" class="button" name="button">Learn now</button>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="java.php" class="card h-100 text-center border-primary">
          <div class="card-body">
            <h3 class="card-title">Java</h3>
            <p class="card-text">Java: Object-oriented, platform-independent language. Learn it for versatile programming.</p>
            <button type="button" class="button" name="button">Learn now</button>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="python.php" class="card h-100 text-center border-primary">
          <div class="card-body">
            <h3 class="card-title">Python</h3>
            <p class="card-text">Python: Versatile, high-level language. Ideal for beginners and professionals.</p>
            <button type="button" class="button" name="button">Learn now</button>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="sql.php" class="card h-100 text-center border-primary">
          <div class="card-body">
            <h3 class="card-title">SQL</h3>
            <p class="card-text">SQL (Structured Query Language): Manages and manipulates databases. Essential for data management tasks.</p>
            <button type="button" class="button" name="button">Learn now</button>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="php.php" class="card h-100 text-center border-primary">
          <div class="card-body">
            <h3 class="card-title">PHP</h3>
            <p class="card-text">PHP: Server-side scripting language. Powers dynamic web pages. Popular for web development.</p>
            <button type="button" class="button" name="button">Learn now</button>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="bootstarp.php" class="card h-100 text-center border-primary">
          <div class="card-body">
            <h3 class="card-title">BOOTSTRAP</h3>
            <p class="card-text">Bootstrap: Front-end framework for responsive and mobile-first web development.</p>
            <button type="button" class="button" name="button">Learn now</button>
          </div>
        </a>
      </div>
    </div>
  </section>
  </div>
  </body>
  <?php include('../home/footer.html');  ?>
</html>
