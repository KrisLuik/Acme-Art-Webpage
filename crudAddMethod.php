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
    <!-- Grey with black text -->
    <?php
    include_once('inc_nav.php');
    // test below file to check if footer works. 
    // include_once('footer.php');
    ?>
    <!--MAIN BODY START-->
    <div class="container-fluid" id="containerStyle">
        <div class="p-3 my-3 border border-info rounded">
            <h2>Update Painting Database</h2>
            <!--ORIGINAL <form action="InsertValuesTest.php" method="GET">-->
            <form action="addValues.php" method="GET">
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="Title" id="Title" aria-describedby="emailHelp" placeholder="Enter the painting name:">
                    <br>
                </div>
                <div class="form-group">
                    <label for="Year_Painted">Year</label>
                    <input type="number" class="form-control" name="Year_Painted" id="Year_Painted" placeholder="Enter the year the painting was painted:">
                    <br>
                </div>
                <div class="form-group">
                    <label for="Artist">Artist</label>
                    <input type="text" class="form-control" name="Artist" id="Artist" placeholder="Enter the artist name of the painting:">
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
                    <button type="submit" name="submit" class="btn btn-success">Edit</button>
                    <button type="submit" name="submit" class="btn btn-success">Delete</button>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <!--MAIN BODY END -->
    <!--FOOTER START -->
    <footer>
        <div class="row">
            <div class="col-md-6 ms-2">
                <p>Copyright &copy; Kristiin Tribbeck </p>
            </div>
        </div>
    </footer>
    <!--FOOTER END -->
</body>

</html>