<?php //session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
<?php if (isset($_SESSION['id'])){ ?>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
<!--    <div class="container">-->
        <div class="col-md-3">
            <img src="assets/img/bitm.png" alt="bitm">
        </div>
        <div class="col-md-6">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item"><a href="action.php?pages=dashboard" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="action.php?pages=register" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="action.php?pages=view-students" class="nav-link">View Students</a></li>
                <li class="nav-item"><a href="action.php?pages=seip" class="nav-link">SEIP</a></li>
                <li class="nav-item"><a href="action.php?pages=courses" class="nav-link">Courses</a></li>
                <li class="nav-item"><a href="action.php?pages=aboutUs" class="nav-link">About US</a></li>
                <li class="nav-item"><a href="action.php?pages=logout" class="nav-link">Logout</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <img src="assets/img/basis.png" alt="bitm">
        </div>
<!--    </div>-->
</nav>
<?php } ?>