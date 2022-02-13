<?php
require '../function.php';
require '../API/school.php';
require '../API/student.php';
require '../API/classes.php';
require '../API/sight.php';

function logout(){  //登出
    session_start();
    $_SESSION["admin"] = null;
    unset($_SESSION['admin']);
    session_destroy();
    Header("HTTP/1.1 303 See Other");
    Header("Location: index.php");
}


if (function_exists($_GET['do'])) {
    $_GET['do']();
}

