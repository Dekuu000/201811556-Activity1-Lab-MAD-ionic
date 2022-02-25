<?php

$pdo = require('connect.php');

$todolist_id = 2;

$sql = 'DELETE from todolists where todolist_id = :todolist_id';

$statement = $pdo->prepare($sql);
$statement->bindParam(':todolist_id',$todolist_id);

if($statement->execute()){
    echo "Data has been deleted!";
}