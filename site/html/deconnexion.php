<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/register.css" media="screen" type="text/css" />
</head>
<body>
<?php
session_reset();
session_start();
$_SESSION['conn_or_not'] = false;
header("Location: home.php");

?>

</div>
</body>
</html>
