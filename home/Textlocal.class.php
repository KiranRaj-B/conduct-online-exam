<?php
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

        // Send OTP to user's mobile number using your preferred method
        // (e.g., using a third-party SMS gateway or a custom implementation)

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