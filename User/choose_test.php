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
include('../headers/headerforuser.php'); include('../Admin/niftycoon_functions.php'); include('../db/dbconn.php');
if (isset($_GET['course'])) {
  $course = $_GET['course'];
}else{
  $course = 'HTML and CSS';
}
?>

<!-- MAIN PAGE START -->
  <div class="container mt-5">
    <div class="row justify-content-evenly">
      <div class="col-11 col-sm-11 col-md-8 col-lg-6 mt-5">
        <!-- <form class="" action=""> -->
          <div class="main_body text-start">
            <h6 class="mt-5 text-start">Choose Test Number</h6>
            <br>
            <?php
            $where_condition_get_test_details = "category = '$course'";
            $group_by_get_test_details = 'test_no';

            $get_test_details = NifTycoon_Select_Data('test_details', $where_condition_get_test_details, $group_by_get_test_details, '', '', 0,$conn);
            foreach ($get_test_details as $fetch_test_details)
            {
              $test_no = $fetch_test_details['test_no'];
            ?>

            <a href="test_details?course=<?php echo $course; ?>&test_no=<?php echo $test_no; ?>"><button type="submit" class="btn btn-outline-primary test_number">MOCK-<?php echo $test_no; ?></button></a>

            <?php
           }
             ?>
            <br><br>
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
<br>
<br>
<br>
<!-- FOOTER END -->

<?php
include('../home/footer.html')
 //?>
  </body>
</html>
