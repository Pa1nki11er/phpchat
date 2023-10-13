<?php
    require 'connectdb.php';

    if (isset($_POST['submitButton'])) {
        $title = $_POST['title'];
        $checked = $_POST['checked'];
        var_dump($checked);

        if (!empty($title)) {
            $savedb = $connect->prepare("INSERT INTO todos (title, checked) VALUES (:title, :checked)");
            $savedb->bindParam(':title', $title, PDO::PARAM_STR);
            $savedb->bindParam(':checked', $checked, PDO::PARAM_STR);

            if ($savedb->execute()) {
                echo "Запись успешно добавлена в базу данных.";
            } else {
                echo "Ошибка при добавлении записи в базу данных.";
            }
        } else {
            echo "Поле 'title' не должно быть пустым.";
        }
    } else {
        echo "Форма не была отправлена.";
    }
?>
