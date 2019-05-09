$(document).ready(function () {
    $("#button").click(
        function () {
            sendAjaxForm('windform', 'action.php');
            return false;
        }
    );
});

function sendAjaxForm(windform, url) {
    $.ajax({
        url: url, //url страницы
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" +windform).serialize()
    });
}