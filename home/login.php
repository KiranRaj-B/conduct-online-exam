<?php
session_start();
include('../db/dbconn.php');
include('niftycoon_functions.php');

if (isset($_POST['loginuser'])) {

    // Retrieve the data from the form
    $studentemail = $_POST['email'];
    $l_password   = $_POST['password'];

    // sql query for featcthing the details
    $sql = "SELECT * FROM student WHERE email = '$studentemail'";
    $result = $conn->query($sql);

    // Check if email exists or not now
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $s_password = $row["password"];

        // verify the password
        if ($l_password == $s_password) {
          echo "<script>alert('Login successful');window.location='../User/home.php';</script>";
        } else {
            echo "<script>alert('Invalid password.');window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with this email.');window.location='login.php';</script>";
    }
  }
  if (isset($_POST['loginadmin'])) {

      // Retrieve the data from the form
      $studentemail = $_POST['email'];
      $l_password   = $_POST['password'];

      // sql query for featcthing the details
      $sql = "SELECT * FROM admin WHERE email = '$studentemail'";
      $result = $conn->query($sql);

      // Check if email exists or not now
      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $s_password = $row["password"];

          // verify the password
          if ($l_password == $s_password) {
            echo "<script>alert('Admin Login successful');window.location='../Admin/index.php';</script>";
          } else {
              echo "<script>alert('Admin password invalid, Please Try Again..');window.location='login.php';</script>";
          }
      } else {
          echo "<script>alert('No admin found with this email.');window.location='login.php';</script>";
      }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <?php include('../headers/headerbeforelogin.php')?>
  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    justify-content: center;
    align-items: center;
    height: 10vh;
    margin: 0;
  }

  .wrapper {
      background-color: #fff;
      padding: 10px 15px; /* Reduced padding */
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      width: 400px; /* Reduced width */
      max-width: 100%; /* Ensures it doesn't overflow its container */
  }


  h2 {
    text-align: center;
    margin-bottom: 10px;
  }

  .input-box {
    margin-bottom: 15px;
  }

  .input-box input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .policy {
    display: flex;
    align-items: center;
  }

  .policy input {
    margin-right: 10px;
  }

  .policy h3 {
    font-size: 5px;
    margin: 0;
  }

  .input-box.button input {
    background-color: #0056d2;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .input-box.button input:hover {
    background-color: #02BB75;
  }

  .text {
    text-align: center;
    margin-top: 10px;
  }

  .text a {
    color: #02BB75;
    text-decoration: none;
  }

  .text a:hover {
    text-decoration: underline;
  }
  .container {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.card {
  width: 45%;
  background-color: #f1f1f1;
  padding: 20px;
  border-radius: 10px;
}

.left-card {
  margin-right: 5px;
}

.right-card {
  margin-left: 10px;
}


  </style>
</head>
<body>
  <br>
  <div class="container">
    <div class="card left-card">
      <h2>Admin Login</h2>
      <form action="" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter your password" name="password" required>
        </div>
        <br>
        <div class="input-box button">
          <input type="submit" name="loginadmin" value="Login Now">
        </div>
      </form>
    </div>
    <div class="card right-card">
      <h2>User Login</h2>
      <form action="" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter your password" name="password" required>
        </div>
        <br>
        <div class="input-box button">
          <input type="submit" name="loginuser" value="Login Now">
        </div>
        <div class="text">
          <h4>Don't have an account? </h4>
          <h4><a href="signup.php">Register now</h4>
        </div>
      </form>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
</body>
<?php include('footer.html') ?>
</html>
