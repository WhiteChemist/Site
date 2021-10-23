<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/style_order.css'>
    <script>
    //изменение количества
    $('.count-product').change(function() { //изменение содержимого инпута     
        var col = $(this).val(); //получаем количество
        if (col < 1) {
            col = 1;
            $(this).val(1);
        } //если ввели меньше 1 установим 1
        var id = $(this).attr('id'); //получаем id товара
        $.ajax({ //аякс-запрос
            type: "POST", //метод
            url: '../backend/cartamount.php', //куда передаем
            data: {
                col_tov: col,
                id_tov: id
            }, //данные
            success: function() { //получаем результат
                //тут можно пересчитать сумму
            }
        });
    });
    //удаление товара
    $('.btn-del').click(function() { //клик на кнопку     
        var id = $(this).attr('id'); //получаем id товара
        $.ajax({ //аякс-запрос
            type: "POST", //метод
            url: '../backend/cartdel.php', //куда передаем
            data: {
                id_tov: id
            }, //данные
            success: function(data) { //получаем результат
                $('tr#' + id).css('display', 'none'); //скрываем строку таблицы
            }
        });
    });
    </script>
</head>

<body>
    <?php require "../blocks/head.php" ?>

    <?php if (!isset($_SESSION['cart'])):?>

    <div>
        <h2 class="color-text">
            Ваша корзина пуста
        </h2>
    </div>

    <?php else :?>
    <?php require "../blocks/pre_order_item.php" ?>
    <?php endif; ?>
    <?php require "../blocks/footer.php"?>

</body>

</html>