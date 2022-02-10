<!doctype html>

<html lang="fr" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie-edge">
    <link rel="stylesheet" href="css/recup.css">
</head>

<body style="background-color: #CCEEFF">
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
        if (empty($_POST['goal']))
            $goal = $_SESSION['goal'];
        else
            $goal = $_POST['goal'];
        $_SESSION['goal'] = $goal;
        echo " <html><h1 id='title'> $goal</h1></html>";
        echo "<html><div style='margin-top: -173px'><a href='html/home.php'><img src='img/Garrasi_logo-removebg-preview.png' width='160px'></a></div></html>";
        echo "<br>";
        $query = sprintf("SELECT pseudo, message FROM %s", $goal);
        echo "<br>";

        if ($response = mysqli_query($conn, $query)) {
            while ($rows = mysqli_fetch_row($response)) {
                echo '<html><p id="chat"><strong><span class="pseudo">' . htmlspecialchars($rows[0]) . '</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="txt">' . htmlspecialchars($rows[1]) . '</span></p></html>';
            }
        } else {
            header('Location: html/site_no_found.html');
            Exit();
        }

    ?>

    <br>
    <div class="sendmessage">
        <form action="chat_post.php" method="post">

            <?php
                if ($_SESSION['conn_or_not'] == false) {
                    echo "<label for='pseudo'><p class='psd'>Pseudo :</p></label><input style='margin-left: 70px' type='text' name='pseudo'' id='pseudo' />";
                }
            ?>
                <br>
                <label for="message"><p class="msg">Message :</p></label><textarea type="text" name="message" id="message" rows="10" cols="50"></textarea>
                <br>
                <input type="hidden" name="goal" value="<?php echo $goal ?>"></input>
                <input type="submit" value="Envoyer" style="padding: 10px 20px"/>
        </form>
    </div>

</body>

</html>