<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiting Cards</title>
    <link rel="stylesheet" type="text/css" href="vc/style.css">
    <link rel="stylesheet" type="text/css" href="vc/lightbox.min.css">
    <script type="text/javascript" src="vc/lightbox-plus-jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
    include 'header.php';
    ?>
    <?php
    include 'list.php';
    ?>
    <div class="vc">
    <h1>Visiting Cards</h1>
    </div>
    <hr>
    <div class="container text-center gallery">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
               <a href="img/vc/jewellers.png" data-lightbox="gallery"><img src="img/vc/jewellers.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/vc/hospital.png" data-lightbox="gallery"><img src="img/vc/hospital.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/vc/smith.png" data-lightbox="gallery"><img src="img/vc/smith.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/vc/opal.png" data-lightbox="gallery"><img src="img/vc/opal.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/vc/boutique.png" data-lightbox="gallery"><img src="img/vc/boutique.png" alt=""></a>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>