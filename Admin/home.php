
<html>
<head>
  <title>ONLINE TEST | KIRAN RAJ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="js\bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php include('../headers/headerafterlogin.php') ?>

  <!-- PATH -->
  <div class="container mt-2" style="border-bottom: 1px solid grey;">
    <div class="row path">
      <h6 class=""> <a href="#">Home</a> > <a href="#">Online Test</a> > <a href="#">New Online Test</a> </h6>
    </div>
    <style media="screen">
      .container .path h6 a{
        text-decoration: none;
        color: grey;
      }
    </style>
  </div>
  <!-- PATH END -->

  <!-- HOME START HERE -->
  <div class="container mt-5" style="box-shadow: 1px 1px 1px 2px grey; padding: 20px; border-radius: 5px;">
    <h5>Add a new test</h5>
    <form  action="" method="post">
    <div class="row fill justify-content-evenly mt-4">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Course</span>
         <select class="form-select" name="course">
           <option disabled selected>Select Course</option>
           <option value="state">10<sup>th</sup> - State</option>
           <option value="cbse">10<sup>th</sup> - CBSE</option>
           <option value="icse">10<sup>th</sup> - ICSE</option>
            <option value="i-science">I-PU Science</option>
           <option value="ii-science">II-PU Science</option>
           <option value="i-commerce">I-PU Commerce</option>
           <option value="ii-commerce">II-PU Commerce</option>
           <option value="diploma">Diploma</option>
           <option value="entrance">Entrance </option>
           <option value="competitive">Competitive </option>
         </select>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Subject / Category</span>
         <select class="form-select" name="category">
           <option disabled selected>Select</option>
           <option value="kannada">KANNADA</option>
           <option value="hindi">HINDI</option>
           <option value="science">SCIENCE </option>
           <option value="english">ENGLISH </option>
           <option value="social-science ">SOCIAL-SCIENCE </option>
           <option value="maths">MATHS</option>
           <option value="physics">PHYSICS</option>
           <option value="biology">BIOLOGY</option>
           <option value="chemistry">CHEMISTRY</option>
           <option value="economics">ECONOMICS</option>
           <option value="accountancy">ACCOUNTANCY</option>
           <option value="business-study">BUSINESS-STUDY</option>
           <option value="statistics">STATISTICS</option>
           <option value="kcet">K-CET</option>
           <option value="dcet">D-CET</option>
           <option value="neet">NEET</option>
           <option value="jee">JEE </option>
           <option value="mech">MECHANICAL</option>
           <option value="ec">E&C</option>
           <option value="ee">E&E</option>
           <option value="civil">CIVIL</option>
           <option value="cs">COMPUTER-SCIENCE</option>
           <option value="mechatronics">MECHATRONICS</option>
           <option value="kpsc">KPSC</option>
           <option value="kpcl">KPCL</option>
           <option value="kptcl">KPTCL</option>
           <option value="bwssb">BWSSB</option>
           <option value="isro">ISRO</option>
           <option value="drdo">DRDO</option>
           <option value="bmrcl">BMRCL</option>
           <option value="ssc">SSC</option>
           <option value="railway">RAILWAY</option>
         </select>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Chapter Name/Test Name.</span>
         <input class="form-control" oninput="validateInputMarketingMso(this)" placeholder="Ex: Chapter-1 or DCET-MOCK etc.." type="text" name="test_name" required>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="input-group mb-3 input-group-sm">
         <span class="input-group-text">Test No.</span>
         <input class="form-control non_access" oninput="validateInputMarketingMso(this)" type="number" name="test_no" placeholder="Auto Generate" required readonly>
         </div>
      </div>
      <button class="btn btn-primary" type="submit" name="next_page" style="width: 100px; align-items: right; margin-left: auto; margin-right: 15px;"> <i class="fa fa-forward"></i> </button>
    </div>
  </form>
  </div>
  <!-- HOME END HERE -->


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

  <?php
  // Here we get data of test_head and proceed to next page(add_question.php)
  if (isset($_POST['next_page'])) {
    $course = $_POST['course'];
    $category = $_POST['category'];
    $test_name = $_POST['test_name'];
    $test_no = $_POST['test_no'];
    echo"
    <script>
      window.location= 'add_question.php?course=$course&category=$category&test_name=$test_name';
    </script>
    ";


  }

   ?>

</body>
</html>
