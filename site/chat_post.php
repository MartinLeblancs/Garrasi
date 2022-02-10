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
</head>

<body>
    <?php
        session_start();
        $found = FALSE;
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'azertyui';
        $db = 'users';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
        }
        if ($_SESSION['conn_or_not'] == true)
        {
            $name = $_SESSION['username'];
        }
        else
        {
            $name = $_POST['pseudo'];
        }
        $message = $_POST['message'];
        $goal = $_POST['goal'];
        $query = sprintf("insert into %s (pseudo, message) values ('%s', '%s')", $goal, $name, $message);
        if ($response = mysqli_query($conn, $query) == false) {
            header('Location: html/site_no_found.html');
            Exit();
        }
        header('Location: recup_donnees.php');
        Exit();
        ?>

</body>

</html>