<!--
<?php

    //require_once 'config.php';

    //$details = [];

  //  $details[] = [
    //    'Title' => 'Woman with a Parasol',
    //    'Year_Painted' => '1875',
     //   'Media' => 'oil',
    //    'Artist' => 'Claude Monet',
   //     'Style' => 'Impressionism',
   //     'Painting' =>  file_get_contents("images/woman_with_a_parasol.png"),
  //  ];


  //  $sql = "INSERT INTO Painting_Data(Title, Year_Painted, Media, Style, Painting) 
//VALUES (:Title, :Year_Painted, :Media, :Style, :Painting)";

   // foreach ($details as $details) {
 //       $stmt = $pdo->prepare($sql);
  //      $stmt->execute($details);
 //   }

 ///   echo "Records inserted successfully";
 //   ?>
--->
 <?php

    //require_once 'config.php';
    require_once('connection');
    if (class_exists('Connection')) {
        try {
            $database = new Connection();
        } catch (Exception $e) {
            echo "Connection failed because: " . $e->getMessage();
        }
    }
    $db = $database->open();

    $details = [];

    $id = $_POST["ID"];
    $title = $_POST["InputTitle"];
    $painting = $_POST["InputPainting"];
    $year = $_POST["InputYearPainted"];
    $media = $_POST["InputMedia"];
    $artist = $_POST["InputArtist"];
    $style = $_POST["InputStyle"];


    $details[] = [
        'Title' => $title,
        'Year_Painted' => $year,
        'Media' => $media,
        'Artist' => $artist,
        'Style' => $style,
        'Painting' => file_get_contents($painting),

        // 'Title' => 'Woman with a Parasol',
        // 'Year_Painted' => '1875',
        // 'Media' => 'oil',
        // 'Artist' => 'Claude Monet',
        // 'Style' => 'Impressionism',
        // 'Painting' =>  file_get_contents("images/woman_with_a_parasol.png"),
    ];


    $sql = "INSERT INTO Painting_Data(Title, Year_Painted, Media, Style, Painting) 
VALUES ($title, $year, $media, $style, $painting)";

    foreach ($details as $details) {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($details);
    }

    echo "Records inserted successfully";
    $database->close();
    ?>
