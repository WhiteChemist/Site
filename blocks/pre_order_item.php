<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pizza";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<div class='body'>";
foreach ($_SESSION['cart'] as $id=>$count) {
    $sql = "SELECT * FROM items WHERE id=$id;";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<img src='../images/$row[image].jpg'>";
        echo "<div class='title'>$row[title]</div>";
        echo "<div class='price'>Цена: $row[price]</div>";
        echo "<div class='price'>Состав: $row[describe]</div>";
        echo "<div class='buttons'>";
        echo "<button class='button-minus' id='btn_minus_$row[id]' onclick='btnMinus($row[id])'>";
        echo "-";
        echo "</button>";
        echo "<input type='text' id='field_$row[id]' class='field-value' readonly value='$count' pattern='^[0-9]{0,}$'>";
        echo "<button class='button-plus' id='btn_plus_$row[id]' onclick='btnPlus($row[id])'>";
        echo "+";
        echo "</button>";
        echo "</div>";
        echo "</div>";
        }
    }
}
echo "</div>";
echo "<div class='container'><div style='width:100px; height: 50px; text-size: 24px; margin-bottom: 20px; background-color: #BD842E; display: flexbox; flex-direction: row; margin-top: 20px; margin-left: 50%; margin-right: 50%;'><a href='../pages/order.php'>Оформить заказ</a></div></div>";

?>