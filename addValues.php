<!doctype html>
<html lang="en">
<!-- Name: Kristiin Tribbeck
     ID: 30045325
     Description: creation of a multi-page client-server website for a local art gallery called Acme Arts.
-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Optimize code for mobile devices first and then scale up components as necessary using CSS media queries. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Paintings | Assessment Three</title>
    <!-- Linking HTML to CSS -->
    <link rel="stylesheet" href="assessment_3.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Grey with black text-->
    <?php
    include_once('inc_nav.php');
    // test below file to check if footer works. 
    // include_once('footer.php');
    ?>

    <?php
    session_start();
    if (isset($_SESSION['message'])) {
    ?>
        <div class="alert alert-info text-center" style="margin-top:20px;">
            <?php echo $_SESSION['message']; ?>
        </div>
    <?php

        unset($_SESSION['message']);
    }
    ?>

    <div class="container-fluid" id="containerStyle">
        <div class="p-3 my-3 border border-info rounded">
            <h2>Update Painting Database</h2>
        <!-- <form action="all-paintings.php" method="GET"> -->
            <form>
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="Title" id="Title" aria-describedby="emailHelp" placeholder="Enter the painting name:">
                    <br>
                </div>
            	 <div class="form-group">
                    <label for="Year_Painted">Year</label>
                    <input type="number" class="form-control" name="Year_Painted" id="Year_Painted" placeholder="Enter the year the painting was completed:">
                    <br>
                </div>
                 <div class="form-group">
                    <label for="Artist">Artist</label>
                    <input type="text" class="form-control" name="Artist" id="Artist" placeholder="Enter the Name of the artist who created the painting:">
                    <br>
                </div>
                 <div class="form-group">
                    <label for="Style">Style</label>
                    <input type="text" class="form-control" name="Style" id="Style" placeholder="Enter the style of the painting:">
                    <br>
                </div>
                <div class="form-group">
                    <label for="Painting">Painting Image(Thumbnail)</label>
                    <input type="text" class="form-control" name="Painting" id="Painting" placeholder="Enter the media type of the painting:">
                    <br>
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-success">Add</button>
                    <!--<button type="submit" name="edit" class="btn btn-success">Edit</button>
                    <button type="submit" name="submit" class="btn btn-success">Delete</button>
					-->
                    <br>
                </div>
            </form>
                 <?php
                $Title = $_GET['Title'];
             	$Year_Painted = $_GET['Year_Painted'];
             	$Artist = $_GET['Artist'];
            	$Style = $_GET['Style'];
                $Painting = $_GET['Painting'];
               	 
               	include_once('connection.php');
              	$database = new Connection();
              	$db = $database->open();
                try {
                    $sql = "INSERT INTO Painting_Data (Title, Year_Painted, Artist, Style, Painting) VALUES ('$Title', '$Year_Painted','$Artist','$Style', '$Painting')";
                 //$row = $db->query($sql);
                 foreach ($db->query($sql) as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['Title']; ?></td>
                            <td><?php echo $row['Year_Painted']; ?></td>
                            <td><?php echo $row['Artist']; ?></td>
                            <td><?php echo $row['Style']; ?></td>
                            <td><?php echo '<img class="thumb" src="data:image/png;base64,' . base64_encode($row['Painting']) . '"/>'; ?></td>
                        </tr>
               <?php
                    }
                } catch (PDOException $e) {
                   // echo "There is some problem in connection: " . $e->getMessage();
                }
                // close connection
               $database->close();
                ?>
                <!-- PHP TEST 
                </tbody>
            </table>
		-->
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>
    <!--FOOTER END -->
</body>

</html>