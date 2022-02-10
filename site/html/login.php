<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />

</head>
<body>
<?php
    session_reset();
    session_start();
    if (!empty($_SESSION['wrong_pass'])) {
        if ($_SESSION['wrong_pass'] == true) {
            echo "<html lang='fr'><p style='text-align: center; color: red; margin-left: 70px'>Nom d'utilisateur ou mot de passe incorrect</p></html>";
        }
}
?>
<div id="box" >
    <form action="data_login.php" method="post">
        <h1 align="center">Connexion</h1>
        <label><h3>Nom d'utilisateur</h3></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="log_username" required>

        <label><h3>Mot de passe</h3></label>
        <input type="password" placeholder="Entrer le mot de passe" name="log_password" required>
        <input type="submit" id='submit' value='Connexion' >
</div>
</body>
</html>
