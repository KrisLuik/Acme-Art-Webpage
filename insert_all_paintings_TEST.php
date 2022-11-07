<?php

require_once 'config.php';

$details = [];

$details[] = [
    'Title' => 'At the Lapin Agile',
    'Year_Painted' => '1905',
    'Media' => 'oil',
    'Artist' => 'Vincent Van Gogh',
    'Style' => 'Impressionism',
    'Painting' => file_get_contents("images/AttheLapinAgile.png"),
];

$details[] = [
    'Title' => 'Bal du moulin de la Galette',
    'Year_Painted' => '1876',
    'Media' => 'oil',
    'Artist' => 'August Renoir',
    'Style' => 'Impressionism',
    'Painting' => file_get_contents("images/BaldumoulindelaGalette.png"),
];

$details[] = [
    'Title' => 'Cafe Terrace at Night',
    'Year_Painted' => '1888',
    'Media' => 'oil',
    'Artist' => 'Vincent Van Gogh',
    'Style' => 'Impressionism',
    'Painting' => file_get_contents("images/CafeTerraceatNight.png"),
];
$details[] = [
    'Title' => 'Doni Tondo (Doni Madonna)',
    'Year_Painted' => '1507',
    'Media' => 'oil',
    'Artist' => 'Michelangelo',
    'Style' => 'Mannerism',
    'Painting' => file_get_contents("images/DoniTondo.png"),
];
$details[] = [
    'Title' => 'Houses of Parliament',
    'Year_Painted' => '1899',
    'Media' => 'oil',
    'Artist' => 'Claude Monet',
    'Style' => 'Impressionism',
    'Painting' => file_get_contents("images/HouseofParliament.png"),
];
$details[] = [
    'Title' => 'Jaz de Bouffan',
    'Year_Painted' => '1877',
    'Media' => 'oil',
    'Artist' => 'Paul Cezanne',
    'Style' => 'Impressionism',
    'Painting' => file_get_contents("images/JazdeBouffan.png"),
];
$details[] = [
    'Title' => 'Mona Lisa',
    'Year_Painted' => '1503',
    'Media' => 'oil',
    'Artist' => 'Leonardo da Vinci',
    'Style' => 'Portrait',
    'Painting' => file_get_contents("images/MonaLisa.png"),
];
$details[] = [
    'Title' => 'Nature morte au compotier',
    'Year_Painted' => '1914',
    'Media' => 'oil',
    'Artist' => 'Pablo Picasso',
    'Style' => 'Cubism',
    'Painting' => file_get_contents("images/Naturemorteaucompotier.png"),
];
$details[] = [
    'Title' => 'Sunrise',
    'Year_Painted' => '1972',
    'Media' => 'oil',
    'Artist' => 'Claude Monet',
    'Style' => 'Impressionism',
    'Painting' => file_get_contents("images/sunrise.png"),
];
$details[] = [
    'Title' => 'The Potato Eaters',
    'Year_Painted' => '1885',
    'Media' => 'oil',
    'Artist' => 'Vincent Van Gogh',
    'Style' => 'Realism',
    'Painting' => file_get_contents("images/ThePotatoEaters.png"),
];
$details[] = [
    'Title' => 'The Hallucinogenic Toreador',
    'Year_Painted' => '1970',
    'Media' => 'oil',
    'Artist' => 'Salvador Dali',
    'Style' => 'Surrealism',
    'Painting' => file_get_contents("images/TheHallucinogenicToreador.png"),
];
$details[] = [
    'Title' => 'The Kingfisher',
    'Year_Painted' => '1495',
    'Media' => 'oil',
    'Artist' => 'Leonardo da Vinci',
    'Style' => 'Realism',
    'Painting' => file_get_contents("images/TheKingfisher.png"),
];
$details[] = [
    'Title' => 'The Persistence of Memory',
    'Year_Painted' => '1931',
    'Media' => 'oil',
    'Artist' => 'Salvador Dali',
    'Style' => 'Surrealism',
    'Painting' => file_get_contents("images/ThePersistenceofMemory.png"),
];
$details[] = [
    'Title' => 'Vase with Twelve Sunflowers',
    'Year_Painted' => '1888',
    'Media' => 'oil',
    'Artist' => 'Vincent Van Gogh',
    'Style' => 'Still-life',
    'Painting' => file_get_contents("images/VasewithTwelveSunflowers.png"),
];
$details[] = [
    'Title' => 'Vitruvian Man',
    'Year_Painted' => '1490',
    'Media' => 'pen-ink',
    'Artist' => 'Leonardo da Vinci',
    'Style' => 'Realism',
    'Painting' => file_get_contents("images/VitruvianMan.png"),
];
$details[] = [
    'Title' => 'Weaver',
    'Year_Painted' => '1884',
    'Media' => 'oil',
    'Artist' => 'Vincent Van Gogh',
    'Style' => 'Realism',
    'Painting' => file_get_contents("images/Weaver.png"),
];

$sql = "INSERT INTO Painting_Data(Title, Year_Painted, Media, Style, Painting) 
VALUES (:Title, :Year_Painted, :Media, :Style, :Painting)";

foreach ($details as $details) {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($details);
}

echo "Records inserted successfully";
