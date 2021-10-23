<?php
$id = $_POST['id_tov'];//получаем id
$col = $_POST['count_good'];//получаем количество
        
session_start(); //стартуем сессию
$temp = $_SESSION['cart']; //переносим сессию во временную переменную
$temp[$id]=$col; //изменяем количество
$_SESSION['cart'] = $temp; //сохраняем сессию
?>