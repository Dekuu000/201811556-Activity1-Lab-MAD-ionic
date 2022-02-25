<?php

$pdo = require('connect.php');


$sql = 'SELECT todolist_id ,todolist_name from todolists';

$statement = $pdo->query($sql);

$todolists = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($todolists);
if($todolists){
    foreach($todolists as $todolist){
        echo $todolist['todolist_id'] . ' - '. $todolist['todolist_name'] . '<br>';
    }
}else{
     echo "No Data Available";
}