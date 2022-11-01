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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>
    <!-- Grey with black text -->
    <?php
	  include_once('inc_nav.php');
      // test below file to check if footer works. 
      // include_once('footer.php');
    ?>
    <!--MAIN BODY START (Make it into a separate file as well (?) i.e., like the navbar)-->
    <div class="container-fluid" id="containerStyle">
        <div class="p-3 my-3 border border-info rounded">
            <h2>Assessment Three Group Project</h2>
            <p class="lead">Name: Kristiin Tribbeck<br>
                ID: 30045325<br>
                Assessment details: This website utilises the Bootstrap framework to display of a multi-page
                client-server website
                for a local art gallery called Acme Arts. The knowledge base data is hosted on a MySQL server
                which populates the various web pages. </p>
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