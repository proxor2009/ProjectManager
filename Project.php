<?php
class Project {
    private $name;
    private $tasks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function __destruct() {
        echo "Проект '{$this->name}' был завершен.\n";
    }

    public function addTask(Task $task) {
        $this->tasks[] = $task;
    }

    public function __toString() {
        return "Проект: {$this->name}, Количество задач: " . count($this->tasks);
    }
}
?>
