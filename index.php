<?php
require 'Task.php';
require 'Project.php';

$project = new Project("Новая системка");
$task1 = new Task("Создать макет", "Необходимо создать макет интерфейса.");
$task2 = new Task("Реализовать функционал", "Реализовать основной функционал системы.");

$project->addTask($task1);
$project->addTask($task2);

echo $project . "\n";
echo $task1 . "\n";

$task1->setStatus("Выполнено");
echo $task1 . "\n";
?>
