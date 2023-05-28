<?php
// Получение данных из формы
$name = $_POST['name'];
$trainingType = $_POST["training-type"];
$email = $_POST["email"];


$name = htmlspecialchars($name);
$trainingType = htmlspecialchars($$trainingType);


$name = urldecode($name);
$trainingType = urldecode($trainingType);


$name = trim($name);
$trainingType = trim($trainingType);


if(mail("bebraleg0909@gmail.com",
"Новое письмо с сайта",
"Имя: ".$name."\n".
"Телефон: ".$phone."\n".
"Услуга: ".$service."\n".
"Площадь: ".$meters,
"From: no-reply@mydomains.ru \r\n"
)
){
    echo("Письмо отправлено");
    
}else{
    echo("Ошибка");
}

?>
