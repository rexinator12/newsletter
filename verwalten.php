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
        <div class="inhalt">
        
        <?php
        /* hier wurde die einzelteile geordnet*/
    foreach(glob("text/*.txt") as $filename){
    $filename= file_get_contents("$filename");
    $alles = explode("||", $filename);
    $title = $alles[0];
    $newstxt = $alles[1];
    $datum = $alles[2];
    $name = $alles[3];
    $delbild = "pic/$title.jpg";
    /* hier wird ein link erstellt wo zu bearbeiten oder löschen führt */
    echo "<div class='inhalt'><div class='title'>$title</div>
    <div class='newstext'>$newstxt</div>
    <div class='pic'><img src='pic/$title.jpg' class='bild'/></div>
    <div class='datum'>$datum</div>
    <div class='name'>$name</div></div>
    <div class='button'>
    <a href='bearbeiten.php?dateiname=$title&newstxt=$newstxt&name=$name&delbild=pic/$title.jpg'>Bearbeiten</a>
    <a href='newserst.php?löschen=true&filename=text/$title.txt&delbild=pic/$title.jpg' >Löschen</a></div>";
}
?>
            <div class="footer-unten">
              <p>Made by: Janakan Selvathas</p>
            </div>
    </body>
</html>