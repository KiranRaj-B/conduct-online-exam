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
    height: 90vh;
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
    margin-bottom: 20px;
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
    font-size: 14px;
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
    margin-top: 20px;
  }

  .text a {
    color: #4CAF50;
    text-decoration: none;
  }

  .text a:hover {
    text-decoration: underline;
  }

  </style>
</head>
<?php
include('../db/dbconn.php');
include('niftycoon_functions.php');
?>
<body>
  <br>
  <center>
  <div class="wrapper">
    <h2>Registration</h2>
    <form class="mb-5" action="" method="post">
    <!-- <form action="#"> -->
      <div class="input-box">
        <input oninput="validateInput_forimpData(this)" type="text" name="name" class="form-control" placeholder="Enter your name"required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm_password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <br>
      <div class="input-box button">
        <!-- <button title="Save.." name="register" type="submit" id ="subbutton"></button> -->
        <!-- <button class="btn btn-primary" type="submit" onclick="return confirmsave()" title="Save Test.." name="save_test" style="width: 50px;"> <i class="fa fa-save"></i> </button> -->
        <input type="submit" name="register" value="Register Now">
      </div>
      <div class="button">
        <h4>Already have an account?</h4>
        <h4><a href="login.php">Login Now</h4>
      </div>
    </form>
  </div>
</center>
<br>
</body>
<?php
if (isset($_POST['register']))
{
  $studentname       = $_POST['name'];
  $studentemail      = $_POST['email'];
  $password          = $_POST['password'];
  $confirm_password  = $_POST['confirm_password'];

  // checking password is match or not
  if ($password !== $confirm_password) {
    echo "<script>alert('Passwords do not match use same password for both');</script>";
    exit;
  }


  $columnsData = array(
      "name" => $studentname,
      "email" => $studentemail,
      "password" => $password,
      "confirm_password" => $confirm_password
  );

  $tableName = "student";

  $insert_data = NifTycoon_Insert_Array_Data($tableName, $columnsData, $conn);

  // Check result and give alert
  if ($insert_data) {
      echo "<script>alert('Registartion successful');</script>";
  } else {
      echo "<script>alert('Error');</script>";
  }
}
$conn->close();
?>

<?php include('footer.html') ?>
</html>
