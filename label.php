<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labels</title>
    <link rel="stylesheet" type="text/css" href="label/style.css">
    <link rel="stylesheet" type="text/css" href="label/lightbox.min.css">
    <script type="text/javascript" src="label/lightbox-plus-jquery.min.js"></script>
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
    <div class="label">
    <h1>Labels</h1>
    </div>
    <hr>
    <div class="container text-center gallery">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
               <a href="img/logo/gstar.png" data-lightbox="gallery"><img src="img/logo/gstar.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/logo/glogo.png" data-lightbox="gallery"><img src="img/logo/glogo.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/logo/fashion.png" data-lightbox="gallery"><img src="img/logo/fashion.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/logo/food.png" data-lightbox="gallery"><img src="img/logo/food.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/logo/king.png" data-lightbox="gallery"><img src="img/logo/king.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/logo/ocean.png" data-lightbox="gallery"><img src="img/logo/ocean.png" alt=""></a>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>