<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie-edge">
    <title>doc</title>
</head>

<body>

    <?php

    session_reset();
    session_start();
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'azertyui';
    $db = 'users';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $query = sprintf("insert into %s (username, email, password_1, password_2) values ('%s', '%s', '%s', '%s')", $db ,$username, $email, $password_1, $password_2);
    $data_username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$log_username'");
    if (strcmp($password_1, $password_2) == 0)
    {
        $_SESSION['error'] = false;
        mysqli_query($conn, $query);
        header('Location: home.php');

    }
    else {
        $_SESSION['error'] = true;
        header('Location: register.php');

    }
    exit();
    ?>
</body>

</html>
