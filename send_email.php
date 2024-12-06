<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "malomuzh.sofiia@gmail.com";
    $subject = "Нове повідомлення з форми";
    $body = "Ім'я: $name\nEmail: $email\nПовідомлення: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Повідомлення успішно відправлено!";
    } else {
        echo "Виникла помилка при відправці повідомлення.";
    }
}
?>