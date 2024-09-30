<html>
  <head>
    <title>Edit Test | Online Test |</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../home/styles.css">
  </head>
<body class="light-dark-bg">

  <?php
    //include all necessary files
    include('../headers/headerafterlogin.php'); //header
    include('../db/dbconn.php'); //db connection
    include('niftycoon_functions.php'); //standard functions

    // get the course and test number selected by user
    if ($_GET['cat'])
    {
      $course  = $_GET['cat'];
      $test_no = $_GET['test_no'];
    }

   ?>

    <!-- PATH -->
    <div class="container mt-2" style="border-bottom: 1px solid grey;">
      <div class="row path">
        <h6 class=""> <a href="home">Home</a> > <a>Online Test</a> > <a>Edit Test</a> </h6>
      </div>
      <style media="screen">
        .container .path h6 a{
          text-decoration: none;
          color: grey;
        }
        .container .path h6{
          text-decoration: none;
          color: grey;
          font-weight: 500;
        }
      </style>
    </div>
    <!-- PATH END -->

    <!-- HOME START HERE -->
    <div class="container mt-5">
      <div class="row">
        <h5>Edit the Test</h5>
      </div>
    </div>
    <div class="container mt-2" style="box-shadow: 1px 1px 1px 2px grey; padding: 20px; border-radius: 5px;">
      <div class="row justify-content-evenly head">

        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <div class="input-group mb-3 input-group-sm">
           <span class="input-group-text">Course</span>
           <input class="form-control non_access" oninput="validateInputMarketingMso(this)" value="<?php echo $course; ?>" type="text" name="test_name" required readonly>
           </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <div class="input-group mb-3 input-group-sm">
           <span class="input-group-text">Test No.</span>
           <input class="form-control non_access" oninput="validateInputMarketingMso(this)" type="text" name="test_no" value="<?php echo 'MOCK-'.$test_no; ?>" required readonly>
          </div>
        </div>
      </div>

      <h6 class="mt-4" style="color: grey;">Question & Answers</h6>
        <!-- QUESTIONS DATA START -->
        <?php
        $where_condition_get_test_details = "category = '$course' and test_no = '$test_no'";

        $get_test_qn_cnt  = NifTycoon_Get_Count('test_details', $where_condition_get_test_details, $conn);
        $get_test_details = NifTycoon_Select_Data('test_details', $where_condition_get_test_details, '', '', '', 0,$conn);
        $i=0;
        foreach ($get_test_details as $fetch_test_details)
        {
          $i++;
         ?>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="row fill justify-content-evenly mt-2" style="box-shadow: 1px 2px 2px 2px grey; border-radius: 3px; padding: 10px;">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Question No.</span>
             <input class="form-control non_access" oninput="validateInputMarketingMso(this)" value="<?php echo $i; ?>" type="number" name="slno" placeholder="Auto Generate" required readonly>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Question Text</span>
             <textarea class="form-control" oninput="validateInputMarketingMso(this)" name="q_text" rows="1"><?php echo $fetch_test_details['q_text']; ?></textarea> &nbsp&nbsp OR
            </div>
          </div>
          <!-- <h6>OR</h6> -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Change Qn Image</span>
             <?php
              if ($fetch_test_details['q_image'] != '')
              {
                ?>
                <img src="../images/<?php echo $fetch_test_details['q_image']; ?>" name=""  class="d-block" data-bs-toggle="modal" title="Click Me.." data-bs-target="#myModal<?php echo $fetch_test_details['id']; ?>" style="width: 150px; height: 35px; cursor: pointer; box-shadow: 0.5px 0.5px 1px 1px #a3a2a0; border-radius: 5px;" alt="">
                <?php
              } else
              {
                echo "No image";
              }
              ?>

             <input type="hidden" name="db_image" value="<?php echo $fetch_test_details['q_image']; ?>">
             <input class="form-control" oninput="validateInputMarketingMso(this)" type="file" name="q_image" accept=".jpg, .png">
            </div>
            <!-- IMAGE EXPANDED MODAL START -->
            <div class="modal" id="myModal<?php echo $fetch_test_details['id']; ?>" style="width: 100%; ">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Question Image</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body text-center">
                    <img class="d-block w-100" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $fetch_test_details['id']; ?>" src="../images/<?php echo $fetch_test_details['q_image']; ?>" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- IMAGE EXPANDED MODAL END -->
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 1</span>
             <textarea class="form-control" oninput="validateInputMarketingMso(this)" name="choice_1" rows="1"><?php echo $fetch_test_details['choice_1']; ?></textarea>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 2</span>
             <textarea class="form-control" oninput="validateInputMarketingMso(this)" name="choice_2" rows="1"><?php echo $fetch_test_details['choice_2']; ?></textarea>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 3</span>
             <textarea class="form-control" oninput="validateInputMarketingMso(this)" name="choice_3" rows="1"><?php echo $fetch_test_details['choice_3']; ?></textarea>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 4</span>
             <textarea class="form-control" oninput="validateInputMarketingMso(this)" name="choice_4" rows="1"><?php echo $fetch_test_details['choice_4']; ?></textarea>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Correct Ans.</span>
             <input class="form-control" oninput="validateInputMarketingMso(this)" value="<?php echo $fetch_test_details['c_answer']; ?>" type="text" name="correct_ans" required>
             </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Correct Ans. No.</span>
             <select class="form-select" name="correct_ans_no">
               <option value="<?php echo $fetch_test_details['c_choice']; ?>"><?php echo $fetch_test_details['c_choice']; ?></option>
               <option value="choice_1">Choice 1</option>
               <option value="choice_2">Choice 2</option>
               <option value="choice_3">Choice 3</option>
               <option value="choice_4">Choice 4</option>
             </select>
             </div>
          </div>
          <div class="container text-end">
            <input type="hidden" name="update_id" value="<?php echo $fetch_test_details['id']; ?>">
            <input type="hidden" name="date_time" value="<?php echo $fetch_test_details['date_time']; ?>">
            <button class="btn btn-primary" type="submit" title="Update & Save." name="update" style="width: 40px;"> <i class="fa fa-refresh"></i> </button>
          </div>
        </div>
      </form>
        <?php
       }
         ?>

        <!-- QUESTIONS DATA END -->
      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="input-container mt-4" id="input-container">

        </div>
        <!-- ADD & DELETE BUTTONS START-->
        <div class="question_buttons mt-4">
          <div class="row">
            <div class="col-6 text-start">
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-success" onclick="" type="button" title="Add Another Question.." id="add-btn" name="button" style="width: 40px;"> <i class="fa fa-plus"></i> </button>
            </div>
          </div>
        </div>
        <!-- ADD & DELETE BUTTONS END-->

        <!-- SAVE DATA BUTTON START-->
        <div class="submit mt-3">
          <hr>
          <div class="row">
            <div class="col-12 text-end">
              <button class="btn btn-primary" style="display:none;" id="save_btn" type="submit" title="Save all data.." name="save_btn" style="width: 50px;"> <i class="fa fa-refresh"></i> </button>
            </div>
          </div>
        </div>
      </form>
        <!-- SAVE DATA BUTTON END-->

      </div>
    <!-- HOME END HERE -->

    <!-- FOOTER START -->
    <div class="foot text-center mt-5">
      <a class="mt-5" href="http://localhost/erp/online_exam/Admin/index.php" target="_blank" style="text-decoration: none;"> <h6 style="color: black; font-family: cambria;">Designed and Developed By <b style="color: red; font-weight: bold;">Kiran Raj</b></h6> </a>
    </div>
    <!-- FOOTER END -->

    <!-- MAIN STYLE START -->
    <style>
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

  <?php
    if (isset($_POST['update']))
    {
      // get the data from user in veriable
      $q_text         = $_POST['q_text'];
      $choice_1       = $_POST['choice_1'];
      $choice_2       = $_POST['choice_2'];
      $choice_3       = $_POST['choice_3'];
      $choice_4       = $_POST['choice_4'];
      $correct_ans    = $_POST['correct_ans'];
      $correct_ans_no = $_POST['correct_ans_no'];
      $u_id           = $_POST['update_id'];
      $date_time      = $_POST['date_time'];
      $db_image       = $_POST['db_image'];

      //move the image to folder
      if(isset($_FILES["q_image"]["name"]) && !empty($_FILES["q_image"]["name"]))
      {
        $photo = $_FILES["q_image"] ["name"];
        $type  = $_FILES["q_image"] ["type"];
        $size  = $_FILES["q_image"] ["size"];
        $temp  = $_FILES["q_image"] ["tmp_name"];
        $error = $_FILES["q_image"] ["error"];
        $photo = $date_time.$photo;
        move_uploaded_file($temp,"../images/".$photo);
      }
      else
      {
        $photo = $_POST['db_image'];
      }

      $setColumnsData = array
      (
      // get the data into the array
      'q_text'   => $q_text,
      'q_image'  => $photo,
      'choice_1' => $choice_1,
      'choice_2' => $choice_2,
      'choice_3' => $choice_3,
      'choice_4' => $choice_4,
      'c_answer' => $correct_ans,
      'c_choice' => $correct_ans_no,
      );

      // set the function parameters
      $tableName        = 'test_details';
      $where_condoition = "id = '$u_id'";

      // update the data in db
      $up_test_detail = NifTycoon_Update_Data($tableName, $setColumnsData, $where_condoition, $conn);

      // check if data updated
      if ($up_test_detail) {
        ?>
        <script>
        alert("Uploaded successfully");
        window.location= "edit_test?cat=<?php echo $course; ?>&test_no=<?php echo $test_no; ?>";
        </script>
        <?php
      }
    }

    if (isset($_POST['save_btn']))
    {
      // get the data from user in veriable
      $serial_number_arraydata  = $_POST['serial_number'];
      $q_text_arraydata         = $_POST['q_text'];
      $choice_1_arraydata       = $_POST['choice_1'];
      $choice_2_arraydata       = $_POST['choice_2'];
      $choice_3_arraydata       = $_POST['choice_3'];
      $choice_4_arraydata       = $_POST['choice_4'];
      $correct_ans_arraydata    = $_POST['correct_ans'];
      $correct_ans_no_arraydata = $_POST['correct_ans_no'];

      // get the indian standard date and time
      date_default_timezone_set('Asia/Kolkata'); // Set the timezone to IST
      $date_time = date('d-m-Y H-i'); // Format the date and time

      // get count of array
      $serial_number_count = count($serial_number_arraydata);

      // for number of question run the for loop to insert array data
      for ($i = 0; $i < $serial_number_count; $i++)
      {
        $serial_number   = $serial_number_arraydata[$i];
        $q_text          = $q_text_arraydata[$i];
        $choice_1        = $choice_1_arraydata[$i];
        $choice_2        = $choice_2_arraydata[$i];
        $choice_3        = $choice_3_arraydata[$i];
        $choice_4        = $choice_4_arraydata[$i];
        $correct_ans     = $correct_ans_arraydata[$i];
        $correct_ans_no  = $correct_ans_no_arraydata[$i];

        //move the image to folder
        if(isset($_FILES["q_image"]["name"][$i]) && !empty($_FILES["q_image"]["name"][$i]))
        {
          $photo = $_FILES["q_image"] ["name"] [$i];
          $type  = $_FILES["q_image"] ["type"] [$i];
          $size  = $_FILES["q_image"] ["size"] [$i];
          $temp  = $_FILES["q_image"] ["tmp_name"] [$i];
          $error = $_FILES["q_image"] ["error"] [$i];
          $photo = $date_time.$photo;
          move_uploaded_file($temp,"../images/".$photo);
        }
        else
        {
          $photo = '';
        }

        $columnsData = array
        (
          // get the data into the array
        'category' => $course,
        'test_no'  => $test_no,
        'q_text'   => $q_text,
        'q_image'  => $photo,
        'choice_1' => $choice_1,
        'choice_2' => $choice_2,
        'choice_3' => $choice_3,
        'choice_4' => $choice_4,
        'c_answer' => $correct_ans,
        'c_choice' => $correct_ans_no,
        'date_time' => $date_time,
        );

        // set the function parameters
        $tableName = 'test_details';

        //insert the data to table
        $insert_data = NifTycoon_Insert_Array_Data($tableName, $columnsData, $conn);

        // check if data inserted
        if ($insert_data)
        {
          ?>
          <script>
          alert("Uploaded successfully");
          window.location= "edit_test?cat=<?php echo $course; ?>&test_no=<?php echo $test_no; ?>";
          </script>
          <?php
        } else
        {
          ?>
          <script>
          alert("Some thing went wrong");
          window.location= "edit_test?cat=<?php echo $course; ?>&test_no=<?php echo $test_no; ?>";
          </script>
          <?php
        }
      }
    }
   ?>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const addBtn = document.getElementById("add-btn");
    const container = document.getElementById("input-container");

    let serialNumber = <?php echo $get_test_qn_cnt; ?>;
    //function on click starts here
    addBtn.addEventListener("click", function() {
    serialNumber++;
    document.getElementById("save_btn").style.display="block";
    const inputGroup = document.createElement("div");
    inputGroup.className = "input-group";
    inputGroup.innerHTML = `

    <div class="row fill justify-content-evenly">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Question No.</span>
         <input class="form-control non_access"  type="number" name="serial_number[]" value="${serialNumber}" placeholder="Auto Generate" required readonly>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Question Text</span>
         <textarea class="form-control"  placeholder="Enter Question." name="q_text[]" rows="1"></textarea> &nbsp&nbspOR
        </div>
      </div>
      <!-- <h6>OR</h6> -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Question Image</span>
         <input class="form-control"  type="file" name="q_image[]" accept=".jpg, .png" >
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Choice 1</span>
         <textarea class="form-control"  placeholder="Enter Choice 1." name="choice_1[]" rows="1"></textarea>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Choice 2</span>
         <textarea class="form-control"  placeholder="Enter Choice 2." name="choice_2[]" rows="1"></textarea>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Choice 3</span>
         <textarea class="form-control"  placeholder="Enter Choice 3." name="choice_3[]" rows="1"></textarea>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Choice 4</span>
         <textarea class="form-control"  placeholder="Enter Choice 4." name="choice_4[]" rows="1"></textarea>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Correct Ans.</span>
         <input class="form-control"  placeholder="Enter Correct Answer." type="text" name="correct_ans[]" required>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Correct Ans. No.</span>
         <select class="form-select" name="correct_ans_no[]">
           <option disabled selected>Select Correct Answer Number</option>
           <option value="choice_1">Choice 1</option>
           <option value="choice_2">Choice 2</option>
           <option value="choice_3">Choice 3</option>
           <option value="choice_4">Choice 4</option>
         </select>
         </div>
      </div>
     <hr class="mt-2">
    </div>
    <button class="remove-btn btn btn-secondary  mb-2" onclick="" type="button" title="Remove Above Question.." id="remove_above_question" name="button" style="width: 40px;"> <i class="fa fa-times"></i> </button>
    `;
    // function to remove the apm
    container.appendChild(inputGroup);
    const removeBtns = document.getElementsByClassName("remove-btn");
    for (let i = 0; i < removeBtns.length; i++) {
        removeBtns[i].addEventListener("click", function() {
            this.parentNode.remove();
            renumberSerialNumbers();
            serialNumber--;
        });
     }
    });
    // function to add the apm
    function renumberSerialNumbers() {
       const serialNumberInputs = document.querySelectorAll('.input-group input[name="serial_number[]"]');
       serialNumber = <?php echo $get_test_qn_cnt+1; ?>;
       serialNumberInputs.forEach((input, index) => {
         input.value = serialNumber;
         serialNumber++;
         });
       }
    });



    function confirmsave()
    {
     return confirm("Are you sure want save Test");
     }

    </script>
  </body>
</html>
