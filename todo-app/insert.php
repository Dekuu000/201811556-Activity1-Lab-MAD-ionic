<?php

$pdo = require 'connect.php';

//sample data
$td_name = 'Afternoon Tasks';

$sql = 'INSERT INTO todolists(todolist_name) VALUES (:todolist_name)';
$statement = $pdo->prepare($sql);
$statement->execute([
    ':todolist_name' => $td_name
]);

$todolist_id = $pdo->lastInsertId();

echo 'The Todo List id ' . $todolist_id .' was inserted';