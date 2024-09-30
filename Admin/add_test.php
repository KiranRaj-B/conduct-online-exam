 <html>
  <head>
    <title>New Test | Online Test </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/add_another.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../home/styles.css">
  </head>
<body class="light-dark-bg">
    <?php
    //include all necessary files
    include('../headers/headerafterlogin.php'); //header
    include('../db/dbconn.php'); //db connection
    include('niftycoon_functions.php'); //standard functions
    ?>

    <!-- PATH -->
    <div class="container mt-2" style="border-bottom: 1px solid grey;">
      <div class="row path">
        <h6 class=""> <a href="home">Home</a> > <a href="#">Online Test</a> > <a href="#">New Online Test</a> ></h6>
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
        <h5>Add a New Test</h5>
      </div>
    </div>
    <form class="" action="" method="post" enctype="multipart/form-data">
    <div class="container mt-2" style="box-shadow: 1px 1px 1px 2px grey; padding: 20px; border-radius: 5px;">
      <div class="row justify-content-evenly head">
        <div class="col-12 col-sm-12 col-md-6 col-lg6">
          <div class="input-group mb-3 input-group-sm">
           <span class="input-group-text">Category</span>
           <select class="form-select" name="category" required>
             <option value="">Select Course</option>
             <option value="HTML and CSS">HTML and CSS</option>
             <option value="JAVA">JAVA</option>
             <option value="PYTHON">PYTHON</option>
             <option value="SQL">SQL</option>
             <option value="PHP">PHP</option>
             <option value="BOOTSTRAP">BOOTSTRAP</option>

           </select>
           </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
          <div class="input-group mb-3 input-group-sm">
           <span class="input-group-text">MOCK TEST NO.</span>
           <input class="form-control non_access"  type="number" name="mock_test_no" placeholder="Auto Increment to current Test" required readonly>
          </div>
        </div>


      <h6 class="mt-4" style="color: grey;">Question & Answers</h6>
        <!-- QUESTIONS DATA START -->
        <div class="row fill justify-content-evenly" id="input-container">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Question No.</span>
             <input class="form-control non_access"  type="number" name="serial_number[]" value="1" placeholder="Auto Generate" required readonly>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Question Text</span>
             <textarea class="form-control" placeholder="Enter Question." name="q_text[]" rows="1"></textarea> &nbsp&nbspOR
            </div>
          </div>
          <!-- <h6>OR</h6> -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Question Image</span>
             <input class="form-control" type="file" name="q_image[]" accept=".jpg, .png">
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 1</span>
             <textarea class="form-control" placeholder="Enter Choice 1." name="choice_1[]" rows="1"></textarea>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 2</span>
             <textarea class="form-control" placeholder="Enter Choice 2." name="choice_2[]" rows="1"></textarea>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
            <div class="input-group mb-3 input-group-sm">
             <span class="input-group-text">Choice 3</span>
             <textarea class="form-control" placeholder="Enter Choice 3." name="choice_3[]" rows="1"></textarea>
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
        <!-- QUESTIONS DATA END -->

        <!-- ADD & DELETE BUTTONS START-->
        <div class="question_buttons mt-2">
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
              <button class="btn btn-primary" type="submit" onclick="return confirmsave()" title="Save Test.." name="save_test" style="width: 50px;"> <i class="fa fa-save"></i> </button>
            </div>
          </div>
        </div>
        <!-- SAVE DATA BUTTON END-->

      </div>
    </form>
    <!-- HOME END HERE -->

    <!-- FOOTER START -->
    <div class="foot text-center mt-5">
      <a class="mt-5" href="http://localhost/erp/online_exam/Admin/index.php" target="_blank" style="text-decoration: none;"> <h6 style="color: black; font-family: cambria;">Designed and Developed By <b style="color: red; font-weight: bold;"> Kiran Raj</b></h6> </a>
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
    if (isset($_POST['save_test']))
    {
      // get the data from user in veriable
      $category                 = $_POST['category'];
      $serial_number_arraydata  = $_POST['serial_number'];
      $q_text_arraydata         = $_POST['q_text'];
      $q_image_arraydata        = $_POST['q_image'];
      $choice_1_arraydata       = $_POST['choice_1'];
      $choice_2_arraydata       = $_POST['choice_2'];
      $choice_3_arraydata       = $_POST['choice_3'];
      $choice_4_arraydata       = $_POST['choice_4'];
      $correct_ans_arraydata    = $_POST['correct_ans'];
      $correct_ans_no_arraydata = $_POST['correct_ans_no'];

      // set the function parameters
      $tableName        = 'test_details';
      $col_name         = 'test_no';
      $where_condoition = "category = '$category'";

      $max_test_num = NifTycoon_Get_Max_Num($tableName, $col_name, $where_condoition, $conn);
      $max_test_num++; //get number of test and +1 to get next test number

      // get the indian standard date and time
      date_default_timezone_set('Asia/Kolkata'); // Set the timezone to IST
      $date_time = date('d-m-Y H-i'); // Format the date and time

      // get count of array
      $serial_number_count = count($serial_number_arraydata);

      // for number of question run the for loop to insert array data
      for ($i = 0; $i < $serial_number_count; $i++)
      {
        //simplify the variables
        $serial_number   = $serial_number_arraydata[$i];
        $q_text          = $q_text_arraydata[$i];
        $q_image         = $q_image_arraydata[$i];
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
        'category' => $category,
        'test_no'  => $max_test_num,
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

        //insert the data to table
        $insert_data = NifTycoon_Insert_Array_Data($tableName, $columnsData, $conn);

        // check if data inserted
        if ($insert_data)
        {
          ?>
          <script>
          alert("Uploaded successfully");
          window.location= "add_test";
          </script>
          <?php
        } else
        {
          ?>
          <script>
          alert("Some thing went wrong");
          window.location= "add_test";
          </script>
          <?php
        }
      }

     }
     ?>

  </body>
</html>
