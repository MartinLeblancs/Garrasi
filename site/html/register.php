<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/register.css" media="screen" type="text/css" />
</head>
<body>
<?php
session_reset();
session_start();
if(!empty($_SESSION['error'])) {
    if ($_SESSION['error'] == true) {
        echo "<html lang='fr'><p style='text-align: center; color: red; margin-left: 70px'>Les deux mots de passes doivent etres identiques</p></html>";
    }
}
?>
<div id="box" >
    <form action="data_register.php" method="post">
        <h1 align="center">S'inscrire</h1>
        <label><h3>Nom d'utilisateur</h3></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <label><h3>Email</h3></label>
        <input type="text" placeholder="Entrer votre email" name="email" required>

        <label><h3>Mot de passe</h3></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password_1" required>

        <label><h3>Confirmer mot de passe</h3></label>
        <input type="password" placeholder="Confirmer le mot de passe" name="password_2" required>

        <input type="submit" id='submit' value='Inscription' >
    </form>
</div>
</body>
</html>
