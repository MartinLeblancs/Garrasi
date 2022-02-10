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
$log_username = $_POST['log_username'];
$log_password = $_POST['log_password'];
$_SESSION['username'] = $log_username;
$conn_or_not = false;

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
$select = mysqli_query($conn, "SELECT * FROM users WHERE username = '$log_username' AND password_1 = '$log_password'");
if (mysqli_num_rows($select) != false)
    {
        $conn_or_not = true;
        $_SESSION['false'] = true;
        $_SESSION['conn_or_not'] = $conn_or_not;
        $_SESSION['log_username'] = $log_username;
        header('Location: home.php');
    }
else
{
    $conn_or_not = false;
    $_SESSION['wrong_pass'] = true;
    $_SESSION['conn_or_not'] = $conn_or_not;
    header('Location: login.php');
}
?>

</body>
</html>
