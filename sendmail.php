<?php
if(isset($_POST['phone']))
{$phone = $_POST['phone'];}
if(isset($_POST['name']))
{$name = $_POST['name'];}
if(isset($_POST['comment']))
{$comment = $_POST['comment'];}

$site = $_SERVER['HTTP_REFERER'];

$to = ""; // Ваша почта, можно добавить несколько через запятую
$subject = "Заявка с сайта ".$site ;
$message = "Заказ  с сайта  " .$site. "\nИмя: ".$name."\nТелефон: ".$phone."\nКомментарий: ".$comment;
$headers = 'From: oltymtwo@gmail.com' ;

mail($to, $subject, $message, $headers);

?>



<!DOCTYPE html>
<html>
<head lang="ru">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <meta charset="UTF-8">
    <title>Спасибо за заказ!</title>


    <meta name="viewport" content="width=device-width">



<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->


<style type="text/css">

html { font-family: sans-serif; }
body { margin: 0px; }
audio:not([controls]) { display: none; height: 0px; }
svg:not(:root) { overflow: hidden; }
button::-moz-focus-inner, input::-moz-focus-inner { border: 0px none; padding: 0px; }
* { box-sizing: border-box; }
*::before, *::after { box-sizing: border-box; }
html { font-size: 10px; }
body { font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 14px; line-height: 1.42857; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); }
.container { margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px; }
/* ::::: http://it-sale.su/results/css/stylenull.css ::::: */

* { margin: 0px; padding: 0px; box-sizing: border-box; }
@font-face {
    font-family: "OpenSans";
    src: url('opensans.ttf');
}
@font-face {
    font-family: "OpenSansBold";
    src: url('opensansbold.ttf');
}
@font-face {
    font-family: "OpenSansItalic";
    src: url('opensansitalic.ttf');
}
@font-face {
    font-family: "OpenSansExtraBold";
    src: url('opensansextrabold.ttf');
}
@font-face {
    font-family: "OpenSansSemiBold";
    src: url('opensanssemibold.ttf');
}
html, body { height: 100%; width: 100%; }
body { background: rgb(234, 234, 234) url('bg.jpg') no-repeat scroll 50% 0px / cover ; text-align: center; padding: 50px; }
#cont { margin-top: 150px; display: inline-block; margin-right: auto; margin-left: auto; }
#ty { font-size: 4em; font-family: "OpenSansExtraBold"; color: rgb(66, 156, 98); line-height: 2em; text-align: center; margin: 0px auto 25px; padding-bottom: 15px; border-bottom: 1px solid rgb(0, 0, 0); width: 75%; }
.ty { font-size: 3em; font-family: "OpenSansSemiBold"; color: rgb(53, 53, 53); line-height: 1.2em; text-align: center; }
@media screen and (max-width: 680px) {
    #cont { margin-top: 10px; }
    #ty { font-size: 3em; line-height: 0.8em; width: auto; display: inline-block; padding: 0px 20px 15px; margin-bottom: 100px; }
    .ty { font-size: 2em; line-height: 1em; margin-bottom: 20px ! important; }
    body { padding-top: 5px; padding-right: 5px; padding-left: 5px; padding-bottom: 20px ! important; }
    @media screen and (max-width: 500px) {
    #cont { margin-top: 50px; }
    #ty { width: auto; display: inline-block; padding: 0px 20px 15px; margin-bottom: 80px; }
    .ty { line-height: 1em; }
    body { background-position: 35% 0px; padding: 5px; }
}
}

</style>

</head>
<body style="
            background: #FAFAD2 url(images/bg.jpg); /* Цвет фона и путь к файлу */
            color: #000000; /* Цвет текста */
            ">
<div class="block_success">
    <center>
        <h2 style="text-transform: uppercase;">
            Поздравляем! Ваш заказ принят!
        </h2>
        <p class="success">
            В ближайшее время с вами свяжется оператор для подтверждения заказа.
            Пожалуйста, включите ваш контактный телефон.
        </p>
        <h3 class="success">
            Пожалуйста, проверьте правильность введенной Вами информации.
        </h3>
        <div class="success">
            <ul class="list_info">
                <span>ФИO: </span><span id="client"><?php echo $_REQUEST['name']; ?></span>
                <br>
                <span>Телефон: </span><span id="tel"><?php echo $_REQUEST['phone']; ?></span>
            </ul>
            <br/>
            <span id="submit"></span>
        </div>
        <p class="fail success">
            Если вы ошиблись при заполнени формы, то, пожалуйста,
            <a href=<?php echo $site;?>>
                заполните заявку еще раз
            </a>
        </p>
    </center>
</div>


</body>
</html>