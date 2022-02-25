<?php

//connection database
$pdo = require 'connect.php';

$statements = [
    'CREATE TABLE IF NOT EXISTS todolists (
        todolist_id INT AUTO_INCREMENT,
        todolist_name VARCHAR(255) NOT NULL,
        PRIMARY KEY (todolist_id)
    );',
    'CREATE TABLE IF NOT EXISTS tasks (
        task_id INT AUTO_INCREMENT,
        task_name VARCHAR(255) NOT NULL,
        task_date DATE NULL,
        todolist_id INT NULL,
        PRIMARY KEY (task_id),
        CONSTRAINT fk_todolist FOREIGN KEY (todolist_id)
            REFERENCES todolists (todolist_id)
    );'

];


//execute SQL statement
foreach ($statements as $statement) {
    $pdo->exec($statement);
}