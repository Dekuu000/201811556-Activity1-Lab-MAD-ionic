<?php

$pdo = require('connect.php');

$data = [
    'todolist_id' => 2,
    'todolist_name' => 'Midnight Tasks'
];

$sql = 'UPDATE todolists 
        SET todolist_name = :todolist_name 
        where todolist_id = :todolist_id';

$statement = $pdo->prepare($sql);

$statement->bindParam(':todolist_name', $data['todolist_name']);
$statement->bindParam(':todolist_id', $data['todolist_id']);

if($statement->execute()){
    echo "Update Successfully";
}else{
    echo "Failed to update";
}