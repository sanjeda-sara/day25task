<?php
session_start();
if (!isset($_SESSION['id']))
{
    header('Location: action.php?pages=login');
}
?>


<?php include "pages/includes/header.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/img/s1.jpg" class="d-block w-100 show active" alt="image1">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/img/s2.jpg" class="d-block w-100" alt="image2">
        </div>
        <div class="carousel-item">
            <img src="assets/img/s3.jpg" class="d-block w-100" alt="image3">
        </div>
        <div class="carousel-item">
            <img src="assets/img/s5.jpg" class="d-block w-100" alt="image5">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</body>
</html>

<?php include "pages/includes/footer.php"; ?>
