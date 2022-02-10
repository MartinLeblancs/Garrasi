<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/not_found.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>No found</title>
</head>
<body style="background-color: #CCEEFF">
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
$goal_create = $_POST['goal_create'];
$query = sprintf("CREATE TABLE %s (id INT NOT NULL KEY auto_increment, pseudo VARCHAR(70), message VARCHAR(255))", $goal_create);
mysqli_query($conn, $query);
header("Location: site_no_found.html");
?>

</body>
</html>