<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
$error = "You have successfully logged in!!<br><a href='index.php'>enter</a>";
if (isset($_POST['login'])) 
    {
    $login = $_POST['login'];
    if ($login =='')
    {
        unset($login);
    }
    }
if (isset($_POST['password']))
    {
    $password = $_POST['password'];
    if ($password == '')
        {
            unset($password);
        }
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripcslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ('bd.php');
    
    include 'proverka.php';
    
    
    include 'viewHP.php';
    
//    echo '<pre>';
//    echo json_encode($_SESSION);
//    echo '</pre>';
    ?>