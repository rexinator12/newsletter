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
    <?php
    /* Hier wird die newsdaten mit eine getmethode aufgenommen und danach kann man es überschreiben ausser ds Titel*/
    $gDateiname = $_GET['dateiname'];
    $gName = $_GET['name'];
    $gText = $_GET['newstxt'];

        echo"<div class='dropdown'>
            <nav>
                <img class='logo' src='Mine-News.png'>
                <ul>
                    <li><a href='index.php'>News</a></li>
                    <li><a href='newserst.php'>News erstellen</a></li>
                    <li><a href='verwalten.php'>News verwalten</a></li>
                </ul>
            </nav>
        </div>
        <div class='formular'>
        <form enctype='multipart/form-data' action='bearbeiten.php?dateiname=&name=&newstxt=' method='post'>
        <input type='text' class='form' name='name'placeholder='Ihr Name' value='$gName'  required /><br>
        <input type='text' class='form' name='title' placeholder='Titel' value='$gDateiname' readonly required /><br>
        <input type='date' class='form' name='datum' placeholder='Datum' required /><br>
        <textarea id='text' class='form' name='newstxt' rows='8' cols='50' placeholder='Ihre News' required>$gText</textarea>
        <input type='submit' name='senden' class='form' />
        </form>
        </div>
            <div class='footer-unten'>
              <p>Made by: Janakan Selvathas</p>
            </div>
    </body>
</html>";
/* wird überschriben wieder geschpeichert*/
$name = $_POST['name'];
$title = $_POST['title'];
$datum = $_POST['datum'];
$newstxt = $_POST['newstxt'];
$dateiname ="text/". $_POST['title'].".txt";

$inhalt = $title."||". $newstxt. "||" . $datum . "||" .$name; 
file_put_contents($dateiname, $inhalt);

?>