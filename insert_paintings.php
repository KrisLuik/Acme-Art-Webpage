<!doctype html>

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
    require_once('config.php');

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
    $painting = $_POST["InputPainting"];
    $year = $_POST["InputYearPainted"];
    $media = $_POST["InputMedia"];
    $artist = $_POST["InputArtist"];
    $style = $_POST["InputStyle"];


    $painting_images = [];

    $painting_images[] = [
        'Id' => $id,
        'Title' => $title,
        'Year_Painted' => $year,
        'Media' => $media,
        'Artist' => $artist,
        'Style' => $style,
        'Painting' => '<img class="thumb" src="data:image/png;base64,' . base64_encode($row['Painting']) . '"/>'
    ];

    if (isset($_POST["buttonAdd"])) {

        try {
            if (!empty($_POST["InputTitle"]) || !empty($_POST["InputPainting"]) ||!empty($_POST["InputYearPainted"]) || !empty($_POST["InputMedia"]) || !empty($_POST["InputArtist"]) || !empty($_POST["InputStyle"])) {
                $sql = "INSERT INTO Painting_Data (Title, Year_Painted, Media, Artist, Style, Painting) VALUES (:Title, :Year_Painted,:Media,:Artist, :Style,:Painting)";
                foreach ($painting_images as $row) {
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute($row);
            }
            echo "Records inserted successfully";
            }
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    ?>
</body>

</html>