<!DOCTYPE html>
<html>
    <head>
        <title>Mine News</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="http://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta name="viewport" content0="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div class="dropdown">
            <nav>
                <img class="logo" src="Mine-News.png">
                <ul>
                    <li><a href="index.php">News</a></li>
                    <li><a href="newserst.php">News erstellen</a></li>
                    <li><a href="verwalten.php">News verwalten</a></li>
                </ul>
            </nav>
        </div>
        <?php
        date_default_timezone_set("Europe/Berlin");
        $timestamp = time();
        $datum0 = date("d.m.Y",$timestamp);
        
        echo"<!-- Das ist der Formular. Hier werden die Daten verlangt und erst nach vollständige erfüllen kann man es absenden -->
        <div class='formular'>
        <form enctype='multipart/form-data' action='formularaction.php' method='post'>
        <input type='text' class='form' name='name' placeholder='Ihr Name' required /><br>
        <input type='text' class='form' name='title' placeholder='Titel' required /><br>
        <input type='date' class='form' name='datum' placeholder=$datum0 required /><br>
        <textarea id='text' class='form' name='newstxt' rows='8' cols='50' placeholder='Ihre News' required></textarea>
        <input type='file' name='picture'/>
        <input type='submit' name='senden' class='form' />
        </form>
        </div>"
        ?>
            <div class="footer-unten">
              <p>Made by: Janakan Selvathas</p>
            </div>
    </body>
</html>

<?php

if(isset($_GET['löschen']))
{
    unlink($_GET['filename']);
    unlink($_GET['delbild']);
    echo "Die Datei wurde erfolgreich gelöscht.";
}

?>