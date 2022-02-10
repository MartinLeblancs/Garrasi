<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Acceuil</title>
</head>


<body style="background-color: #CCEEFF">

<strong class="welcome_user">
    <?php
    session_reset();
    session_start();
    $_SESSION['error'] = false;
    $_SESSION['wrong_pass'] = false;

    if (!empty($_SESSION['conn_or_not'])) {
            echo "Bonjour, ";
            echo $_SESSION['log_username'];
        }
        else
            echo "Vous n'etes pas connecté";
    ?>
</strong>

<img class="logo" src="../img/Garrasi_logo-removebg-preview.png">

    <br>
    <h3 class="soustitre1">Un site malveillant ? Frauduleux  ? Prévenez-nous pour protéger la communautée !</h3>
    <h2>Dites Garrasi !</h2>

<div class="wrap">
    <br><br><br><br><br><br>


    <form class="search" action="../recup_donnees.php" method="post">
            <input type="text" class="searchTerm" placeholder="Entrez le nom du site" name="goal">
            <button type="submit" class="searchButton"onclick="javascript:document.location.href='liste.html'">
                <i class="fa fa-search"></i>
                Chercher
            </button>
        </form>
    </div>
    <br><br><br><br><br><br>
    <div class="soustext">
        <p>Nous listons les commentaires, les avis et notes des sites que vous signalez !<br>Vous pouvez donc à la fois consulter les critiques des sites,
         mais aussi,<br>faire part de vos expériences et de votre avis lors de la rencontre d'un site frauduleux pour prévenir les internautes !</p>
    </div>
    <br>
    <div class="menu">
        <p>
            <?php
            if (empty($_SESSION['conn_or_not']))
            {
                echo "<html><a href='login.php'>Se connecter</a> | <a href='register.php'>S'inscrire</a></html>";
            }
            else
            {
                echo "<html><a href='deconnexion.php'>Deconnexion</a></html>";
            }

            ?>
        </p>
    </div>
</body>

</html>