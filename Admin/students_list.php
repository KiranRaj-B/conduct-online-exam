<?php
include('../db/dbconn.php');
include('niftycoon_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONLINE TEST | KIRAN RAJ</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <?php include('../headers/headerafterlogin.php'); ?>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}
.heading {
  text-align: center;
  color: #00000;
  font-size: 39px;
  font-weight: bold;
  margin-top: 20px;
  text-decoration: underline;
  text-decoration-color: red;
}
</style>
<body class="light-dark-bg">
  <div class="container ">
    <h1 class="heading">Send the Results and Certificates to their respective WhatsApp numbers</h1>

  <div class="container-fluid">
    <div class="row justify-content-evenly">
      <!-- HEADER 1 START -->
      <div class="col-12">
        <div class="row justify-content-evenly">
          <div class="col-3 mt-10">
            <!-- <div class="bt1 text-center mt-2"> -->
              <button class="btn btn-secondary" style="border-radius: 10px; position: absolute;; right: 135px;" type="button" onclick="export_data()">Export Data <i class="fa fa-file-excel-o"></i></button>
              <br>
            <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>

      <!-- HEADER 1 END -->

      <div class="table-responsive mt-20">
        <table class="table table-bordered" id="data">
          <thead>
            <tr>
              <th>Roll No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Score</th>
              <th>Send</th>
            </tr>
          </thead>
          <tbody>
            <!-- PHP code for selecting students from the database -->
            <?php
            $query = "SELECT * FROM user_details";
            $result = mysqli_query($conn, $query);

            if ($result) {
              while ($fetch = mysqli_fetch_assoc($result)) {
            ?>
              <!-- Student Data Start -->
              <tr>
                <td><?php echo $fetch['id']; ?></td>
                <td><?php echo $fetch['name']; ?></td>
                <td><?php echo $fetch['phone']; ?></td>
                <td><?php echo $fetch['score']; ?></td>
                <td>
                  <a target="_blank" href="https://wa.me/+91<?php echo $fetch['phone']; ?>/?text=Hello *<?php echo $fetch['name']; ?>*, We appreciate you choosing to learn computer languages on our website! You received *<?php echo $fetch['score']; ?>* marks in our test. Your results and certificate have been delivered to the email address you registered with. Kindly give it a look. *Ready to advance your abilities?* We've recently released fascinating new tests and lessons to assist you in mastering programming. Take them on, and you'll see professional growth!">
                    <img src="icons8-whatsapp-64.png" alt="WhatsApp Icon" style="width: 30px; height: 30px;">
                  </a>
                </td>
              </tr>
              <!-- Student Data End -->
            <?php
              }
            } else {
              echo "Error: " . mysqli_error($conn);
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<br>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  <script>
    function export_data() {
      let data = document.getElementById('data');
      var fp = XLSX.utils.table_to_book(data, { sheet: 'TTT' });
      XLSX.write(fp, {
        bookType: 'xlsx',
        type: 'base64'
      });
      XLSX.writeFile(fp, 'studentlist.xlsx');
    }
  </script>
</body>
<?php include('../home/footer.html') ?>
</html>
