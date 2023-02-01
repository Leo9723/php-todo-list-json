<?php

$string = file_get_contents('todoList.json');

$todoList = json_decode($string, true);

if (isset($_POST['Lang'])) {
    $language = $_POST['Lang'];
    $lang_array = [
        "language" => $language,
        "done" => false,
    ];
    $todoList[] = $lang_array;

    file_put_contents('todoList.json', json_encode($todoList));
}

header('Content-Type: application/json');

echo json_encode($todoList);
