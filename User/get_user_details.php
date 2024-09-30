<!-- # ******************************************************************************
# Program: Login
# Author: NifTycoon Company
# Copyright © [2023] NifTycoon Company. All rights reserved.
#
# Description: In this program can feed the credentials.
#
# This program is the property of NifTycoon Company and is protected by copyright laws.
# Unauthorized reproduction or distribution of this program, or any portion of it,
# may result in severe civil and criminal penalties, and will be prosecuted to the
# maximum extent possible under the law.
#
# NifTycoon Company reserves the right to modify this program as needed.
#
# ****************************************************************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">

</head>
<body style="background: #edf0ee;">

<?php

  session_start(); //start the session

  // include necessary files
  include('../headers/headerforuser.php'); //header
  include('../Admin/niftycoon_functions.php'); //standard functions
  include('../db/dbconn.php'); //db connection

  // get the course and test number user selected
  if (isset($_GET['course']))
  {
    $course = $_GET['course'];
  }
  else
  {
    ?>
    <script>
     window.location = "test?course=<?php echo $course; ?>&test_no=<?php echo $test_no; ?>";
    </script>
    <?php
  }

  // check if user allready given details if given then direct to test page
  if (isset($_SESSION['user_temp']))
  {
    ?>
    <script>
     window.location = "test?course=<?php echo $course; ?>&test_no=<?php echo $test_no; ?>";
    </script>
    <?php
  }

?>

<!-- MAIN PAGE START -->
<div class="container mt-5 mb-3">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6">
      <form action="" method="post">
      <div class="main_body">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-start mt-2">
            <img class="d-block" src="Main-logo.png" alt="" style="height: 50px; margin-top: -15px;">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mt-2">
            <center><h3 style="color: grey; font-family: cambria; font-weight: bold;">Enter Details</h3></center>
          </div>
        </div>
        <!-- CREDENTIALS START -->
        <div class="questions mt-3">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mt-4">
               <div class="input-group mb-3 input-group-sm">
                 <span class="input-group-text">Name</span>
                 <input class="form-control" placeholder="Enter Your Name." type="text" name="name" required>
               </div>
               <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Mobile No.</span>
                <input class="form-control" pattern="[5-9]{1}[0-9]{9}"  placeholder="Enter Your Mobile No." type="number" name="ph_no" required>
               </div>
            </div>
          </div>
        </div>
        <h6 class="mt-3" style="color: blue; font-size: 12px;">Please enter your name and phone number for further communications</h6>
        <!-- CREDENTIALS END -->



        <div class="button text-end">
          <button class="btn btn-primary next mt-4" type="submit" name="next" >Select Test <i class="fa fa-arrow-right"></i> </button>
        </div>
      </div>
    </form>
     </div>
   </div>
 </div>
<!-- MAIN PAGE END -->


<!-- MAIN STYLE START -->
<style>
  .container .row .main_body{
    background: white;
    padding: 30px;
    min-height: 350px;
    border-radius: 10px;
    box-shadow: 3px 3px 8px 7px #e8ebed;
  }
  .container .row .main_body .next{
    width: 130px;
    align-items: center;
    margin-left: auto;
    margin-right: 0px;
    background: #a1cae3;
    color: black;
    font-weight: 600;
  }
  .container .row .main_body h6 b{
    font-size: 14px;
    text-align: center;
    color: #5d5e5e;
  }
  .container .row .main_body h6{
    font-size: 14px;
    color: darkblue;
    text-align: center;
  }
  .container .row .main_body .questions{
    padding: 10px;
    border-radius: 2px;
    box-shadow: 1px 3px 5px 6px #e8ebed;
    border-radius: 10px;
  }
  .container .row .main_body .questions .form-check-input{
    border: 1px solid black;
  }
  .container .row .main_body .questions label{
    font-size: 14px;
    font-weight: 400;
  }
  .container .fill h6{
    color: grey;
  }
  .container .fill .row a{
    text-align: right !important;
    text-decoration: none;
    color: #5e5e5d;
    cursor: cell;
  }
  .container .fill .row a:hover{
    text-align: right !important;
    text-decoration: none;
    color: blue;
  }
  .container .row .input-group span{
    box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
    min-width: 143px;
    font-weight: 500;
  }
  .container .row .input-group .non_access{
    background: #e0fdff;
  }
  .container .row .input-group input{
    box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
  }
  .container .row .input-group textarea{
    box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
  }
  .container .row .input-group select{
    box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
  }
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
  }
  .container .row .input-group .non_access{
    background: #e0fdff;
  }
  @media only screen and (max-width: 600px) {
    .container .row .input-group span{
      box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
      width: 100%;
      font-weight: 500;
      border-radius: 0px;
    }
    .container .row .input-group input{
      box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
      width: 100%;
      border-radius: 0px;
    }
    .container .row .input-group textarea{
      box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
      width: 100%;
      border-radius: 0px;
    }
    .container .row .input-group select{
      box-shadow: 0.5px 0.5px 1px 1px #a3a2a0;
      width: 100%;
      border-radius: 0px;
    }
  }
</style>
<!-- MAIN STYLE END -->

<!-- FOOTER START -->
<!-- <div class="foot text-center mt-5">
  <a class="mt-5" href="http://localhost/erp/online_exam/Admin/index.php" target="_blank" style="text-decoration: none;"> <h6 style="color: black; font-family: cambria;">Designed And Developed By  <b style="color: red; font-weight: bold;">Batch 8 Team</b></h6> </a>
</div> -->
<!-- FOOTER END -->

<?php
if (isset($_POST['next']))
{
  // get the user data
  $name  = $_POST['name'];
  $phone = $_POST['ph_no'];

  // set the function parameters
  $tableName        = 'user_details';
  $col_name         = 'test_no';
  $where_condoition = "phone = '$phone'";

  // check if phone number allready exist
  $is_exist = NifTycoon_Get_Count($tableName, $where_condoition, $conn);

  // if phone number not exist
  if ($is_exist == 0)
  {

    $columnsData = array
    (
    // get data into array
    'name'   => $name,
    'phone'  => $phone
    );

    // insert he data
     $insert = NifTycoon_Insert_Data($tableName, $columnsData, $conn);

     // if data inserted
     if ($insert)
     {
       $_SESSION['user_temp'] = 1;
       ?>
       <script>
        window.location= "choose_test?course=<?php echo $course; ?> ";
       </script>
       <?php
     }
  }
}
 ?>
  </body>
<br>
<br>
<br>
  <!-- FOOTER START -->
  <br>
  <br>
  <!-- FOOTER END -->

  <?php
  include('../home/footer.html')
   //?>
</html>
