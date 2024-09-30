<html>
  <head>
    <title>Revise Test | Online Test </title>
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

    // get the course selected by user
    if (isset($_GET['category']))
    {
      $category = $_GET['category'];
    }
    else
    {
      $category = 'HTML and CSS';
    }

  ?>

    <!-- PATH -->
    <div class="container mt-2" style="border-bottom: 1px solid grey;">
      <div class="row path">
        <h6 class=""> <a href="home">Home</a> > <a>Online Test</a> > <a>Revise Test</a></h6>
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

    <!-- SEARCH SECTION START -->
    <div class="container mt-4">
      <div class="row justify-content-evenly">
        <div class="col-12 col-sm-10 col-md-12 col-lg-12  text-center search mt-2 mb-4">
          <div class="row justify-content-end">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <label for="" style="width: 200px;">Select Course</label><br>

                <div class="input-group mb-3 input-group-sm">
                 <select class="form-select" name="" onchange="link_change(this.value)">
                   <option value="">Select Course</option>
                   <option value="HTML and CSS">HTML and CSS</option>
                   <option value="JAVA">JAVA</option>
                   <option value="PYTHON">PYTHON</option>
                   <option value="SQL">SQL</option>
                   <option value="PHP">PHP</option>
                   <option value="BOOTSTRAP">BOOTSTRAP</option>
                 </select>

              </div>
              <style media="screen">
                .row .search label{
                  text-align: center;
                  font-weight: 600;
                }
                .row .search label h6{
                  text-align: center;
                }
                .row .search input, select{
                  align-items: center;
                  margin-left: auto;
                  margin-right: auto;
                  border: 1px solid black;
                  height: 30px;
                  border-radius: 5px;
                }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SEARCH SECTION END -->

    <!-- HOME START HERE -->
    <div class="container">
      <div class="row">
        <h5>Select & Edit the Test Course : <?php echo $category; ?></h5>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-evenly">

        <?php
        // set the function parameters
        $where_condition_get_test_details = "category = '$category'";
        $group_by_get_test_details = 'test_no';

        // select data (multiple)
        $get_test_details = NifTycoon_Select_Data('test_details', $where_condition_get_test_details, $group_by_get_test_details, '', '', 0,$conn);
        $i=0; // set this for question number

        foreach ($get_test_details as $fetch_test_details)
        {
          $test_no = $fetch_test_details['test_no'];
          $i++;
        ?>
        <div class="col-11 col-sm-12 col-md-12 col-lg-12 mt-3" style="box-shadow: 1px 2px 2px 3px grey; border-radius: 5px; padding: 15px;">
          <div class="row">
            <div class="col-4 col-sm-3 col-md-3 col-lg-1 text-center">
              <button onclick="" title="Test Number" class="btn btn-secondary" style="margin-top: 10px; background: linear-gradient(to bottom, #ccffff 0%, #ffffff 100%); color: black; box-shadow: 1px 1px 2px 1px grey;; width: 40px; height: 35px;"><?php echo $i; ?></button>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-2">
              <div class="input-group mb-3 input-group-sm">
               <span class="input-group-text">Subject/Category</span>
               <textarea rows="1" class="form-control non_access"  type="number" name="test_no" placeholder="Auto Generate" required readonly><?php echo $fetch_test_details['category']; ?></textarea>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 mt-2">
              <div class="input-group mb-3 input-group-sm">
               <span class="input-group-text">Test Name</span>
               <textarea rows="1" class="form-control non_access"  type="number" name="test_no" placeholder="Auto Generate" required readonly><?php echo 'MOCK'.$fetch_test_details['test_no']; ?></textarea>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-1 text-center">
              <a href="edit_test?cat=<?php echo $fetch_test_details['category']; ?>&test_no=<?php echo $fetch_test_details['test_no']; ?>"><button type="button" title="Edit This Test.." class="btn btn-secondary" style="margin-top: 10px; background: linear-gradient(to bottom, #ccffff 0%, #ffffff 100%); color: black; box-shadow: none; width: 40px; height: 35px;">
                <i class="fa fa-edit"></i> </button></a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-1 text-center">
              <button onclick="" type="button" title="Expand Box" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target="#expand_box<?php echo $i; ?>" style="margin-top: 10px; background: linear-gradient(to bottom, #ccffff 0%, #ffffff 100%); color: black; box-shadow: none; width: 40px; height: 35px;">
                <i class="fa fa-expand"></i> </button>
            </div>
            <!-- DURATION START -->
            <div class="col-12 duration mt-2" style="">
              <div class="row justify-content-start">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 duration">
                  <h6> <b>Uploaded On: </b> <b><?php echo $fetch_test_details['date_time']; ?></b> </h6>
                </div>
              </div>
              <style media="screen">
                .container .row .duration h6{
                  font-size: 12px;
                }
              </style>
            </div>
            <!-- DURATION END -->
            <div id="expand_box<?php echo $i; ?>" class="collapse">

              <?php
              $j=0;
              $where_condition_get_test_question_details = "category = '$category' and test_no = '$test_no'";

              $get_test_question_details = NifTycoon_Select_Data('test_details', $where_condition_get_test_question_details, '', '', '', 0,$conn);
              foreach ($get_test_question_details as $fetch_test_question_details)
              {
                $j++;
               ?>

              <div class="row mt-2" style="box-shadow: 1px 1px 2px 3px #d7dade; border-radius: 5px; padding: 15px;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">SL No.</span>
                   <input class="form-control non_access"  type="number" name="slno" placeholder="Auto Generate" required  value="<?php echo $j; ?>" readonly>
                  </div>
                </div>

                <?php if ($fetch_test_question_details['q_image'] != '') {
                  ?>

                  <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-2">
                    <div class="input-group mb-3 input-group-sm">
                     <span class="input-group-text">Question Image</span>
                     <img src="../images/<?php echo $fetch_test_question_details['q_image']; ?>" class="d-block" data-bs-toggle="modal" title="Click Me.." data-bs-target="#myModal<?php echo $fetch_test_question_details['id']; ?>" style="width: 150px; height: 35px; cursor: pointer; box-shadow: 0.5px 0.5px 1px 1px #a3a2a0; border-radius: 5px;" alt="">
                    </div>
                    <!-- IMAGE EXPANDED MODAL START -->
                    <div class="modal" id="myModal<?php echo $fetch_test_question_details['id']; ?>" style="width: 100%; ">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Question Image</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                          <!-- Modal body -->
                          <div class="modal-body text-center">
                            <img class="d-block w-100" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $fetch_test_question_details['id']; ?>" src="../images/<?php echo $fetch_test_question_details['q_image']; ?>" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- IMAGE EXPANDED MODAL END -->
                  </div>

                  <?php
                } ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-8 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Question Text</span>
                   <textarea class="form-control non_access"  placeholder="Question" name="question" rows="1" readonly ><?php echo $fetch_test_question_details['q_text']; ?></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Choice 1</span>
                   <textarea class="form-control non_access"  placeholder="Choice 1." name="choice_1" rows="1" readonly ><?php echo $fetch_test_question_details['choice_1']; ?></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Choice 2</span>
                   <textarea class="form-control non_access"  placeholder="Choice 2." name="choice_2" rows="1" readonly ><?php echo $fetch_test_question_details['choice_2']; ?></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Choice 3</span>
                   <textarea class="form-control non_access"  placeholder="Choice 3." name="choice_3" rows="1" readonly ><?php echo $fetch_test_question_details['choice_3']; ?></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Choice 4</span>
                   <textarea class="form-control non_access"  placeholder="Choice 4." name="choice_4" rows="1" readonly ><?php echo $fetch_test_question_details['choice_4']; ?></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Correct Ans.</span>
                   <textarea class="form-control non_access"  placeholder="Choice 4." name="choice_4" rows="1" readonly ><?php echo $fetch_test_question_details['c_answer']; ?></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                  <div class="input-group mb-3 input-group-sm">
                   <span class="input-group-text">Correct Ans. No.</span>
                   <input class="form-control non_access"  type="text" name="correct_ans_no" value="<?php echo $fetch_test_question_details['c_choice']; ?>" readonly required>
                   </div>
                </div>
              </div>

              <?php
             }
               ?>

            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    <br>
    <!-- FOOTER START -->
   <?php include('../home/footer.html') ?>
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
    <script>
      function link_change(link){
        window.location="test_revise.php?category="+link;
      }
    </script>

  </body>
</html>
