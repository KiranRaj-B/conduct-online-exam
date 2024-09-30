<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONLINE TEST | KIRAN RAJ</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <?php include('../headers/headerforuser.php') ?>
  <style media="screen">
  body {
      font-family: Arial, sans-serif;
      display: ;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f9f9f9;
  }

  .container {
      display: flex;
      background-color: #f9f9f9;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
  }

  .form-container, .info-container {
      padding: 40px;
  }

  .form-container {
      flex: 1;
      border-right: 1px solid #eeeeee;
  }

  .form-container h1 {
      margin-bottom: 20px;
      font-size: 34px;
      line-height: 1.5;
  }

  .input-group {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
  }

  .input-group input {
      flex: 1;
  }

  input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #dddddd;
      border-radius: 4px;
      font-size: 14px;
  }

  textarea {
      height: 100px;
  }

  button {
      padding: 10px 20px;
      background-color: #28a745; /* Green color for success */
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
  }

  button:hover {
      background-color: #218838; /* Darker green for hover effect */
  }


  .info-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
  }

  .info-container h2 {
      margin-bottom: 200px;
      font-size: 44px;
      line-height: 1.2;
  }

  .info-container p {
      margin-top: -180px;
      color: #777777;
      font-size: 16px;
      line-height: 1.5;
  }

  .info-container a {
      color: #ff4b5c;
      text-decoration: none;
  }

  .info-container a:hover {
      text-decoration: underline;
  }

  </style>
<body>
  <?php
  include('../Admin/niftycoon_functions.php');
  include('../db/dbconn.php');
  ?>
  <br>
  <form method="post">
    <div class="container">
        <div class="form-container">
            <h1><b>Fill the form. It's easy.</b></h1>
            <form>
                <div class="input-group">
                    <input type="text" name="first_name" placeholder="First name">
                    <input type="text" name="last_name" placeholder="Last name">
                </div>
                <input type="email" name="email" placeholder="Email">
                <textarea name="text" placeholder="Write your message"></textarea>
                <button type="submit" name="send">Send Message</button>
            </form>
        </div>
        <div class="info-container">
            <h2>Let's talk about everything.</h2>
            <p>We empower you to learn programming languages at your own pace and take certification exams to validate your skills. Contact us today to discuss your learning goals and how we can help you achieve them.!</p>
        </div>
    </div>
</body>
<br>
</form>
<!-- PHP START HERE -->
<?php
if (isset($_POST['send']))
{
  // set the table name
  $tableName = 'contact_us';
// declare all variables
  $first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
  $last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $message=mysqli_real_escape_string($conn,$_POST['text']);

   $columnsData = array
   (
     // get the data into the array
     'first_name'    => $first_name,
     'last_name'     => $last_name,
     'email'         => $email,
     'text'          => $message,
    );

    //insert the data to table
    $insert_data = NifTycoon_Insert_Array_Data($tableName, $columnsData, $conn);

    // check if data inserted
    if ($insert_data)
    {
      ?>
      <script>alert("Thank you for your response..");</script>
      <?php
    }
    else
    {
      ?>
      <script>alert("Some thing went wrong.. Please Try Again");</script>
      <?php
    }
 }
 ?>
 <!-- PHP END HERE -->

</body>
  <?php include('../home/footer.html') ?>
</html>
