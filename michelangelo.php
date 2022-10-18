<!doctype html>
<html lang="en">
<!-- Name: Kristiin Tribbeck
     ID: 30045325
     Description: creation of a multi-page client-server website for a local art gallery called Acme Arts.-->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<!-- Optimize code for mobile devices first and then scale up components as necessary using CSS media queries. -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Michelangelo | Assessment Three</title>
<!-- Linking HTML to CSS -->
<link rel="stylesheet" href="assessment_3.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>
    <!-- Grey with black text-->
    <?php
	  include_once('inc_nav.php');
      //test below file to check if footer works. 
      //include_once('footer.php');
    ?>
    <!--Comment out the nav bar later and change the extension to .php when using PHP. Start from here.-->
    <!--  <nav class="navbar navbar-dark bg-dark fixed-top">-->
    <!-- <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Acme Art Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Painting Collection</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#index.hmtl">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">All Paintings/All Artists</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#artist1.hmtl">August Renoir</a></li>
                                    <li><a class="dropdown-item" href="#artist2.hmtl">Michelangelo</a></li>
                                    <li><a class="dropdown-item" href="#artist3.hmtl">Vincent Van Goh</a></li>
                                    <li><a class="dropdown-item" href="#artist4.hmtl">Leonardo Da Vinci</a></li>
                                    <li><a class="dropdown-item" href="#artist5.hmtl">Claude Monet</a></li>
                                    <li><a class="dropdown-item" href="#artist6.hmtl">Pablo Picasso</a></li>
                                    <li><a class="dropdown-item" href="#artist7.hmtl">Salvador Dali</a></li>
                                    <li><a class="dropdown-item" href="#artist8.hmtl">Paul Cezanne</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Paintings by Style</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Impressionism</a></li>
                                    <li><a class="dropdown-item" href="#">Mannerism</a></li>
                                    <li><a class="dropdown-item" href="#">Still-life</a></li>
                                    <li><a class="dropdown-item" href="#">Portrait</a></li>
                                    <li><a class="dropdown-item" href="#">Realism</a></li>
                                    <li><a class="dropdown-item" href="#">Clubism</a></li>
                                    <li><a class="dropdown-item" href="#">Surrealism</a></li>
                                    <li>
                                </ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Paintings by Name</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#"></a></li>
                                    <li><a class="dropdown-item" href="#">At the Lapin Agile</a></li>
                                    <li><a class="dropdown-item" href="#">Bal du moulin de la Galette</a></li>
                                    <li><a class="dropdown-item" href="#">Cafe Terrace at Night</a></li>
                                    <li><a class="dropdown-item" href="#">Doni Tondo (Doni Madonna)</a></li>
                                    <li><a class="dropdown-item" href="#">Houses of Parliament</a></li>
                                    <li><a class="dropdown-item" href="#">Jaz de Bouffan</a></li>
                                    <li><a class="dropdown-item" href="#">Mona Lisa</a></li>
                                    <li><a class="dropdown-item" href="#">Nature morte au compotier</a></li>
                                    <li><a class="dropdown-item" href="#">Sunrise</a></li>
                                    <li><a class="dropdown-item" href="#">The Hallucinogenic Toreador</a></li>
                                    <li><a class="dropdown-item" href="#">The Persistence of Memory</a></li>
                                    <li><a class="dropdown-item" href="#">The Kingfisher</a></li>
                                    <li><a class="dropdown-item" href="#">The Potato Eaters</a></li>
                                    <li><a class="dropdown-item" href="#">Vase with Twelve Sunflowers</a></li>
                                    <li><a class="dropdown-item" href="#">Vitruvian Man</a></li>
                                    <li><a class="dropdown-item" href="#">Weaver</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Search Bar here?</a></li>
                                </ul>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav> -->
    <!--Comment out the nav bar later and change the extension to .php when using PHP. End here.-->
    <!-- PHP START-->
 <?php 
 session_start();
 if(isset($_SESSION['message'])){
     ?>
     <div class="alert alert-info text-center" style="margin-top:20px;">
         <?php echo $_SESSION['message']; ?>
     </div>
     <?php

     unset($_SESSION['message']);
 }
?>
<!--FINISH PHP-->

    <!--Start of table.-->
    <div class="container-fluid" id="containerStyle">
        <table class="table table-hover" style="margin-top:20px;">
            <thead class="table-secondary">
                <th>Id</th>
                <th>Title</th>
                <th>Painting</th>
                <th>Year</th>
                <th>Media</th>
                <th>Artist</th>
                <th>Style</th>
            </thead>
            <tbody>
                <!--PHP START-->
     <?php
         //include our connection
         include_once('connection.php');

         $database = new Connection();
         $db = $database->open();
         try{	
             $sql = "SELECT * FROM Painting_Data WHERE Artist = 'Michelangelo'";
             foreach ($db->query($sql) as $row) {
                 ?>
                 <tr>
                     <td><?php echo $row['Id']; ?></td>
                     <td><?php echo $row['Title']; ?></td>
                     <td><?php echo '<img src="data:image/png;base64,'.base64_encode($row['Painting']).'"/>'; ?></td>
                     <td><?php echo $row['Year_Painted']; ?></td>
                     <td><?php echo $row['Media']; ?></td>
                     <td><?php echo $row['Artist']; ?></td>
                     <td><?php echo $row['Style']; ?></td>
                 </tr>
                 <?php 
             }
         }
         catch(PDOException $e){
             echo "There is some problem in connection: " . $e->getMessage();
         }
         //close connection
         $database->close();
     ?>
    <!--FINISH PHP-->
            </tbody>
        </table>
    </div>
    <!-- <footer>
        <div class="row">
            <div class="col-md-6 ms-2">
                <p>Copyright &copy; Kristiin Tribbeck </p>
            </div>
        </div>
    </footer> -->
    <?php
    include_once('footer.php');
    ?>
    <!--FOOTER END -->
</body>

</html>