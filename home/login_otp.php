<?php
require('Textlocal.class.php');
include('../db/dbconn.php');


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users_otp WHERE username =? AND password =?";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();

        $otp = rand(100000, 999999);

        $Textlocal = new Textlocal(false, false, 'Mzg0NjM1NGIzNDQyNzE1NTcwMzI3YTU3NWE2NTUzNjk=');

        $numbers = array($user_data['mobile_number']);
        $sender = 'TXTLCL';

        $message = 'Your OTP is: '. $otp;

        $response = $Textlocal->sendSms($numbers, $message, $sender);

        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['otp'] = $otp;

        header('Location: verify_otp.php');
    } else {
        echo 'Invalid username or password.';
    }

    $stmt->close();

    $conn->close();
}

?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>