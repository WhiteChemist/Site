function btnMinus(id) {
    var value = document.getElementById('field_' + id).value;
    if (value != 1) {
        value--;
        document.getElementById('field_' + id).setAttribute("value", value)
    }
}

function btnPlus(id) {
    var value = document.getElementById('field_' + id).value;
    value++;
    document.getElementById('field_' + id).setAttribute("value", value)
}

function addToCardEvent(id) {
    var id = id;
    var count = document.getElementById('field_' + id).value;
    $.ajax({ //передаем ajax-запросом данные
        type: "POST", //метод передачи данных
        url: './backend/addtocart.php', //php-файл для обработки данных
        data: { id_tov: id, count_good: count }, //передаем наши данные
        success: function(data) { //
            console.log("Id:" + id + " Count:" + count);
        }
    });

}