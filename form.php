<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $trainingType = $_POST["training-type"];
  $email = $_POST["email"];

  // Настройки почтового сервера
  $to = "bebraleg0909@gmail.com";  // Замените на вашу почту
  $subject = "Форма обратной связи";
  $message = "Имя: " . $name . "\n" .
             "Тип тренировки: " . $trainingType . "\n" .
             "E-mail: " . $email;

  // Отправка письма
  if (mail($to, $subject, $message)) {
    echo "Сообщение успешно отправлено!";
  } else {
    echo "Произошла ошибка при отправке сообщения.";
  }
}
?>