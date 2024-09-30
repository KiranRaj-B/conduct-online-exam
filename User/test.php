<!-- # ******************************************************************************
# Program: Test
# Author: NifTycoon Company
# Copyright © [2023] NifTycoon Company. All rights reserved.
#
# Description: In this program can attend the test & fillthere answers.
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
  //start the seeion
  session_start();

  // include necessary files
  include('../headers/headerforuser.php'); //header
  include('../Admin/niftycoon_functions.php'); //standard functions
  include('../db/dbconn.php'); //db connection

  //  get the course and test number selected by user
  if ((isset($_GET['course']) and (isset($_GET['test_no']))))
  {
    $course = $_GET['course'];
    $test_no = $_GET['test_no'];
  }
  else
  {
    ?>
    <script>
      window.location = "select_course";
    </script>
    <?php
  }

  // check if user given details
  if (!$_SESSION['user_temp'])
  {
    ?>
    <script>
      window.location = "select_course";
    </script>
    <?php
  }
?>

<!-- MAIN PAGE START -->
<div class="container mt-2 mb-3">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
      <form class=""id="timerForm" action="" method="post">
      <div class="main_body">
        <div class="row">
          <div class="col-8 col-sm-9 col-md-9 col-lg-9 text-start">
            <h6 class="text-start"><?php echo $course; ?> >  <b>MOCK-</b> <?php echo $test_no; ?> </h6>
          </div>
          <div class="col-4 col-sm-3 col-md-3 col-lg-3 text-end">
            <h5 id="timer" style="color: #fc8d8d; margin-top: -5px;">10:00:00</h5>
          </div>

          <?php
          // set the function parameter
          $where_condition_get_test_details = "category = '$course' and test_no = '$test_no'";
          // get the number of questions
          $get_test_qn_cnt  = NifTycoon_Get_Count('test_details', $where_condition_get_test_details, $conn);
           ?>

          <h6 class="text-center">Total Questions: <?php echo $get_test_qn_cnt; ?></h6>
        </div>
        <hr>
        <!-- QUESTIONS & ANSWERS START -->
        <?php
        // get the all questions data
        $get_test_details = NifTycoon_Select_Data('test_details', $where_condition_get_test_details, '', '', '', 0,$conn);
        $i=0; // for question Number

        foreach ($get_test_details as $fetch_test_details)
        {
          $i++;
         ?>
        <div class="questions mt-3">
          <div class="row">
            <h5 class="mt-2 mb-3 text-start" style="font-size: 16px; color: red;">Question - <?php echo $i; ?> :
              <b style="font-weight:normal;">
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
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="input-group mb-3 input-group-sm">
                 <img class="d-block w-100" src="../images/<?php echo $fetch_test_details['q_image']; ?>" alt="" style="box-shadow: 1px 2px 2px 1px grey; max-height: 150px;">
                </div>
              </div>
              <?php
            }

             ?>
            <hr>
            <h5 class="text-start" style="text-decoration: underline; font-size: 16px; color: darkblue;">Choose Answer</h5>

            <input type="hidden" style="display:none;" name="option_c[]" value="<?php echo $fetch_test_details['c_choice']; ?>">

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-1">
              <div class="form-check">
                <input type="checkbox" style="display:none;" checked name="option[]" class="form-check-input" id="q<?php echo $i; ?>_option1" onclick="handleCheckboxClick<?php echo $i; ?>('option1')" value="no_choice">
                <input type="checkbox" name="option[]" class="form-check-input" id="q<?php echo $i; ?>_option1" onclick="handleCheckboxClick<?php echo $i; ?>('option1')" value="choice_1">
                <label class="form-check-label"   for="check1"><?php echo $fetch_test_details['choice_1']; ?></label>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-1">
              <div class="form-check">
                <input type="checkbox" name="option[]" class="form-check-input" id="q<?php echo $i; ?>_option2" onclick="handleCheckboxClick<?php echo $i; ?>('option2')" value="choice_2">
                <label class="form-check-label" for="check1"><?php echo $fetch_test_details['choice_2']; ?></label>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-1">
              <div class="form-check">
                <input type="checkbox" name="option[]" class="form-check-input" id="q<?php echo $i; ?>_option3" onclick="handleCheckboxClick<?php echo $i; ?>('option3')" value="choice_3">
                <label class="form-check-label" for="check1"><?php echo $fetch_test_details['choice_3']; ?></label>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-1">
              <div class="form-check">
                <input type="checkbox" name="option[]" class="form-check-input" id="q<?php echo $i; ?>_option4" onclick="handleCheckboxClick<?php echo $i; ?>('option4')" value="choice_4">
                <label class="form-check-label" for="check1"><?php echo $fetch_test_details['choice_4']; ?></label>
              </div>
            </div>
          </div>
        </div>

        <?php
        }
         ?>
        <!-- QUESTIONS & ANSWERS END -->
        <div class="button text-end">
          <button class="btn btn-primary next mt-4" type="submit" id="submitButton" name="submit_test" >Submit<i class="fa fa-arrow-right"></i> </button>
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
<!-- <div class="foot text-center mt-5">
  <a class="mt-5" href="http://localhost/erp/online_exam/Admin/index.php" target="_blank" style="text-decoration: none;"> <h6 style="color: black; font-family: cambria;">Designed And Developed By  <b style="color: red; font-weight: bold;">Batch 8 Team</b></h6> </a> -->
<br>
<br>
<br>
<!-- FOOTER END -->

<?php
if (isset($_POST['submit_test']))
{
  $CorrectAnsCount    = 0;
  // get the user data
  $option   = $_POST['option'];
  $option_c = $_POST['option_c'];

  // check choice is correct
  foreach ($option as $key => $value)
  {
    if ($option_c[$key] == $value)
    {
      $CorrectAnsCount++;
    }
  }

  // set the sessions
  $_SESSION['course']       = $course;
  $_SESSION['test_no']      = $test_no;
  $_SESSION['total_marks']  = $get_test_qn_cnt;
  $_SESSION['obtained']     = $CorrectAnsCount;

?>

  <script>
    window.location = "result"
  </script>

  <?php
}
?>


 <script>
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Uncheck other checkboxes in the same question group
                var questionId = checkbox.id.replace(/_[^_]+$/, ""); // Extract question id from checkbox id
                checkboxes.forEach(function(qCheckbox) {
                    if (qCheckbox.id.startsWith(questionId + "_") && qCheckbox !== checkbox) {
                        qCheckbox.checked = false;
                    }
                });
            });
        });

        // Set the duration of the timer in minutes
  var durationMinutes = <?php echo $get_test_qn_cnt; ?>;
  var timerElement = document.getElementById('timer');
  var submitButton = document.getElementById('submitButton');

  // Function to start the countdown timer
  function startTimer(duration, display) {
      var timer = duration, minutes, seconds;
      var intervalId = setInterval(function () {
          minutes = parseInt(timer / 60, 10);
          seconds = parseInt(timer % 60, 10);

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          display.textContent = minutes + ":" + seconds;

          if (--timer < 0) {
              clearInterval(intervalId);
              // Call PHP function using AJAX when timer ends
              callPHPFunction();
          }
      }, 1000);
  }

  // Function to call PHP function using AJAX
  function callPHPFunction() {
    submitButton.click();
  }

  // Start the timer when the page loads
  window.onload = function () {
      var minutes = durationMinutes * 60;
      startTimer(minutes, timerElement);
  };
    </script>

    <!-- FOOTER START -->
    <br>
    <br>
    <!-- FOOTER END -->

    <?php
    include('../home/footer.html')
     //?>

  </body>
</html>
