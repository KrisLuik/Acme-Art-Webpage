<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Optimize code for mobile devices first and then scale up components as necessary using CSS media queries. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Assessment Three</title>
    <!-- Linking HTML to CSS -->
    <link rel="stylesheet" href="assessment_3.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="crudfunctions.js"></script>
</head>

<body>
<?php
include_once('inc_nav.php');
include_once('connection.php');

if (class_exists('Connection')) {
    try {
        $database = new Connection();
    } catch (Exception $e) {
        echo "Connection failed because: " . $e->getMessage();
    }
}
$db = $database->open();

$id = $_POST["ID"];
$title = $_POST["InputTitle"];
//$painting = $_POST["InputPainting"]['tmp_name'];
//$painting = $_FILES["InputPainting"]["Input_Media"];
$year = $_POST["InputYearPainted"];
//$media =  $_FILES["InputPainting"]['temp_name'];
$folder = "images/".$painting;
//$painting = base64_encode(file_get_contents(addslashes($painting)));
// $media = $_POST["InputMedia"];
$artist = $_POST["InputArtist"];
$style = $_POST["InputStyle"];
$msg ="";


if (isset($_POST["buttonAdd"])) {
    try {
        $media = $_FILES["InputPainting"]["Painting"];
        $tempname = $_FILES["InputPainting"]["tmp_name"];
        $folder = "images/" . $media;
        // check if name of the folder is correct. 
        // 1. Connect w db
        $sql = "INSERT INTO Painting_Data (Title, Painting, Year_Painted, Media, Artist, Style) 
    VALUES ('$title', '$painting', '$year', '$media', '$artist', '$style')";
        
        if(move_uploaded_file($tempname, $folder)){
            $msg = "Image Uploaded Successfully";

        }else{
            $msg = "Failed to upload image";
        }
        $result = $db->query($sql);
        //$result = mysqli_query($db, "SELECT * FROM Painting");
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else if (isset($_POST["buttonEdit"])) {
    try {
        if (!empty($_POST["ID"]) && !empty($_POST["InputTitle"]) && !empty($_POST["InputYearPainted"]) && !empty($_POST["InputMedia"]) && !empty($_POST["InputArtist"]) && !empty($_POST["InputStyle"])) {
            $sql = "UPDATE Painting_Data SET Title='$title', Painting='$painting', Year_Painted='$year', Media='$media', Artist='$artist', Style='$style' WHERE Id='$id'";
            $result = $db->query($sql);
        } else {
            echo 'please fill out all fields';
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
} else if (isset($_POST["buttonDelete"])) {
    try {
        $sql = "DELETE FROM Painting_Data WHERE Id = '$id'";
        $result = $db->query($sql);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//function displayImageFromDatabase(){

   // $selectImageFromDB = "SELECT * FROM Painting_Data";
    //while ($row = mysqli_fetch_assoc($selectImageFromDB)){
      //  echo '<img class="thumb" src="data:image/png;base64,'.base64_encode($row['Painting']).'"/>'; 
    
   // }

$database->close();

?>

</html>