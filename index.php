<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel ="stylesheet" href="options.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include('header.php');
?>
<body>
    <main>
    <h2>Красивые виды </h2>
        <div class="wrapper">
            <div class="table_msg">
                <div id="message-container">
                </div>
            <div class="tr">
                <div class="td-left">
                    <img src="dom.jpg" alt="" class="img-table-left">
                </div>
                <div class="td-right">
                    Invisible IV Sharpness V Efficiency VI Fortune III Smite V Fire protection V
                </div>
            </div>
            <div class="tr">
                <div class="td-left">
                    <button id="button_send_msg" class="img-table-left">Отправить Сообщение</button>
                </div>
                <div class="td-right">
                    <textarea name="" id="textarea_text" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('footer.php');
?>
</body>
</html>
<script>
    function addTr()
    {
        let messageText = textarea_text.value.trim();

        if (messageText.length === 0) {
            alert("Введите хотя бы один символ в текстовое поле");
            return;
        }
        let tr = document.createElement("div")
        tr.className = "tr";

        let td_left = document.createElement("div")
        td_left.className = "td-left";
        let img = document.createElement("img");
        img.className = "img-table-left";
        img.src = "cat.jpg";
        td_left.appendChild(img);
        tr.appendChild(td_left);

        let td_right = document.createElement("div")
        td_right.className = "td-right";
        let textNode = document.createTextNode(messageText);
        td_right.appendChild(textNode); 
        tr.appendChild(td_right); 

       let messageContainer = document.getElementById("message-container");
    messageContainer.appendChild(tr);

        textarea_text.value = "";
    }
    let button_send_msg = document.getElementById("button_send_msg");
    button_send_msg.addEventListener("click", addTr);
</script>
