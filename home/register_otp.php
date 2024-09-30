<?php

require('Textlocal.class.php');
include('../db/dbconn.php');
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['mobile_number'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile_number'];

    $conn = new mysqli("localhost", "root", "", "online_exam"); // assuming you have a connection established

    $query = "INSERT INTO users_otp (username, password, mobile_number) VALUES (?,?,?)";

    $stmt = $conn->prepare($query); // prepare the query
    $stmt->bind_param("sss", $username, $password, $mobile_number); // bind parameters
    $stmt->execute(); // execute the query

    $stmt->close(); // close the statement
    $conn->close(); // close the connection

    header('Location: login_otp.php');
}
?>

<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobile_number" name="mobile_number" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>