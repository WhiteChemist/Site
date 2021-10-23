<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Пиццерия Жёлудь</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./styles/style.css'>
    <!-- <script src="/scripts/elements.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
<script>
function btnPlus(id) {
    var value = document.getElementById('field_' + id).value;
    value++;
    document.getElementById('field_' + id).setAttribute("value", value)
    $(this).show(300);
    $(this).fadeTo("slow", 0.5);
}
</script>
</head>

<body>
    <?php require "blocks/head.php" ?>
    <div class="body">
    <?php require "blocks/item.php"?>
    </div>
    <?php require "blocks/footer.php"?>
</body>

</html>