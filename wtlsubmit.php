<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // In a real application, do not display passwords

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registration Success</title>
        <link rel='stylesheet' href='wtlstyle.css'>
    </head>
    <body>
        <div class='container'>
            <h1>Registration Successful</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Password:</strong> $password</p>
            <a href='wtlindex.html'>Go Back</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: wtlindex.html");
    exit();
}
?>
