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
    <h1 class="heading">Check Your Students Reviews </h1>

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
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email Id</th>
              <th>Message</th>
              <th>Send Mail</th>
            </tr>
          </thead>
          <tbody>
            <!-- PHP code for selecting students from the database -->
            <?php
            $query = "SELECT * FROM contact_us";
            $result = mysqli_query($conn, $query);

            if ($result) {
              while ($fetch = mysqli_fetch_assoc($result)) {
            ?>
              <!-- Student Data Start -->
              <tr>
                <td><?php echo $fetch['id']; ?></td>
                <td><?php echo $fetch['first_name']; ?></td>
                <td><?php echo $fetch['last_name']; ?></td>
                <td><?php echo $fetch['email']; ?></td>
                <td><?php echo $fetch['text']; ?></td>
                <td>
                  <a target="_blank" href="mailto:<?php echo $fetch['email']; ?>?subject=Thank%20You%20for%20Contacting%20Us&amp;body=Dear%20<?php echo $fetch['first_name']; ?>,%0D%0D%0AThank%20you%20for%20contacting%20us!%0D%0A%0DSubject:%20General%20Inquiry%0D%0A%0D%0AYour%20Message:%0D%0AThank%20you%20for%20using%20our%20website%20to%20learn%20programming%20languages%20and%20for%20choosing%20us%20to%20enhance%20your%20skills.%20We%20are%20delighted%20to%20assist%20you%20in%20your%20journey%20towards%20mastery.%0D%0A%0D%0AFeel%20free%20to%20ask%20anything%20else%20or%20let%20us%20know%20how%20we%20can%20assist%20you%20further.%0D%0A%0D%0ARegards,%0D%0AKiran%20Raj      ">
                      <img src="mail-icon.png" alt="Mail Icon" style="width: 30px; height: 30px;">
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
