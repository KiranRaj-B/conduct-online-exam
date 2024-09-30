<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <?php
  include('../headers/headerforuser.php');
  include('../Admin/niftycoon_functions.php');
  include('../db/dbconn.php');
  ?>
  <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    body {
      background-color: #edf0ee;
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }

    .thank-you-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 75vh;
      text-align: center;
      padding: 20px;
      margin: 20px;
      border-radius: 10px;
      transition: transform 0.3s ease-in-out;
    }

    .thank-you-message h1 {
      font-size: 4em;
      color: #2c3e50;
      font-weight: 700;
    }

    .thank-you-message p {
      font-size: 1.5em;
      color: #2c3e50;
    }

    .thank-you-message .congrats {
      color: #e74c3c;
      font-weight: 500;
    }

    .btn-primary {
      display: inline-block;
      background-color: #3498db;
      color: #fff;
      padding: 12px 25px;
      font-size: 1em;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s, box-shadow 0.3s;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #2980b9;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

  </style>
</head>
<body style="background: #edf0ee;">
  <div class="thank-you-container">
    <div class="thank-you-message">
      <h1>Thank You!</h1>
      <br>
      <p class="congrats"><b>Congratulations on completing your exam!</b></p>
      <p>Your results and certificate will be sent to your WhatsApp shortly.</p>
      <p>We appreciate your dedication and hard work.</p>
      <br>
      <a href="home.php" class="btn btn-primary">Return to Home</a>
    </div>
  </div>
</body>
  <?php include('../home/footer.html');?>
</html>
