<?php
foreach($_COOKIE as $key => $value) setcookie($key, '', time() - 3600, '/');

require "../blocks/metadata.php";
require "../blocks/head.php";
echo "<div class='color-text-order'>Ваш заказ сформирован. Ждите звонка курьера. Приблизительное время доставки 60 минут.</div>";
// Удаляем все переменные сессии.
require "../blocks/footer.php";
?>