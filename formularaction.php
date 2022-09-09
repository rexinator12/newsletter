<?php
// Hier werden die Daten mit Post methode entnommen und in eine Text Datei gespeichert
$name = $_POST['name'];
$title = $_POST['title'];
$datum = $_POST['datum'];
$newstxt = $_POST['newstxt'];
$dateiname ="text/". $_POST['title'].".txt";
$inhalt = $title."||". $newstxt."||" . $datum . "||" .$name; 
file_put_contents($dateiname, $inhalt);
//file_put_contents($bildname, $bild);
 //führt wieder zur startseite 
//header("Location: index.php");
       // Testen, ob das Formular geschickt wurde
	   $file= $_FILES['picture'];                // superglobaler ARRAY $_FILES
	   //print_r($file); 
	   // ---alle wichtigen Variablen aus dem superglobalen Array herauslesen ---------------
	   $fileName= $_FILES['picture']['name'];    // davon 'Name’
	   $fileTmpName= $_FILES['picture']['tmp_name'];
	   $filegrosse= $_FILES ['picture']['size']; // davon 'temporärer Name', damit getestet werden kann$fileGroesse= $_FILES['file']['size']; // davon 'Datei-Grösse’
	   $fileFehler= $_FILES['picture']['error']; // davon 'Fehler’
	   $fileTyp= $_FILES['picture']['type'];     // davon 'Typ’
	   //-------Vorbereitung der Datei-Endung
	   $fileArt= explode('.',$fileName); // Art des Dateinamens nach dem Komma in Array extrahieren$fileActualExt= strtolower(end($fileArt)); // im letzten Array-Teil wird alles kleingeschrieben
	   $fileActualExt= strtolower(end($fileArt));
	   $erlaubt = array('jpg','jpeg','png','pdf');
	   //----------------Prüfen auf verschiedene Kriterien: ----------------------------------    
	   if(in_array($fileActualExt,$erlaubt)) {            // der File-Typ ist erlaubt
		 if($fileFehler=== 0) {                 // Keine Fehlermeldung von PHP
		   if($filegrosse < 1000000) {                   // nur bis 1'000'000 Bytes Grösse
			 //----------------jetzt ist alles geprüft, es wird der UPLOAD vorbereitet: ------
			 $fileZiel= 'pic/'.$title.'.'. $fileArt[1];          // hierher soll verschoben werden
   
			 //----------------jetzt wird die Datei hochgeladen, wenn alle Kriterien erfüllt:
			 move_uploaded_file($fileTmpName, $fileZiel); // jetzt wird die angegebene Datei verschoben
			 header("Location: index.php"); // zurück in die Startposition
			 //-------------------------------------------------------------------------------
		   } else {
			 echo "Datei ist zu gross";
			 
		   }
		 } else { 
		   echo "Es gab ein Fehl beim Hochladen der Datei";
		   print $fileFehler;
		   echo $filegrosse;
		 }
	   } else {
		 echo "Diese Art von Datei kann nicht hochgeladen werden";
	 } 
?>
