<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Здесь вы можете сохранить данные в базе данных или отправить их по электронной почте
    // Пример сохранения данных в файл
    $data = "Имя: $name\nE-mail: $email\nТелефон: $phone\nСообщение: $message\n\n";
    file_put_contents('messages.txt', $data, FILE_APPEND);

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
