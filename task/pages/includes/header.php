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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">B B C</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=dashboard" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="action.php?pages=register" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="action.php?pages=view-students" class="nav-link">View Students</a></li>
            <li class="nav-item"><a href="action.php?pages=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>
<?php } ?>