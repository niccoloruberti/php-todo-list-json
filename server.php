<?php

$stringToDoList = file_get_contents('data/toDoList.json');
$toDoList = json_decode($stringToDoList, true);

if(isset($_POST['text']) && $_POST['text'] !== '') {
    array_push($toDoList, $_POST);
    file_put_contents('data/toDoList.json', json_encode($toDoList));
}

header('Content-type: application/json');
echo json_encode($toDoList);
?>