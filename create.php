<?php
include_once('connection.php');

$database = new Connection();
$db = $database->open();
		  
	$title = $_POST['InputTitle'];
	$painting = $_POST['InputPainting'];
	$year = $_POST['InputYearPainted'];
	$media = $_POST['InputMedia'];
	$artist = $_POST['InputArtist'];
	$style = $_POST['InputStyle'];
	
         try {
          $sql = "INSERT INTO Painting_Data (Title, Painting, Year_Painted, Media, Artist, Style) VALUES (
		$title, $painting, $year, $media, $artist, $style)";		
        $result = $db->query($sql);
         } catch (PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
 }
$database->close();
?>