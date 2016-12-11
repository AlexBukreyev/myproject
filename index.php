<?php
header('Content-Type: text/html; charset=utf-8');
session_start();


if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

    $vhod = "Вы вошли на сайт, как гость<br>Информация контента доступна только зарегистрированным пользователям!";
    }
    else
    {

    $vhod = "Вы вошли на сайт, как ".$_SESSION['login']."<br><img src='img/418b518e7d1987ef02c73281d15aa64e1572c1d9_m.jpg' />";
    }
    //echo json_encode($_SESSION());
   
    include 'viewHP.php';
    
    unset($_SESSION['login']); 
    session_destroy();
?>
