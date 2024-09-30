<?php
include('../db/dbconn.php');
session_start();

if (isset($_POST['otp'])) {
    $otp = $_POST['otp'];

    if ($otp == $_SESSION['otp']) {
        // OTP is valid, log the user in
        echo 'Login successful!';
        // Redirect to a protected page or perform other login actions
    } else {
        echo 'Invalid OTP.';
    }
}

?>

<html>
<head>
    <title>Verify OTP</title>
</head>
<body>
    <h2>Verify OTP</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="otp">Enter OTP:</label>
        <input type="text" id="otp" name="otp" required><br><br>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>