<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex</title>
    <link rel="stylesheet" type="text/css" href="flex/style.css">
    <link rel="stylesheet" type="text/css" href="flex/lightbox.min.css">
    <script type="text/javascript" src="flex/lightbox-plus-jquery.min.js"></script>
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
    <div class="flex">
    <h1>Flex</h1>
    </div>
    <hr>
    <div class="container text-center gallery">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
               <a href="img/flex/bus.png" data-lightbox="gallery"><img src="img/flex/bus.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/flex/raja.png" data-lightbox="gallery"><img src="img/flex/raja.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/flex/malhi.png" data-lightbox="gallery"><img src="img/flex/malhi.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/flex/kisan.png" data-lightbox="gallery"><img src="img/flex/kisan.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/flex/panj.png" data-lightbox="gallery"><img src="img/flex/panj.png" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                <a href="img/flex/clinic.png" data-lightbox="gallery"><img src="img/flex/clinic.png" alt=""></a>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>