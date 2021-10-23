<?php
$id = $_POST['id_tov'];//получаем id товара
$count_good = $_POST['count_good']; // получаем количество товара

        session_start();
        if (!isset($_SESSION['cart'])) {//если сесия корзины не существует
            $temp[$id] = $id;//в масив заносим количество тавара 1 
            $temp[$count_good]=$count_good;
        } else {//если в сесии корзины уже есть товары
            $temp = $_SESSION['cart'];//заносим в масив старую сесию
            if (!array_key_exists($id, $temp)) {//проверяем есть ли в корзине уже такой товар
                $temp[$id] = $id;//в масив заносим количество тавара 1 
                $temp[$count_good]=$count_good;
            }      
        }
        $count = count($temp);//считаем товары в корзине
        $_SESSION['cart'] = $temp;//записывае в сесию наш масив
        echo $count; //возвращаем количество товаров
?>