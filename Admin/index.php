<?php
session_start();
include('../db/dbconn.php');
include('niftycoon_functions.php');
?>
<html>
<head>
  <title>ONLINE TEST | KIRAN RAJ </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <script src="js\bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?php include('../headers/headerafterlogin.php') ?>
</head>
<body>
    <!-- <br> -->
    <div class="container-fluid" style="background: #e8e8e8">
      <br>
      <h1 style="text-align: center; color: darkblue; font-family: cambria;"><b>USERS AND TEST MARKS ADMIN CONTROL</b></h1>
      <div class="row justify-content-evenly">
        <div class="col-11 col-sm-6 col-md-10 col-lg-6 mt-5 mb-5" style="border: 2px solid black; border-radius: 20px; background: white;">
          <div class="container-fluid">
            <div class="row justify-content-evenly">
              <div class="col-sm-12 col-md-12 col-lg-40 mb-5">
                <div class="main-box">
                  <h1 class="mt-4">STUDENTS PANEL </h1>
                  <a href="students_list.php">  <button type="button" name="button" class="btn btn-primary mt-1">STUDENTS LIST </button></a>
                  <a href="students_reviews.php">  <button type="button" name="button" class="btn btn-primary mt-1">STUDENTS REVIEWS</button></a>
<!--
                  <h1 class="mt-4">SEND WHATSAPP</h1>
                  <a href="date_confirm.php">  <button type="button" name="button" class="btn btn-primary mt-1">Confirmation</button></a>
                  <a href="date_remind.php">  <button type="button" name="button" class="btn btn-primary mt-1">Fee Remind</button></a>
 -->
                  <h1 class="mt-4">ONLINE TEST</h1>
                  <a href="add_test.php">  <button type="button" name="button" class="btn btn-primary mt-1">ADD NEW TEST</button></a>
                  <a href="test_revise.php">  <button type="button" name="button" class="btn btn-primary mt-1">REVISE TEST</button></a>
                  <a href="test_master.php">  <button type="button" name="button" class="btn btn-primary mt-1">TEST MASTER</button></a>

                  <!-- <h1 class="mt-4">UPDATE COURSES</h1>
                  <a href="courses_view.php">  <button type="button" name="button" class="btn btn-primary mt-1">Active/Deactive</button></a>
                  <a href="selectadd.php">  <button type="button" name="button" class="btn btn-primary mt-1">Add Course</button></a>

                  <h1 class="mt-4">TEST ADMIN</h1>
                  <a href="test_home.php">  <button type="button" name="button" class="btn btn-primary mt-1">Add Test</button></a>
                  <a href="test_view.php">  <button type="button" name="button" class="btn btn-primary mt-1">View/Update Test</button></a> -->
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <style media="screen">
              .container-fluid .row .main-box h1{
                /* font-family: cambria; */
                font-size: 25px;
                font-weight: bold;
                text-align: center;
              }
              .container-fluid .row .main-box{
                align-items: center;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                font-family:cambria;
              }
              .container-fluid .row .main-box a button{
                width: 200px;
                border-radius: 10px;
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<?php include('../home/footer.html') ?>
</html>
