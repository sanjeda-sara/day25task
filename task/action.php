<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Auth;
use App\classes\Register;


if(isset($_GET['pages'])) {
    if ($_GET['pages'] == 'home') {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'login') {
        include 'pages/login.php';
    }
    elseif ($_GET['pages'] == 'register') {
        include 'pages/register.php';
    }
    elseif ($_GET['pages']=='logout'){
        $auth = new Auth();
        $auth-> logout();
    }
    elseif ($_GET['pages'] == 'dashboard') {
        include 'pages/dashboard.php';
    }
    elseif ($_GET['pages'] == 'view-students') {
        $register = new Register();
        $students = $register -> getAllStudentInfo();
        include 'pages/viewStudents.php';
    }
}
elseif (isset($_POST['login_btn']))
{
    $auth       = new Auth($_POST);
    $message    = $auth->login();
    include 'pages/dashboard.php';
}
elseif (isset($_POST['reg_btn']))
{
    $register  = new Register($_FILES, $_POST);
    $message     = $register->index();
    include 'pages/register.php';
}

