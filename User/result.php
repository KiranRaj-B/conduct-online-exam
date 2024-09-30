<!-- # ******************************************************************************
# Program: Results
# Author: NifTycoon Company
# Copyright © [2023] NifTycoon Company. All rights reserved.
#
# Description: In this program can see there score & right answers.
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
// start the session
session_start();

// get the session data
if ((isset($_SESSION['course']) and (isset($_SESSION['test_no'])) and (isset($_SESSION['total_marks'])) and (isset($_SESSION['obtained']))))
{
  $course         = $_SESSION['course'];
  $test_no        = $_SESSION['test_no'];
  $tm             = $_SESSION['total_marks'];
  $obt            = $_SESSION['obtained'];
  $user_temp      = $_SESSION['user_temp'];
  session_destroy();
}
else
{
  ?>
  <script>
    window.location = "thank_you";
  </script>
  <?php
}


session_start();
// set the session of user detail
$_SESSION['user_temp'] = 1;

// include necessary files
include('../headers/headerforuser.php');
include('../Admin/niftycoon_functions.php');
include('../db/dbconn.php');

?>

<!-- MAIN PAGE START -->
<form method="post">
<div class="container mt-5 mb-3">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
      <div class="main_body">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-start mt-2">
            <img class="d-block" src="Main-logo.png" alt="" style="height: 60px; margin-top: -15px;">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mt-2">
            <h3 style="color: grey; font-family: cambria; font-weight: bold;">Online Mock Test</h3>
          </div>
        </div>
        <hr>

        <!-- QUESTIONS & ANSWERS START -->
        <div class="questions mt-3">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-9 col-lg-9 mt-1 text-start">
              <h6 class="text-start"> <b>Course: </b> <?php echo $course; ?> >  <b>MOCK-</b><?php echo $test_no; ?> </h6>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 mt-2 text-end">
              <!-- <h6 style="color: black; margin-top: -5px;">Time Taken: 10:00:00</h6> -->
            </div>
          </div>
          <!-- <h5 class="mt-2 mb-3 text-start" style="font-size: 19px; color: darkblue;">Result:</h5> -->
          <hr>
          <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-8 text-center">
              <h6 class="" style="font-size: 16px;"> <b style="font-size: 16px;">Total Marks: </b> <?php echo $tm; ?></h6>
              <h6 class="" style="font-size: 16px;"> <b style="font-size: 16px;">Marks Obtained: </b> <?php echo $obt; ?></h6>
            </div>
          </div>
        </div>
        <h6 class="mt-3" style="color: grey; font-size: 15px;">Take a Screen Shot for your reference..</h6>
        <!-- QUESTIONS & ANSWERS END -->

        <!-- CORRECT ANSWERS START -->
        <div class="answers mt-3">
          <?php
          $where_condition_get_test_details = "category = '$course' and test_no = '$test_no'";

          $get_test_details = NifTycoon_Select_Data('test_details', $where_condition_get_test_details, '', '', '', 0,$conn);
          $i=0;
          foreach ($get_test_details as $fetch_test_details)
          {
            $i++;
          ?>
          <div class="row justify-content-start">
            <h5 class="mt-2 mb-3 text-start" style="font-size: 16px; color: red;">Question - <?php echo $i; ?>:
              <b style="font-weight:normal; font-size: 14px;">
                <?php
                if ($fetch_test_details['q_text'] != '')
                {
                 echo $fetch_test_details['q_text'];
                }
                 ?>
             </b>
           </h5>

           <?php
           if ($fetch_test_details['q_image'] != '')
           {
             ?>

           <div class="col-12 col-sm-12 col-md-12 col-lg-12">
             <div class="input-group mb-3 input-group-sm">
              <img class="d-block w-50" src="../images/<?php echo $fetch_test_details['q_image']; ?>" alt="" style="box-shadow: 1px 2px 2px 1px grey; max-height: 150px;">
             </div>
           </div>

           <?php
          }
            ?>

           <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-start">
              Correct Answer : <b><?php echo $fetch_test_details['c_answer']; ?></b>
           </div>
          </div>
          <hr>
          <?php
         }
           ?>
          <style media="screen">
            .container .row .main_body .answers{
              padding: 10px;
              border-radius: 2px;
              box-shadow: 1px 3px 5px 6px #e8ebed;
              border-radius: 3px;
            }
            .container .row .main_body .answers .form-check-input{
              border: 1px solid black;
            }
            .container .row .main_body .answers label{
              font-size: 14px;
              font-weight: 400;
            }
          </style>
        </div>
        <!-- CORRECT ANSWERS END -->

        <div class="button text-end">
            <button class="btn btn-primary next mt-4" type="submit" name="finish">Finish<i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
     </div>
   </div>
 </div>
 </form>
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
    border-top: 4px solid skyblue;
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
<!-- FOOTER END -->
<?php   if (isset($_POST['finish'])) { echo "<script>window.location='thank_you.php';</script>"; } ?>
<!-- FOOTER START -->
<br>
<br>
<!-- FOOTER END -->

<?php
include('../home/footer.html')
 //?>
  </body>
</html>
