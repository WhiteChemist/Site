<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/style_order.css'>
    <script>
    $('.phonee').mask('375(99)999-99-99');
    </script>
</head>

<body>
    <?php require "../blocks/head.php" ?>
    <form action="../backend/order.php">
        <div class="color-text-order">
            <div class="color-text-order">Ваш телефон: <input type="tel" class="phonee"></div>
            <div class="color-text-order"> Ваш email: <input type="email" class="email"></div>
            <div class="color-text-order"><input type="submit" value="Отправить"></div>
        </div>
    </form>
    <?php require "../blocks/footer.php"?>

</body>

</html>


<!-- Regex для беларуских номеров ^\+(375)\((29|25|33)\)[0-9]{1,3}-[0-9]{1,2}-[0-9]{1,2}$ -->