<?php
class Task {
 public $title;
 public $description;
 public $completed;

 public function __construct($title, $description, $completed) {
     $this->title = $title;
     $this->description = $description;
     $this->completed = $completed;
 }

 public function markAsCompleted() {
     $this->completed = true;
 }

 public function markAsIncompleted() {
     $this->completed = false;
 }

 public function getTitle() {
     return $this->title;
 }

 public function getDescription() {
     return $this->description;
 }

 public function isCompleted() {
     return $this->completed;
 }
}

$task = new Task("estudar", "estudar programação de manhã e noite", false);

print_r($task->getDescription());
