<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pizza";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM items;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<div class='item'>";
    echo "<img src='./images/$row[image].jpg'>";
    echo "<div class='title'>$row[title]</div>";
    echo "<div class='price'>Цена: $row[price]</div>";
    echo "<div class='price'>Состав: $row[describe]</div>";
    echo "<div class='buttons'>";
    echo "<button class='button-minus' id='btn_minus_$row[id]' onclick='btnMinus($row[id])'>";
    echo "-";
    echo "</button>";
    echo "<input type='text' id='field_$row[id]' class='field-value' readonly value='1' pattern='^[0-9]{0,}$'>";
    echo "<button class='button-plus' id='btn_plus_$row[id]' onclick='btnPlus($row[id])'>";
    echo "+";
    echo "</button>";
    echo "<button id='$row[id]' class='button-add-to-cart' onclick='addToCardEvent($row[id])'>";
    echo "Добавить в корзину";
    echo "</button>";
    echo "</div>";
    echo "</div>";
    }
} else {
    echo "0 results";
}
?>