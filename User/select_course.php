<!-- # ******************************************************************************
# Program: Select Course
# Author: NifTycoon Company
# Copyright © [2023] NifTycoon Company. All rights reserved.
#
# Description: In this program can select the required course.
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
<?php include('../headers/headerforuser.php'); ?>

<!-- MAIN PAGE START -->
  <div class="container mt-5">
    <div class="row justify-content-evenly">
      <div class="col-11 col-sm-11 col-md-8 col-lg-6 mt-5">
        <!-- <form class="" action=""> -->
          <div class="main_body text-end">
            <h6 class="mt-5 text-start">Select Your Course</h6>
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Course</span>
             <select class="form-select" id="course" name="course">
               <option value="">Select Course</option>
               <option value="html and css">HTML and CSS</option>
               <option value="java">JAVA</option>
               <option value="python">PYTHON</option>
               <option value="sql">SQL</option>
               <option value="php">PHP</option>
               <option value="bootstrap">BOOTSTRAP</option>
             </select>
            </div>
            <button class="btn btn-primary next mt-4" type="button" onclick="next_page()" name="button" >Next <i class="fa fa-arrow-right"></i> </button></a>
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
  .container .row .main_body .test_number{
    width: auto !important;
    border-radius: 2px;
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

<script>
  function next_page()
  {
    var course = document.getElementById("course").value;
    window.location = "get_user_details?course="+course;
  }
</script>

<!-- FOOTER START -->
<br>
<br>
<br>
<!-- FOOTER END -->

<?php
include('../home/footer.html')
 //?>
  </body>
</html>
